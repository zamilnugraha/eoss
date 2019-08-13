<?php

require 'koneksi.php';

koneksi_buka();

$id_medipartner = $_POST['id'];


$data = mysql_fetch_array(mysql_query("SELECT * FROM tblmediapartner WHERE id_medipartner=".$id_medipartner.""));

if($id_medipartner > 0) { 
	$program_title = $data['program_title'];
	$categories = $data['categories'];
	$season = $data['season'];
	$total_episode = $data['total_episode'];
	$duration = $data['duration'];
	$production_year = $data['production_year'];
	$description = $data['description'];
	$tv_station = $data['tv_station'];

} else {
	$program_title = '';
	$categories = '';
	$season = '';
	$total_episode = '';
	$duration = '';
	$production_year = '';
	$description = '';
	$tv_station = '';
}

?>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>


<style>

body
{
font-family:arial;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
<br>
<?php #include "myupload/index.php"; 

?>

<!-- upload DATA -->	
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<style>
/*form { display: block; margin: 20px auto; background: #fff; border-radius: 10px; padding: 15px  width:5px;}*/
#progress { position:relative; width:150px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
</head>
<body>

<?php 
$host = "172.16.8.101";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transmediamprsdb";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

?>
<form id="myForm" action="myupload/uploadeps1.php" method="post" enctype="multipart/form-data" style="width:10%;">
<!-- Browse File-->
	 <input type="hidden" name="id_medipartner" value="<?php echo $data['id_medipartner']; ?>" >
	 <input type="file"  size="60" name="myfile" style="width:200px;">
  
 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>

     <input type="submit" value="Upload" style="width:50px;">
 </form>
<br/>
    
<div id="message"></div>


<script>
$(document).ready(function()
{

	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('0%');
    	$("#message").html("");
		$("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	$("#bar").width(percentComplete+'%');
    	$("#percent").html(percentComplete+'%');

    
    },
    success: function(data) 
    {
        $("#bar").width('100%');
    	$("#percent").html('100%');
    },
	complete: function(response) 
	{
		$("#message").html("<font color='blue'>"+response.responseText+"</font>");
	},
	error: function()
	{
		$("#message").html("<font color='red'> ERROR: unable to upload files</font>");

	}
     
}; 

     $("#myForm").ajaxForm(options);

});

</script>
</body>		
<!-- END UPLOAD DATA -->	
<!-- PROSES UPLOAD DATA -->	
<?php


$host = "172.16.8.101";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transmediamprsdb";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

//$id_medipartner	= $_POST['id_medipartner'];
$id_medipartner	= $data['id_medipartner'];

$output_dir = 'http://'.$_SERVER['SERVER_NAME'].':81/transmediamprs/images/mediapartner/data_'.$data['id_medipartner'].'/';
$upload_filename = $_FILES["myfile"]["name"];
$upload_filesize = $_FILES["myfile"]["size"];
$upload_filelocation = 'http://'.$_SERVER['SERVER_NAME'].':81/transmediamprs/images/mediapartner/data_'.$data['id_medipartner'].'/';

if(isset($_FILES["myfile"]))
{
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		//move the uploaded file to uploads folder;
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$upload_filename))
	{
		
		mysql_query("UPDATE tblmediapartner SET upload_filename='$upload_filename', upload_filelocation='$upload_filelocation', 
		upload_filesize='$upload_filesize' WHERE id_medipartner='".$data['id_medipartner']."' ");
		/*	mysql_query("INSERT INTO pictures (
			id_picture,
			id_video,
			name
			) 
			VALUES (
			'',
			'$id_videox',
			'$fname'
			)");
		*/

    }else{
		echo "Gagal Uplaod";
	}
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
   	 echo "<br>"; echo $output_dir;
	 #echo " <meta http-equiv=\"refresh\" content=\"0\" href=\"programdetail.data.php\" /> ";
		echo "<meta http-equiv=Refresh content=2;url=programdetail.data.php>"; 
	}

}
?>
<!-- END PROSES UPLOAD DATA -->	

<?php

koneksi_tutup();
?>
