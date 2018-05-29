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
      <script src="qr_core.js"></script><!--  Core Random JS-->
	  
	  
	
	  
	  <meta name="viewport" content="width=device-width" />

     </head>

     <body>

       <div id="headX" class="jumbotron text-center gradient alert-success" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> QR Codes on-line</span> <span class="glyphicon glyphicon-paste"><!--</span> <img src="http://78.media.tumblr.com/tumblr_m2hq5tt3ma1qav3uso1_400.gif" style="width:3%"/>--> </h1> 
		   
           <p class="header_p">QR Codes on-line processor  <!--generates random lists, ramdomizes integers, etc--> <span class="glyphicon glyphicon-duplicate"></span>
           </p>
		   <!--<p class="language"><a href="/eng">ENG</a></p>-->
		   
	   </div>



       
         <div class="wrapper grey">
    	   <div class="container">
		      <div class="col-sm-4 col-xs-12" style="background-color:lavender;">
			  
			  
             
		           <!--------Form Start------>	
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
                   <!---------END Form -------->				   
				  
				   
				 </div> <!--END <div class="col-sm-4" style="background-color:lavender;">-->
				
				 
				  <!--<div class="col-sm-1 col-xs-1" "></div>-->
				 
				 
				 
				 
				 <?php
                // START GENERATING QR**********************************************************************************
				echo '<div class="col-sm-4 col-xs-12" id="qrResult"><center>';
				
	
                if( isset($_POST['qr']) && $_POST['qr']!=''){ //if issert and the value not NULL, it helps to avoid proccess on page reload
                    $text = $_POST["qr"];//your input
                    $textR = str_replace(' ', '+', $text);  //  replace  all  blankspaces  with "+" as with  blankspaces it proceedes only  the  1  st word;
                   //echo $textR;
                   $url = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $textR . "&choe=UTF-8" . " title='QR' ";
	 
	              
                   echo '<div class="alert alert-success"><p id="qrCode">Your  QR Code with text <span class="red">' . $text . '</span> has been created</p></div>'; //bootsrap class= alert-success
                   echo '<span class="badge "><img src='.$url.' /></span>'; // BStrap Class badge to make a frame
                   
				    
					unset ($text);
					unset ($_POST['qr']);// delete var to prevent appear on reload
					exit();
  
                } //End isset($_POST['QRSend'])
				
				echo '</center></div>';
                // END  GENERATING QR--------------------------------------------------------------------------------------
                ?>

				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
                                    
     
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
