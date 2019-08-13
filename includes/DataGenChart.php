<?php

function getSalesByYear(&$FC) {

    // Function to connect to the DB
/**
    $link = connectToDB();

    $strSQL = "SELECT Year(o.OrderDate) As SalesYear, ROUND(SUM(d.Quantity*p.UnitPrice),0) As Total, 
	SUM(d.Quantity) as Quantity FROM FC_OrderDetails as d,FC_Orders as o,FC_Products as p WHERE o.OrderID=d.OrderID 
	and d.ProductID=p.ProductID GROUP BY Year(o.OrderDate) ORDER BY Year(o.OrderDate)";
	
    $result = mysql_query($strSQL) or die(mysql_error());
	
    if ($result) {
        //Initialize datasets
        $FC->addDataset("Revenue",""); 
		while($ors = mysql_fetch_array($result)) {
            $FC->addCategory($ors['SalesYear'],"");
			
            //Generate the link
            $strLink = urlencode("javaScript:updateCharts(" . $ors['SalesYear'] . ");");
			//Add Set with in DataSet
			$FC->addChartData($ors['Total'],"link=" . $strLink);
            
        }
		
		//Initialize datasets
		$FC->addDataset("Units Sold","parentYAxis=S"); 
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
			//Add Set with in DataSet
		    $FC->addChartData($ors['Quantity'],"");
		}
		
    }
    mysql_close($link);

}
**/
function getStatisticByMonths(&$FC) {

    // Function to connect to the DB

    #$link = connectToDB();
    $link = mssql_connect();

    $strSQL = "SELECT m.month_no, m.months, isnull(h.Total,0) as jumlah
				FROM (select * from ITH_MONTH) AS m
				LEFT JOIN
				(SELECT DATENAME(mm, article.ticket_createdate) AS Months, 
					DATENAME(yyyy, article.ticket_createdate) AS Years, 
					COUNT(*) AS Total 
				FROM ith_ticket AS article WHERE DATENAME(yyyy, article.ticket_createdate)='2012'
				AND ticket_createbydep!='3' 
				GROUP BY 
					DATENAME(mm, article.ticket_createdate), 
					DATENAME(yyyy, article.ticket_createdate) ) as h
				ON m.months=h.Months
				ORDER BY m.month_no ASC";
	
    $result = mssql_query($strSQL) or die(mssql_error());
/**	
    if ($result) {
        //Initialize datasets
        $FC->addDataset("Revenue",""); 
		while($ors = mysql_fetch_array($result)) {
            $FC->addCategory($ors['SalesYear'],"");
			
            //Generate the link
            $strLink = urlencode("javaScript:updateCharts(" . $ors['SalesYear'] . ");");
			//Add Set with in DataSet
			$FC->addChartData($ors['Total'],"link=" . $strLink);
            
        }
		
		//Initialize datasets
		$FC->addDataset("Units Sold","parentYAxis=S"); 
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
			//Add Set with in DataSet
		    $FC->addChartData($ors['Quantity'],"");
		}
		
    }
**/	
	   if ($result) {
        //Initialize datasets
        $FC->addDataset("Revenue",""); 
		while($ors = mssql_fetch_array($result)) {
            $FC->addCategory($ors['Months'],"");
			
            //Generate the link
            $strLink = urlencode("javaScript:updateCharts(" . $ors['Months'] . ");");
			//Add Set with in DataSet
			$FC->addChartData($ors['jumlah'],"link=" . $strLink);
            
        }
		
		//Initialize datasets
		$FC->addDataset("Units Sold","parentYAxis=S"); 
		mssql_data_seek($result,0);
		while($ors = mssql_fetch_array($result)) {
			//Add Set with in DataSet
		    $FC->addChartData($ors['jumlah'],"");
		}
		
    }
    mysql_close($link);

}

//getCumulativeSalesByCatXML returns the cumulative sales for each category
//in a given year
function getCumulativeSalesByCatXML($intYear, $forDataURL,&$FC) {

    // Function to connect to the DB
    $link = connectToDB();

    //To store categories - also flag to check whether category is
	//already generated
    $catXMLDone = false;
	
	$arrCat =array();
    $strSQL = "SELECT  distinct Month(o.OrderDate) as MonthNum from FC_Orders as o WHERE year(o.OrderDate)=$intYear order by Month(o.OrderDate)";
    $result = mysql_query($strSQL) or die(mysql_error());
    if ($result) {
        $mc=0;
        while($orsCat = mysql_fetch_array($result)) {
           //Add this category as dataset
           $arrCat[$mc++]=MonthName($orsCat['MonthNum'],true);
           $FC->addCategory(MonthName($orsCat['MonthNum'],true));
         }
     mysql_free_result($result);
    }
 
	
	//First we need to get unique categories in the database
	$strSQL = "Select CategoryID,CategoryName from FC_Categories GROUP BY CategoryID,CategoryName";
    $result = mysql_query($strSQL) or die(mysql_error());

    if ($result) {
        while($orsCat = mysql_fetch_array($result)) {
            //Add this category as dataset
            $FC->addDataset(escapeXML($orsCat['CategoryName'],$forDataURL),"");
			 
            //Now, we need to get monthly sales data for products in this category
            $strSQL = "SELECT  Month(o.OrderDate) as MonthNum, g.CategoryID, g.CategoryName, ROUND(SUM(d.Quantity),0) as Quantity, 
			SUM(d.Quantity*p.UnitPrice) As Total FROM FC_Categories as g,  FC_Products as p, FC_Orders as o, FC_OrderDetails as d  
			WHERE year(o.OrderDate)=" . $intYear ." and g.CategoryID=" . $orsCat['CategoryID'] . " and d.ProductID=p.ProductId 
			and g.CategoryID= p.CategoryID and o.OrderID= d.OrderID GROUP BY g.CategoryID,g.CategoryName,Month(o.OrderDate)";
			
            //Execute it
			$result2 = mysql_query($strSQL) or die(mysql_error());
			$mc=0;
            while($ors = mysql_fetch_array($result2)) {
                
                //Generate the link
                $strLink = urlencode("javaScript:updateProductChart(" . $intYear . "," . $ors['MonthNum'] . "," . $ors['CategoryID'] . ")");
                //Append data
    		    while($arrCat[$mc++]<$ors["MonthNum"]){
				    $FC->addChartData();
                }

				$FC->addChartData($ors['Total'],"link=" . $strLink,"");
            }
			if($mc<count($arrCat)){
				for($i=0;$i<count($arrCat)-$mc;$i++){
					$FC->addChartData();
				}
			}
            //Update flag that we've appended categories		
            $catXMLDone = true;
            //Clear up objects
            mysql_free_result($result2);
            
        }
    }
    mysql_close($link);
    
}


//getSalesByProdXML returns the sales for the products within a category
//for a given year and month 
function getSalesByProdXML($intYear, $intMonth, $intCatId, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	
	//First we need to get unique categories in the database
	$strSQL = "SELECT  g.CategoryName,p.ProductName,ROUND(SUM(d.Quantity),0) as Quantity, ROUND(SUM(d.Quantity*p.UnitPrice),0) As Total 
	FROM FC_Categories as g,  FC_Products as p, FC_Orders as o, FC_OrderDetails as d WHERE year(o.OrderDate)=" . $intYear . " 
	and month(o.OrderDate)=" . $intMonth . " and g.CategoryID=" . $intCatId . " and d.ProductID= p.ProductID and g.CategoryID= p.CategoryID 
	and o.OrderID= d.OrderID GROUP BY g.CategoryName,p.ProductName";
	
    $result = mysql_query($strSQL) or die(mysql_error());

    if ($result) {
		# Add Chart Dataset
	    $FC->addDataset("Revenue",""); 
        while($ors = mysql_fetch_array($result)) {
		    # Add Chart category
			$FC->addCategory(escapeXML($ors['ProductName'],$forDataURL),"");
			# Add Chart Data
			$FC->addChartData($ors['Total'],"");
        }
		# Add Chart Dataset
		$FC->addDataset("Units Sold","parentYAxis=S"); 
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		    # Add Chart Data
			$FC->addChartData($ors['Quantity'],"");
       }
    }
    mysql_close($link);
	
} 

