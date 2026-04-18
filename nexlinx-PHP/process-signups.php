<?php 
	include ("common.php");
	if(isset($_REQUEST['fname'])){
		
		$firstname = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		
		$errors = "";
		if($firstname == 'First Name' or $firstname==""){
			$errors = "Please enter your full name.";
		}else if(!check_email($email)){
			$errors = "Please enter your valid email address.";
		} 
		
		if($errors==""){
			$subject = "Nexlinx Signup";
			$headers = "From: Nexlinx <info@nexlinx.net.pk>\r\n";
			$headers .= "Reply-To: Nexlinx <info@nexlinx.net.pk>\r\n";
			$headers .= "Return-Path: Nexlinx <info@nexlinx.net.pk>\r\n";	
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: TEXT/HTML;\n";
			
			$msg = "";
			$msg .="The following information was just submitted:<BR><BR>";
			$msg .="First Name: ".$firstname."<BR>";	
			$msg .="Email Address: ".$email."<BR>";
						
			mail('salman.javed@gmail.com', $subject,$msg,$headers);
			mail('zshoaib@hotmail.com', $subject,$msg,$headers);
			print "OK";
			exit;
			
		}else{
			//Send Errors
			echo $errors;
		}
	}
?>