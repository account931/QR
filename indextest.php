	 // SO FAR IT IS NOT USED AT ALL-> it is delegated to Library/JS_Lib_toScan_QR
	 <!---------------------------------NOT USED QR READER/Scan FORM PART---------------------------------------->
				 
				 <br>
				 <div class="row">
				 <div class="col-sm-3 col-xs-12 my-background" id="qrScanForm">
				    <form enctype="multipart/form-data" action="" method="POST" id="formImg"> <!-- http://api.qrserver.com/v1/read-qr-code/-->
                       <!-- MAX_FILE_SIZE (maximum file size in bytes) must precede the file input field used to upload the QR code image -->
                       <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                       <!-- The "name" of the input field has to be "file" as it is the name of the POST parameter -->
                       Choose QR code image to scan: 
					   <input name="file" type="file" id="imgLoaded" required /><br>
					   
                       <input type="submit" value="Read QR code" class="btn btn-default" id="qrScanButton"/>
					   <!--<button type="button" class="btn btn-default" id="qrScanButton">Read QR code</button>-->
					   
                    </form> 
		        </div>	
                </div>	<!-- end class="row"-->			
				<!----------------------------------END QR READER FORM PART---------------------------------------------->
				
				<!--------------------------------------QR READER/Scan RESULT DIV---------------------------------------->
				<div class="col-sm-12 col-xs-12 " id="qrScanResult">
				</div>		 
				<!----------------------------------END QR READER/Scan RESULT DIV---------------------------------------->
                                    
                <div class="col-sm-12 col-xs-12 " id="preview">
				</div>
				
				 <div class="col-sm-12 col-xs-12 " id="err">
				</div>
				<!------------------------------END NOT USED QR READER/Scan FORM PART---------------------------------------->



































<head>
<style type="text/css">
body{
    width:100%;
    text-align:center;
}
#qrfile{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#outdiv
{
    width:320px;
    height:240px;
    border: solid;
    border-width: 1px 1px 1px 1px;
}
#result{
    border: solid;
    border-width: 1px 1px 1px 1px;
    padding:20px;
    width:37.3%;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
    margin-left:35px;
    margin-right:35px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius:20px;
}
p.helptext{
    margin-top:54px;
    font:18px arial,sans-serif;
}
p.helptext2{
    margin-top:100px;
    font:18px arial,sans-serif;
}
</style>
<!--C S S  H E R E-->


 <script type="text/javascript" src="Library/Js_toScan_QR/webqr.js"></script>    <!--   QR read/scan Library-->
 <script type="text/javascript" src="Library/Js_toScan_QR/llqrcode.js"></script> <!--   QR read/scan Library-->
 
 
 
</head>







<body onload="load(); setimg();">
<div id="main">
<div id="mainbody">
<div id="outdiv">
</div>
<div id="result"></div>
</div></div>           
<canvas id="qr-canvas" width="800" height="600"></canvas> <!--Canvas to draw image -->
</body>
</html>