//getAvgShipTimeXML function returns the delay in average shipping time required
//to ship an item.
//$intYear - Year for which we calculate average shipping time
//$numCountries - For how many countries. If -1, then all countries
//$addJSLinks - Whether to add JavaScript links
//$forDataURL - Whether XML Data to be generated for dataURL method or dataXML method
//Returns - Single Series XML Data
function getAvgShipTimeXML($intYear, $numCountries, $addJSLinks, $forDataURL,&$FC) {
    // Function to connect to the DB
    $link = connectToDB();
		
	//Retrieve the shipping info	
	if ($numCountries==-1)
		$strSQL = "SELECT c.Country as Country, ROUND(AVG(DAY(o.ShippedDate)-DAY(o.RequiredDate)),0) As Average 
		FROM FC_Customers as c, FC_Orders as o WHERE YEAR(o.OrderDate)=" . $intYear . " and c.CustomerID=o.CustomerID 
		GROUP BY c.Country ORDER BY Average DESC";
	else
        $strSQL = "SELECT c.Country as Country, CInt(AVG(DAY(o.ShippedDate)-DAY(o.RequiredDate))) As Average 
		FROM FC_Customers as c, FC_Orders as o WHERE YEAR(o.OrderDate)=" . $intYear . " and c.CustomerID=o.CustomerID 
		GROUP BY c.Country ORDER BY Average DESC LIMIT " . $numCountries;
 
    $result = mysql_query($strSQL) or die(mysql_error());

    if ($result) {
        while($ors = mysql_fetch_array($result)) {
            //Append the data
            //If JavaScript links are to be added
            if ($addJSLinks) {
                //Generate the link
                //TRICKY: We're having to escape the " character using chr(34) character.
                //In HTML, the data is provided as chart.setXMLData(" - so " is already used and un-terminated
                //For each XML attribute, we use '. So ' is used in <set link='
                //Now, we've to pass Country Name to JavaScript function, so we've to use chr(34)
                $strLink = urlencode("javaScript:updateChart(" . $intYear . "," . chr(34) . $ors['Country'] .  chr(34) . ");");
				# Add Chart Data
				$FC->addChartData($ors['Average'],"label=" . escapeXML($ors['Country'], $forDataURL) . ";link=" . $strLink,"");
                
            } else
			    # Add Chart Data
				$FC->addChartData($ors['Average'],"label=" . escapeXML($ors['Country'], $forDataURL) ,"");
                
        }
    }
    mysql_close($link);

}

