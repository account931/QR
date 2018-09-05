$(document).ready(function(){
	
// On CheckBox change
    $('input[type="checkbox"]').on('change', function() {
	 
	 var id = this.id;
	 //alert(id);
	 if(id =='qrScan'){
		 $("#qrGenerDiv, #qrResultRow").hide(800);  
		 //$("#qrResultRow").hide(800);  
		 $("#qrScanDiv").show(800); 
	 } else {
		 $("#qrScanDiv").hide(800);
	     $("#qrGenerDiv").show(800);   
	 }

	});
	


});
// end ready	
	