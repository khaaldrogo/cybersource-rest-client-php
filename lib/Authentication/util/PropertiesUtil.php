<?php
/*
Purpose : Reading Input Config Json File
*/
namespace CybsAuthSdk;
use CybsAuthSdk\MerchantConfiguration as MerchantConfiguration;
class PropertiesUtil
{
	
	public function readConfig($fileName)
	{
		 if(file_exists($fileName)){
		 	$configConst = file_get_contents($fileName);
		 	return json_decode($configConst);
		 }else{
		 	return null;
		 }

	}
	
}

?>