//getAvgShipTimeCityXML function returns the average shipping time required
//to ship an item for the cities within the given country
//$intYear - Year for which we calculate average shipping time
//$country - Cities of which country?
//Returns - Single Series XML Data
function getAvgShipTimeCityXML($intYear, $country, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
		
	//Retrieve the shipping info by city
	$strSQL = "Select ShipCity, ROUND(AVG(DAY(ShippedDate)-DAY(RequiredDate)),0) As Average from FC_Orders WHERE YEAR(OrderDate)=" . $intYear . " 
	and ShipCountry='" . $country . "' GROUP BY ShipCity ORDER BY Average DESC ";
	
    $result = mysql_query($strSQL) or die(mysql_error());

    //Create the XML data document containing only data
    //We add the <chart> element in the calling function, depending on needs.	
    $strXML = "";
    if ($result) {
        while($ors = mysql_fetch_array($result)) {
            # Add Chart Data
			$FC->addChartData($ors['Average'],"label=" . escapeXML($ors['ShipCity'],$forDataURL),"");
        }
    }
    mysql_close($link);

    return $strXML;
}

//getTopCustomersXML returns the XML data for top customers for
//the given year.
function getTopCustomersXML($intYear, $howMany, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	$strSQL = "SELECT c.CompanyName as CustomerName, SUM(d.Quantity*p.UnitPrice) As Total, SUM(d.Quantity) As Quantity FROM FC_Customers as c, FC_OrderDetails as d, FC_Orders as o, FC_Products as p WHERE YEAR(OrderDate)=" . $intYear . " and c.CustomerID=o.CustomerID and o.OrderID=d.OrderID and d.ProductID=p.ProductID GROUP BY c.CompanyName ORDER BY Total DESC LIMIT ". $howMany;
    $result = mysql_query($strSQL) or die(mysql_error());


	//Iterate through each data row
    if ($result) {
	    # Add Chart Dataset
		$FC->addDataset("Amount",""); 
        while($ors = mysql_fetch_array($result)) {
			# Add Chart category
			$FC->addCategory(escapeXML($ors['CustomerName'],$forDataURL),"");
			# Add Chart Data
			$FC->addChartData($ors['Total'],"","");
            
        }
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S"); 
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		    # Add Chart Data
			$FC->addChartData($ors['Quantity'],"","");
        }
    }
    mysql_close($link);

}

