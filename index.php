<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="QR Codes, qr codes on-line," />
      <meta name="keywords" content="QR Codes on-line">
      <title>QR Codes</title>
  
      <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" media="all" href="css/myQRCss.css">
      <script src="js/qr_core_generate.js"></script><!--  Core QR create JS-->
	  <script src="js/qr_scanner.js"></script><!--  Core QR read/scan JS --- NOT USED- SO FAR IT IS NOT USED AT ALL-> it is delegated to Library/JS_Lib_toScan_QR--> 
	  <script src="js/js_controls.js"></script><!-- js_controlsn (hides/show el)--> 
	  
	  
	  <script type="text/javascript" src="Library/JS_Lib_toScan_QR/webqr.js"></script>    <!--   QR read/scan Library--> <!-- Injected for Scan/Read-->
	  <script type="text/javascript" src="Library/JS_Lib_toScan_QR/llqrcode.js"></script> <!--   QR read/scan Library--> <!-- Injected for Scan/Read-->
	  
	
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

     </head>

     <body  onload="load(); setimg();">  <!-- Injected for Scan/Read-->

       <div id="headX" class="jumbotron text-center gradient alert-success my-background" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> QR Codes on-line</span> <span class="glyphicon glyphicon-paste"><!--</span> <img src="http://78.media.tumblr.com/tumblr_m2hq5tt3ma1qav3uso1_400.gif" style="width:3%"/>--> </h1> 
		   
           <!--<p class="header_p">QR Codes on-line processor   <span class="glyphicon glyphicon-duplicate"></span>-->    <!--generates random lists, ramdomizes integers, etc-->
           </p>
		   <!--<p class="language"><a href="/eng">ENG</a></p>-->
		   
	   </div>



       
         <div class="wrapper grey">
    	   <div class="container">
		     <div class="row">
			 
			 <!-------CHECKBOX to change generate/scan-->
			 <div class=" col-sm-12 col-xs-12 my-background checkbox"> <!-- Checkbox ID will be used in JS to form div ids (randListDiv,etc) -->
               <label><input type="checkbox" value="" name="r" id="qrGenerate" checked >Generate QR<!--Random list--></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <label><input type="checkbox" value="" name="r" id="qrScan">Scan QR<!--Random int--></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </div>
			  <!---- END CHECKBOX to change generate/scan-->
			  
			 
		      <div class="col-sm-4 col-xs-12 my-background" style="background-color:lavender;" id="qrGenerDiv">
		           <!-------------- GENERATE Form Start------------->	
                   <form action="" id="myFormZ" method="post">
                      <div class="form-group">
                          <label for="email">Your text to QR: <span class="glyphicon glyphicon-transfer"></span></label>
                          <input type="text" class="form-control" id="qrtext" name="qr">
                     </div>
					<!--
                    <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                          <label><input type="checkbox"> Remember me</label>
                    </div>
					-->
                   <button type="submit" class="btn btn-default" id="submit">Submit</button>
				   <button type="button" class="btn btn-default" id="clear">Clear</button>
                   </form>				   
                   <!---------------- END GENERATE  Form -------->				   
				  
				   
			 </div> <!--END <div class="col-sm-4" style="background-color:lavender;">-->
				
				 
				  <!--<div class="col-sm-1 col-xs-1" "></div>-->
				 
				 
				 
				 <!--------- Start DIV to display QR Generate -------->
				 <div class="row" id="qrResultRow">
				 <div class="col-sm-4 col-xs-12" id="qrResult"><center>
	             <?php
                // START GENERATING QR**********************************************************************************
                if( isset($_POST['qr']) && $_POST['qr']!=''){ //if issert and the value not NULL, it helps to avoid proccess on page reload
                    $text = $_POST["qr"];//your input
                    $textR = str_replace(' ', '+', $text);  //  replace  all  blankspaces  with "+" as with  blankspaces it proceedes only  the  1  st word;
                   //echo $textR;
                   $url = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $textR . "&choe=UTF-8" . " title='QR' ";
	 
	              
                   echo '<div class="alert alert-success"><p id="qrCode">Your  QR Code with text <span class="red">' . $text . '</span> has been created</p></div>'; //bootsrap class= alert-success
                   echo '<div><span class="badge "><img src='.$url.' /></span></div>'; // BStrap Class badge to make a frame
                   
				    
					unset ($text);
					unset ($_POST['qr']);// delete var to prevent appear on reload
					exit();
  
                } //End isset($_POST['QRSend'])
				
				echo '</center>';  //</div>
                // END  GENERATING QR--------------------------------------------------------------------------------------
                ?>
				</div>
                </div><!-- end class="row"-->	
				<!--------- END  DIV to display QR Generate -------->
				 
				 
				 
				 
				 
				 
				 
				 
				 
			<!--  Form Was cut here--->
				
				
				
				
				
				
				
				
				<!-------------------------------------------------- Injected for Scan/Read----------------------------------------------->
				 <br>
				 <div class="row" id="qrScanDiv" style="display:none;">
				 <div class="col-sm-4 col-xs-12 my-background" id="qrscanner">
				 
				 <!----Provided by library-->
				 <div id="main">
                    <div id="mainbody">
                        <div id="outdiv">
                        </div>
						
                   <div id="result"></div>
                   </div></div>         
                   <canvas id="qr-canvas" width="" height="10px;"></canvas> <!--Canvas to draw image -->
				   <!----Provided by library-->
				   
				   </div>
				   </div>
		<!-------------------------------------------------- Injected for Scan/Read----------------------------------------------->		
				
				
				
				
				
				
	 
	 
	 
	 
	 
    			</div><!-- /.container -->	
				  		
    		</div><!-- /.wrapper -->

                


    	
    	
		
		
		
		  <!-----Footer ---->
		        
				<div class="footer navbar-fixed-bottom"> <!--navbar-fixed-bottom  fixxes bootom problem-->
				    Contact: <strong>dimmm931@gmail.com</strong><br>
					<?php  echo date("Y"); ?>
				</div>
		<!--END Footer ---->  
		
		
		
		
		<!-- ##### -- Advertise -- #### -->
		<!--
		   <div class="ads ">
		        <a target="_blank" href="https://www.facebook.com/events/165143454205556/" id="link">
				    <img src="images/ads/sub_od.jpg" alt="Submerged"/>  
				</a>	
			</div>
			-->
		<!-- ##### -- END Advertise -- #### -->
		
		
		
		
    
    </body>
</html>





<?php

// Record (with CLASS) all the  input  to  txt;  //;
      include("Classes/RecordTxt.php");
      RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/random.txt');// Record  to  text;
//End  Record;
?>
