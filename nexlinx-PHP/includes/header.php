<?php $scriptname = $_SERVER["SCRIPT_NAME"];
$phpname = substr($scriptname,strripos($scriptname,"/")+1,strlen($scriptname)-strripos($scriptname,"/")-1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NEXLINX</title>
<link rel="shortcut icon" type="image/ico" href="public/images/favicon.ico">
<link href="public/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="public/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/global.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="public/js/jquery.fancybox.css" media="screen" />

<script type="text/javascript" src="public/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="public/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="public/js/common.js"></script>


<script src="public/js/SpryAccordion.js" type="text/javascript"></script>
<link href="public/js/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="public/js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="public/js/SpryTabbedPanels.css" rel="stylesheet" type="text/css" /> 


<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
	<link rel="stylesheet" href="public/css/menu.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="public/css/ie.css" media="screen" />
    <![endif]-->
<script type="text/javascript" language="javascript" src="public/js/jquery.dropdownPlain.js"></script>

<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
</head>
<body>

<div id="wrap">

<div id="container">
 	<div id="header">
   <div class="logo">
     <a href="index.php"><img src="public/images/nexlinx-logo.png" alt="NEXLINX" border="0" /></a>
   </div>
   
   <div class="right_buttons">
     <div class="top_rheader_links">
       <ul>
         <li><a class="current">DATA</a></li>
         <li><a href="../telenex/index.html">VOICE</a></li>
       </ul>
     </div><!--top_rheader_links-->
     
   </div>
   
   <div class="clearfloat"></div>
   
   <div class="navigation">
       <ul class="dropdown">
              <li class="first-menu-item"><a href="index.php" class="wh">HOME</a></li>
              <li><a href="static/aboutus.php" class="wh">ABOUT US</a></li>
              <li><a href="static/services.php" class="wh">SERVICES</a>
                    <ul class="sub_menu menu1st">
                      <li ><a href="static/connectivity.php" >
                      <img src="public/images/m_conn.png" align="" />
                      <h1>Connectivity</h1>
                      <p>Nexlinx offers a wide variety of connectivity options for mission critical needs. </p>
                      </a>
                      		<ul>
                             <li><a href="static/internet_services.php">Premium Internet<br /> Services</a>
                             		<ul>
                                    <li><a href="static/fibre.php">Fiber</a></li>
                                	<li><a href="static/wireless.php">Wireless</a></li>
                                  <li><a href="static/satellite.php">Satellite</a></li>
                                  <li class="last"><a href="static/dsl.php">DSL</a></li>
                               </ul>
                            </li>
                             <li class="last"><a href="static/private_data_services.php">Private Data Services</a>
                             		<ul>
                                  <li><a href="static/lmns.php">LMNS (Lahore)</a></li>
                                  <li><a href="static/dplc.php">DPLC (National)</a></li>  
                                  <li><a href="static/iplc.php">IPLC (International)</a></li>
                                  <li class="last"><a href="static/vplc.php">VPLC (Virtual/Global)</a></li> 
                               </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="static/managed_services.php" >
                    <img src="public/images/m_man.png" align="" />
                    <h1>Managed Services</h1>
                    <p>We offers a wide range of Managed Services to serve your IT infrastructure needs.</p>
                    </a>
                             		<ul>
                                    <li> <a href="static/domain_registration.php">Domain Management</a></li>
                          <li><a href="static/virtual_domain_hosting.php">Virtual Domain<br /> Hosting</a>
                          </li>
                          <li><a href="static/dedicated-servers.php">Dedicated Servers</a>
                              
                          </li>
                          <li><a href="static/virtual-private-servers.php">Virtual Private Servers</a></li>
                          <li><a href="static/colocation.php">Colocation</a></li> 
                          <li class="last"><a href="static/cloud-computing.php">Cloud Computing</a>
                          	<ul>
                                	<li><a href="static/offsite_storage.php">Cloud Storage</a></li>
                                  <li><a href="static/hosted_application.php">Hosted Applications</a></li>
                               </ul>
                          </li>
                          
                       </ul>
                            </li>
                    <li><a href="static/solutions.php" >
                    <img src="public/images/solutions-icon.png" align="" />
                    <h1>Solutions</h1>
                    <p>Comprehensive suite of Data and Voice Solutions designed to help businesses of any size to succeed.</p>
                    </a></li>
                    <li class="last"><a href="static/consulting.php" >
                    <img src="public/images/m_con.png" align="" />
                    <h1>Consulting</h1>
                    <p>Providing a number of consulting services for our clients improve or build completely new networks.</p>
                    </a></li>
               </ul>
             </li>
            <li><a href="static/partners.php" class="wh">PARTNERS</a></li>
            <li><a href="nexmail/nexmail.php" class="wh">NEXMAIL</a></li>
            <li><a href="http://members.nexlinx.net.pk/tabid/137/default.aspx" class="wh">MEMBERS</a></li>
            <li><a href="static/support.php" class="wh">SUPPORT</a></li>
            <li class="last-menu-item"><a href="static/contactus.php" class="wh">CONTACT US</a></li>
          </ul><!--dropdown-->
   </div><!--navigation-->
  </div><!--header-->
 <div class="clearfloat"></div>