//getCustByCountry function returns number of customers present
//in each country in the database.
function getCustByCountry($forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

    $counter = 0;

	//Retrieve the data
	$strSQL = "SELECT count(CustomerID) AS Num, Country FROM FC_Customers GROUP BY Country ORDER BY Num DESC;";
    $result = mysql_query($strSQL) or die(mysql_error());
	
	//Create the XML data document containing only data
	//We add the <chart> element in the calling function, depending on needs.	
    if ($result) {
        while($ors = mysql_fetch_array($result)) {
            //Increase counter
            $counter++;
            //Append the data
            //We slice the first pie (the country having highest number of customers)		
            if ($counter==1)
			    # Add Chart Data
			    $FC->addChartData( $ors['Num'],"label=" . escapeXML($ors['Country'],$forDataURL) .";isSliced=1","");
                
            else
			    # Add Chart Data
				$FC->addChartData( $ors['Num'],"label=" . escapeXML($ors['Country'],$forDataURL),"");
        }
    }
    mysql_close($link);

}

//getSalePerEmp function returns the XML data for sales generated by
//each employee for the given year
function getSalePerEmpXML($intYear, $howMany, $slicePies, $addJSLinks, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

    $count = 0;

    //Retrieve the data
    $strSQL = "SELECT e.LastName, e.EmployeeID, SUM(d.Quantity*p.UnitPrice) As Total FROM FC_Employees as e,FC_Orders as o, FC_OrderDetails as d, FC_Products as p WHERE YEAR(OrderDate)=" . $intYear . " and e.EmployeeID=o.EmployeeID and o.OrderID=d.OrderID and d.ProductID=p.ProductID GROUP BY e.LastName,e.EmployeeID ORDER BY Total DESC";
	if ($howMany!=-1)
		$strSQL .= " LIMIT " . $howMany;

    $result = mysql_query($strSQL) or die(mysql_error());

    //Create the XML data document containing only data
	//We add the <chart> element in the calling function, depending on needs.	
    if ($result) {
        while($ors = mysql_fetch_array($result)) {
            //Append the data
            $count++;

            //If link is to be added
            if ($addJSLinks)
                $strLink = "link=javascript:updateChart(" . $ors['EmployeeID'] . ")";
            else
                $strLink = "";

            //If top 2 employees, then sliced out				
            if ($slicePies && ($count<3))
                $slicedOut="1";
            else
                $slicedOut="0";
			
			$strParam="label=" . escapeXML($ors['LastName'],$forDataURL) . ";isSliced=" . $slicedOut . ";" . $strLink;
			# Add Chart Data
			$FC->addChartData($ors['Total'],$strParam);
			
        }
    }
    mysql_close($link);

}

