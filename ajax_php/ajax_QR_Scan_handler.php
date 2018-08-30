<?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        //form the URL for QR Scan
	     $data_url = "http://api.qrserver.com/v1/read-qr-code".$_FILES['file']['name'];  //
		 
		 
		 
		 
		 
		 
		 $img = $_FILES['file']['name'];
         $tmp = $_FILES['file']['tmp_name']
		 
		 //echo "THIS". $img  ;
	
	     // Gets the OpenWeather API
         if (!$json = file_get_contents($data_url)) {
			 echo $data_url;
		     echo "<br>Api stats php Error</br>";
	     }
         //$obj = json_decode($json,true);//,  true used for [], not  used  for '->';
	     
         echo $json;
         //print_r($obj); // display the JSOn to screen
         //echo json_encode($obj); // MAke sure JSOn encode  gotten result 
	
	
		

?>