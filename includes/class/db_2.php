<?php
	class ocidb {
		var $showDebug = 0; //0=simpan error, 1=tampilkan error
		var $showParameter = 1; //0=simpan parameter, 1=tampilkan parameter
		
		/*Setter function*/
		function setShowDebug($showDebug) {
			$this->showDebug = $showDebug;
		}
		
		function setShowParameter($showParameter) {
			$this->showParameter = $showParameter;
		}
		
		/*Getter function*/
		function getShowDebug() {
			return $this->showDebug;
		}
		
		function getShowParameter() {
			return $this->showParameter;
		}
		
		/*individual function*/
		function connect($host,$user,$pass,$dbase) {
			$msgOciConnect = ($this->showParameter==0)?"koneksi SQL server gagal":"Koneksi SQL pada $host dengan user $user, password $pass gagal";
			$msgSelectDB = ($this->showParameter==0)?"Database tidak dapat ditemukan":"Database $dbase tidak terdaftar";
			
			//$sqlconnect = oci_pconnect($host,$user,$pass) or die($msgSqlConnect);
			$sqlconnect= oci_connect('dhelpdesk', 'kfc14022', 'localhost') or die(oci_error());
			return $sqlconnect;
		}
		
		function runQuery($str) {
			$msgResult = ($this->showParameter==0)?"Query salah / tidak dapat di eksekusi":"Query $str gagal";
			
			$result = mssql_query($str) or die($msgResult);
			return $result;
		}
		
		function getDataRow($objectResult) {
			$row = oci_fetch_array($objectResult);
			return $row;
		}
		
		function getDataObject($objectResult) {
			$object = mssql_fetch_object($objectResult);
			return $object;
		}
		
		function getDataField($objectResult) {
			$field = oci_fetch_field($objectResult);
			return $field;
		}
		
		function getDataNumRows($rs) {
			$num_rows = oci_num_rows($rs);
			return $num_rows;
		}
		
		function begin($transid='') {
			$this->runQuery("BEGIN TRANSACTION $transid");
		}
		
		function commit($transid='') {
			$this->runQuery("COMMIT TRANSACTION $transid");
		}
		
		function rollback($transid='') {
			$this->runQuery("ROLLBACK TRANSACTION $transid");
		}
		
		function close($con) {
			mssql_close($con);
		}
		
		function queryBuilder($arrayOfQuery) {
			if (is_array($arrayOfQuery)) {
				$queryResult = '';
				$flagwhere = 0;
				foreach($arrayOfQuery as $val) {
					if ($val != NULL && $val != '') {
						if ($flagwhere == 0) {$queryResult .= " WHERE ";$flagwhere = 1;}
						else {$queryResult .= " AND ";}
						$queryResult .= $val;
					}
				}
				
				return $queryResult;
			}
			return NULL;
		}
	}
?>