//getSalesByCountryXML function returns the XML Data for sales
//for a given country in a given year.
function getSalesByCountryXML($intYear, $howMany, $addJSLinks, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

    $strSQL = "SELECT c.Country, ROUND(SUM(d.Quantity*p.UnitPrice*(1-d.Discount)),0) As Total, SUM(d.Quantity) as Quantity FROM FC_Customers as c, FC_Products as p, FC_Orders as o, FC_OrderDetails as d WHERE YEAR(OrderDate)=" . $intYear . " and d.ProductID=p.ProductID and c.CustomerID=o.CustomerID and o.OrderID=d.OrderID GROUP BY c.Country ORDER BY Total DESC";
	if ($howMany!=-1)
		$strSQL .= " LIMIT " . $howMany;
	
    $result = mysql_query($strSQL) or die(mysql_error());

	//Iterate through each data row
    if ($result) {
		# Add Chart Dataset
		$FC->addDataset("Amount",""); 
        while($ors = mysql_fetch_array($result)) {
		   	# Add Chart category
			$FC->addCategory(escapeXML($ors['Country'],$forDataURL),"");
		
            //If JavaScript links are to be added
            if ($addJSLinks) {
                //Generate the link
                //TRICKY: We're having to escape the " character using chr(34) character.
                //In HTML, the data is provided as chart.setXMLData(" - so " is already used and un-terminated
                //For each XML attribute, we use '. So ' is used in <set link='
                //Now, we//ve to pass Country Name to JavaScript function, so we've to use chr(34)
                $strLink = urlencode("javaScript:updateChart(" . $intYear . "," . chr(34) . $ors['Country'] .  chr(34) . ");");
				# Add Chart Data
				$FC->addChartData($ors['Total'],"link=" . $strLink,"");
                
            }
            else
			    # Add Chart Data
			    $FC->addChartData($ors['Total'],"","");
         
        }
		# Add Chart Dataset
        $FC->addDataset("Quantity","parentYAxis=S"); 
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		     # Add Chart Data 
			 $FC->addChartData($ors['Quantity'],"","");	
		}
		
    }
    mysql_close($link);
}

//getSalesByCountryCityXML function generates the XML data for sales
//by city within the given country, for the given year.
function getSalesByCountryCityXML($intYear, $country, $forDataURL,&$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	$strSQL = "SELECT  c.City, ROUND(SUM(d.Quantity*p.UnitPrice*(1-d.Discount)),0) As Total, SUM(d.Quantity) as Quantity  FROM FC_Customers as c, FC_Products as p, FC_Orders as o, FC_OrderDetails as d WHERE YEAR(OrderDate)=" . $intYear . " and d.ProductID=p.ProductID and c.CustomerID=o.CustomerID and o.OrderID=d.OrderID and c.Country='" . $country . "' GROUP BY c.City ORDER BY Total DESC";
    $result = mysql_query($strSQL) or die(mysql_error());

    if ($result) {
		# Add Chart Dataset
		$FC->addDataset("Amount","");
        while($ors = mysql_fetch_array($result)) {
            # Add Chart category
			$FC->addCategory(escapeXML($ors['City'],$forDataURL),"");
			# Add Chart Data
			$FC->addChartData($ors['Total'],"","");
		           
        }
		
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		    # Add Chart Data
		    $FC->addChartData($ors['Quantity'],"","");
           
        }
    }
    mysql_close($link);
	
}

