$(document).ready(function(e) {
		$('a[href="#"]').click(function(e){e.preventDefault();});
		$("input:text , input:password, textarea").focus(function() {
				if($(this).attr("data-title") && $(this).val()==$(this).attr("data-title")){$(this).val("");}
		}).blur(function() {
			if($(this).val()=="" && $(this).attr("data-title")){$(this).val($(this).attr("data-title"));}
		});	
		//$('input[type="checkbox"]').ezMark();    
});
function submitShortForm(){
	if($("#sname")){
		if($("#sname").val()=="Name"){
			alert('Please enter your name');
			$("#sname").focus();
			return false;
		}
	}
	if($("#semail")){
		if($("#semail").val()=="Email Address"){
			alert('Please enter your email address');
			$("#semail").focus();
			return false;
		}
	}
	$.colorbox({href:"/forms/quotation.asp?"+$('#shortforom').serialize(),opacity:.6,transition:"none"});
	//alert($('#shortforom').serialize());
}
function submitInquiry(){
	if($("#ccompany").val()=="Company Name"){
			alert('Please enter your company name');
			$("#ccompany").focus();
			return false;
	}
	if($("#cperson").val()=="Contact Person"){
			alert('Please enter contact person');
			$("#cperson").focus();
			return false;
	}
	if($("#cemail").val()=="Email Address"){
			alert('Please enter contact person');
			$("#cemail").focus();
			return false;
	}
	if($("#cphone").val()=="Phone No"){
			alert('Please enter phone number');
			$("#cphone").focus();
			return false;
	}
	if($("#ccell").val()=="Cell Phone"){
			alert('Please enter contact person');
			$("#ccell").focus();
			return false;
	}
	if($("#ctype").val()==""){
			alert('Please select type of service');
			$("#ctype").focus();
			return false;
	}
	if($("#caddress").val()=="Address"){
			alert('Please enter address');
			$("#caddress").focus();
			return false;
	}
	$.post("/forms/sendmail.asp", $("#inqform").serialize(),
	   function(data) {
		  // alert(data);
		 $("#inline2").html("<h5>Request Quotation</h5><div class=\" clearfloat\"></div><span>Thank you for choosing Nexlinx , our marketing representative has been forwarded your request and shall be getting in touch with you in the next 48 hours. </span><div class=\" clearfloat\"></div>")
		$.colorbox.resize(); 
	   });
}