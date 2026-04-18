<?php 
	@session_start();
	error_reporting(0);
	
	//Database
	require_once('dbconnect.php');
	
	//Lib
	require_once('lib.php');
	
	// Browser detection 	
	require_once('Browser.php');
	$browser = new Browser();
	$browsername =  $browser->getBrowser();
	$browserversion = $browser->getVersion();
	$browserplatform = $browser->getPlatform();
	$ismobile = $browser->isMobile();
	$isIpad = 0;
	
	$browserfordb = $browsername. ' '.$browserversion.' '.$browserplatform;
	
	if($browserplatform == 'iPod' or $browserplatform == 'iPad' or $browserplatform == 'iPhone' or $browserplatform == 'unknown'){$isIpad=1;}
	
	//Page Parameter
	$urlquery = "";
	if(strpos($_SERVER['REQUEST_URI'],"?")){
		$a = explode("?",$_SERVER['REQUEST_URI']);
		$urlquery = "?".$a[1];
	}
	//Current folder and php script name
	$cfolder = curPageFolder();
	$scriptname = $_SERVER["SCRIPT_NAME"];
	$phpname = substr($scriptname,strripos($scriptname,"/")+1,strlen($scriptname)-strripos($scriptname,"/")-1);
	
	function curPageFolder(){
		$path = curPageURL();
		$last = strripos($path,"/");
		$new = substr($path,0,$last);
		$start =  strripos($new,"/")+1;
		return substr($path,$start,$last-$start);
	}
	
	function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}
	//clear age gate
	if(isset($_REQUEST['clearmyagegate'])){
		setcookie("age", "", time()-3600);
		$_SESSION['age'] = "";
	}
	
	$showAgeGate = 0;
	//Session Verify
	if(!((isset($_SESSION['age']) && $_SESSION['age'] == 'over 21') || (isset($_COOKIE['age']) && $_COOKIE['age'] == 'over 21')) ){
		$showAgeGate = 1;
	}
	//Global Variables
	$domain = "http://".$_SERVER['SERVER_NAME']."/";
	$path_recipethumb = $domain."images/recipe/thumb/";
	$path_recipelarge = $domain."images/recipe/";
	
	
	//Age Varification
	function checkFields ($agerrors, $exitPage)
	{
		if(!isset($_POST['country']) || $_POST['country'] == '')
		{
			$agerrors[] = 'Please Select Your Country';
		}
		if(!isset($_POST['dob_month']) || !is_numeric($_POST['dob_month']))
		{
			$agerrors[] = 'Please Select Your Birth Month';
		}
		if(!isset($_POST['dob_dom']) || !is_numeric($_POST['dob_dom']))
		{
			$agerrors[] = 'Please Select the Day of the Month You Were Born On';
		}
		if(!isset($_POST['dob_year']) || !is_numeric($_POST['dob_year']))
		{
			$agerrors[] = 'Please Enter Your Birth Year';
		}
		if($_POST['dob_year'] < 1000)
		{
			$agerrors[] = 'Birth Year Must Be Four Digits';
		}
		if(count($agerrors) == 0)
		{
			switch($_POST['country'])
			{
				case 'USA':
					$legal_age = 21;
					$minor_exit_page = 'http://www.centurycouncil.org';
					break;
				case 'UK':
					$legal_age = 18;
					$minor_exit_page = 'http://www.portman-group.org.uk/';
					break;
				case 'JP':
					$legal_age = 20;
					$minor_exit_page = 'http://www.esjapan.com/hpnotiq/';
					break;
				case 'CAN':
					$legal_age = 19;
					$minor_exit_page = 'http://www.centurycouncil.org';
					break;
				case 'FR':
					$legal_age = 18;
					$minor_exit_page = 'http://www.centurycouncil.org';
					break;
				case 'SP':
					$legal_age = 18;
					$minor_exit_page = 'http://www.efrd.org/main.html';
					break;
				case 'IT':
					$legal_age = 16;
					$minor_exit_page = 'http://www.giovinetti.com/';
					break;
				case 'NL':
					$legal_age = 18;
					$minor_exit_page = 'http://www.centurycouncil.org';
					break;
				default:
					$legal_age = 21;
					$minor_exit_page = 'http://www.centurycouncil.org';
					break;
			}
			checkAge($exitPage, $legal_age, $minor_exit_page);
		}
		return $agerrors;
	}
	function checkAge ($exitPage, $legal_age, $minor_exit_page)
	{
		global $showAgeGate;
		$day = $_POST['dob_dom'];
		$month = $_POST['dob_month'];
		$year = $_POST['dob_year'];
	
		if(mktime(0,0,0, date("m"), date("d"), date("Y") - $legal_age) >= mktime(0,0,0, $month, $day, $year))
		{
			if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
				setcookie('age', 'over 21', time() + 9999999) ;
				$_SESSION['ss'] = md5('remember');
				$_SESSION['age'] = 'over 21';
			}else {
				 $_SESSION['age'] = 'over 21';
				 setcookie('age', 'over 21', time() + 3600*3) ;
				 $_SESSION['ss'] = md5('over');
			}
			$showAgeGate=0;
		}
		else
		{
			header( 'Location: '. $minor_exit_page);
			exit;
		}
	}
	//Only if AgeGate is 
	$exitPage = '/home';
	if($showAgeGate==1){
		$agerrors = array();
		isset($_POST['posted']) ? $agerrors = checkFields($agerrors, $exitPage) : '';
	}
	
	$preload = array("/images/nav-home-over.png","/images/btn-footer-fb-hover.png","/images/btn-foter-owl-hover.png","/images/nav-about-over.png","/images/nav-thevodkas-over.png","/images/nav-recipes-over.png","/images/nav-lifeontop-over.png","/images/nav-contact-over.png");
?>