//getSalesByCountryCustomerXML function generates the XML data for sales
//by customers within the given country, for the given year.
function getSalesByCountryCustomerXML($intYear, $country, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	$strSQL = "SELECT c.CompanyName as CustomerName, SUM(d.Quantity*p.UnitPrice) As Total, SUM(d.Quantity) As Quantity FROM FC_Customers as c, FC_OrderDetails as d, FC_Orders as o, FC_Products as p WHERE YEAR(OrderDate)=" . $intYear . " and c.CustomerID=o.CustomerID and o.OrderID=d.OrderID and d.ProductID=p.ProductID and c.Country='" . $country . "' GROUP BY c.CompanyName ORDER BY Total DESC";
    $result = mysql_query($strSQL) or die(mysql_error());
		
	
	//Iterate through each data row
    if ($result) {
	    # Add Chart Dataset
		$FC->addDataset("Amount","");
        while($ors = mysql_fetch_array($result)) {
            //Since customers name are long, we truncate them to 5 characters and then show ellipse
            //The full name is then shown as toolText
			# Add Chart category
			$FC->addCategory(escapeXML(substr($ors['CustomerName'],0,5) . "...", $forDataURL),"toolText=" . escapeXML($ors['CustomerName'],$forDataURL));
 			# Add Chart Data
			$FC->addChartData($ors['Total'],"","");
        }
        # Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		mysql_data_seek($result,0);
        while($ors = mysql_fetch_array($result)) {
   			# Add Chart Data
			$FC->addChartData($ors['Quantity'],"","");
         }

    }
    mysql_close($link);

}

//getExpensiveProdXML method returns the 10 most expensive products
//in the database along with the sales quantity of those products
//for the given year
function getExpensiveProdXML($intYear, $howMany, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	$strSQL = "SELECT p.ProductName, p.UnitPrice, SUM(d.Quantity) as Quantity FROM FC_Products p, FC_Orders as o, FC_OrderDetails d WHERE YEAR(OrderDate)=" . $intYear . " and d.ProductID=p.ProductID and o.OrderID=d.OrderID GROUP BY p.ProductName,p.UnitPrice  ORDER BY p.UnitPrice DESC LIMIT " . $howMany ;
    $result = mysql_query($strSQL) or die(mysql_error());

    //Iterate through each data row
    if ($result) {
        # Add Chart Dataset
		$FC->addDataset("Unit Price","");
		while($ors = mysql_fetch_array($result)) {
		    # Add Chart category
			$FC->addCategory(escapeXML($ors['ProductName'],$forDataURL),"");
			# Add Chart Data
			$FC->addChartData($ors['UnitPrice'],"","");

        }
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
			# Add Chart Data
			$FC->addChartData($ors['Quantity'],"","");
        }
    }
    mysql_close($link);

}

//getInventoryByCatXML function returns the inventory of all items
//and their respective quantity
function getInventoryByCatXML($addJSLinks, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

	$strSQL = "SELECT  c.CategoryName,ROUND(SUM(p.UnitsInStock),0) as Quantity, ROUND(SUM(p.UnitsInStock*p.UnitPrice),0) as Total from FC_Categories as c , FC_Products as p WHERE c.CategoryID=p.CategoryID GROUP BY c.CategoryName ORDER BY Total DESC";
    $result = mysql_query($strSQL) or die(mysql_error());

    //Iterate through each data row
    if ($result) {
	    # Add Chart Dataset
		$FC->addDataset("Cost of Inventory","");
        while($ors = mysql_fetch_array($result)) {
		    # Add Chart category
			$FC->addCategory(escapeXML($ors['CategoryName'],$forDataURL),"");
            
            //If JavaScript links are to be added
            if ($addJSLinks) {
                //Generate the link
                //TRICKY: We//re having to escape the " character using chr(34) character.
                //In HTML, the data is provided as chart.setXMLData(" - so " is already used and un-terminated
                //For each XML attribute, we use '. So ' is used in <set link='
                //Now, we've to pass Country Name to JavaScript function, so we've to use chr(34)
                $strLink = urlencode("javaScript:updateChart(" . chr(34) . $ors['CategoryName'] .  chr(34) . ")");
                # Add Chart Data
				$FC->addChartData($ors['Total'],"link=" . $strLink ,"");
            }
            else
			    # Add Chart Data
                $FC->addChartData($ors['Total'],"","");
        }
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		    # Add Chart Data
			$FC->addChartData($ors['Quantity'],"","");
		}
    }
    mysql_close($link);

}

//getInventoryByProdXML function returns the inventory of all items
//within a given category and their respective quantity
function getInventoryByProdXML($catName, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

	$strSQL = "SELECT p.ProductName,ROUND((SUM(p.UnitsInStock)),0) as Quantity , ROUND((SUM(p.UnitsInStock*p.UnitPrice)),0) as Total from FC_Categories as c , FC_Products as p WHERE c.CategoryID=p.CategoryID and c.CategoryName='" . $catName . "' GROUP BY p.ProductName Having SUM(p.UnitsInStock)>0";
    $result = mysql_query($strSQL) or die(mysql_error());

			
	//Iterate through each data row
    if ($result) {
		# Add Chart Dataset
		$FC->addDataset("Cost of Inventory","");
        while($ors = mysql_fetch_array($result)) {
            //Product Names are long - so show 8 characters and ... and show full thing in tooltip
            if (strlen($ors['ProductName'])>8)
                $shortName = escapeXML(substr($ors['ProductName'],0,8) . "...",$forDataURL);
            else
                $shortName = escapeXML($ors['ProductName'],$forDataURL);
			# Add Chart category
			$FC->addCategory($shortName,"toolText=" . escapeXML($ors['ProductName'],$forDataURL));
			# Add Chart Data
			$FC->addChartData($ors['Total'],"","");
            
        }
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		mysql_data_seek($result,0);
		while($ors = mysql_fetch_array($result)) {
		   # Add Chart Data
		   $FC->addChartData($ors['Quantity'],"","");
		}
		
    }
    mysql_close($link);

}

//getSalesByCityXML function returns the XML Data for sales
//for all cities in a given year.
function getSalesByCityXML($intYear, $howMany, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
    $strSQL = "SELECT c.City, SUM(d.Quantity*p.UnitPrice) As Total FROM FC_Customers as c, FC_Products as p, FC_Orders as o, FC_OrderDetails as d   WHERE YEAR(OrderDate)=" . $intYear . " and d.ProductID=p.ProductID and c.CustomerID=o.CustomerID and o.OrderID=d.OrderID GROUP BY c.City ORDER BY Total DESC";
	if ($howMany!=-1)
        $strSQL .= " LIMIT " . $howMany;
	
    $result = mysql_query($strSQL) or die(mysql_error());

	//Iterate through each data row
    if ($result) {
        while($ors = mysql_fetch_array($result)) {
			# Add Chart Data
			$FC->addChartData($ors['Total'] ,"label=" . escapeXML($ors['City'],$forDataURL),"");
        }
    }
    mysql_close($link);

}

//getYrlySalesByCatXML function returns the XML Data for sales
//for a given country in a given year.
function getYrlySalesByCatXML($intYear, $addJSLinks, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();
	
	$strSQL = "SELECT g.CategoryID,g.CategoryName,SUM(d.Quantity*p.UnitPrice) as Total, SUM(d.Quantity) As Quantity FROM FC_Categories as g, FC_Products as p, FC_Orders as o, FC_OrderDetails as d  WHERE YEAR(OrderDate)=" . $intYear . " and d.ProductID=p.ProductID and g.CategoryID=p.CategoryID and o.OrderID=d.OrderID GROUP BY g.CategoryID,g.CategoryName ORDER BY Total DESC";
    $result = mysql_query($strSQL) or die(mysql_error());

	//Iterate through each data row
    if ($result) {
	    # Add Chart Dataset
		$FC->addDataset("Revenue","");
        while($ors = mysql_fetch_array($result)) {
		    # Add Chart category
		    $FC->addCategory(escapeXML($ors['CategoryName'],$forDataURL),"");

            //If JavaScript links are to be added
            if ($addJSLinks) {
                //Generate the link
                $strLink = urlencode("javaScript:updateChart(" . $intYear . "," . $ors['CategoryID'] . ");");
				# Add Chart Data
				$FC->addChartData($ors['Total'],"link=" . $strLink ,"");
             }
            else
			    # Add Chart Data
				$FC->addChartData($ors['Total'],"","");
         
        }
		mysql_data_seek($result, 0);
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		while($ors = mysql_fetch_array($result)) {
			  # Add Chart Data
			  $FC->addChartData($ors['Quantity'],"","");
		}
		
    }
    mysql_close($link);

}

//getSalesByProdCatXML function returns the sales of all items
//within a given category in a year and their respective quantity
function getSalesByProdCatXML($intYear, $catId, $forDataURL, &$FC) {
    // Function to connect to the DB
    $link = connectToDB();

	$strSQL = "SELECT g.CategoryName,p.ProductName,ROUND(SUM(d.Quantity),0) as Quantity, ROUND(SUM(d.Quantity*p.UnitPrice),0) As Total FROM FC_Categories as g,  FC_Products as p, FC_Orders as o, FC_OrderDetails as d WHERE year(o.OrderDate)=" . $intYear . " and g.CategoryID=" . $catId . " and d.ProductID=p.ProductID and g.CategoryID=p.CategoryID and o.OrderID=d.OrderID GROUP BY g.CategoryName,p.ProductName";
    $result = mysql_query($strSQL) or die(mysql_error());

		
	//Iterate through each data row
    if ($result) {
	    # Add Chart Dataset
		$FC->addDataset("Revenue","");
        while($ors = mysql_fetch_array($result)) {
            //Product Names are long - so show 8 characters and ... and show full thing in tooltip
            if (strlen($ors['ProductName'])>8)
                $shortName = escapeXML(substr($ors['ProductName'],0,8) . "...",$forDataURL);
            else
                $shortName = escapeXML($ors['ProductName'],$forDataURL);
            # Add Chart category
			$FC->addCategory($shortName,"toolText=" . escapeXML($ors['ProductName'],$forDataURL));	
			# Add Chart Data		
            $FC->addChartData($ors['Total'],"","");	
        
        }
		mysql_data_seek($result,0);
		# Add Chart Dataset
		$FC->addDataset("Quantity","parentYAxis=S");
		while($ors = mysql_fetch_array($result)) {
			# Add Chart Data  
			$FC->addChartData($ors['Quantity'],"","");	
	    
		}
    }
    mysql_close($link);

}


//getEmployeeName function returns the name of an employee based
//on his id.
function getEmployeeName($empId) {

    // Function to connect to the DB
    $link = connectToDB();

	//Retrieve the data
    $strSQL = "SELECT FirstName, LastName FROM FC_Employees where EmployeeID=" . $empId;
    $result = mysql_query($strSQL) or die(mysql_error());
    if ($result) {
        if (mysql_num_rows($result) > 0) {
            $ors = mysql_fetch_array($result);
            $name = $ors['FirstName'] . " " . $ors['LastName'];
        } else {
            $name = " N/A ";
        }
    }
    mysql_close($link);

    return $name;
}

//getCategoryName function returns the category name for a given category
//id
function getCategoryName($catId) {
		
    // Function to connect to the DB
    $link = connectToDB();

	//Retrieve the data
	$strSQL = "SELECT CategoryName FROM FC_Categories where CategoryID=" . $catId;
    $result = mysql_query($strSQL) or die(mysql_error());
    if ($result) {
        if (mysql_num_rows($result) > 0) {
            $ors = mysql_fetch_array($result);
            $category = $ors['CategoryName'];
        } else {
            $category = " ";
        }
    }
    mysql_close($link);

    return $category;
}
?>