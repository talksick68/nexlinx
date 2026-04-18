<?php

   header( 'Location: managed_services.php' ) ;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NEXLINX</title>
<link rel="shortcut icon" type="image/ico" href="../public/images/favicon.ico">
<link href="../public/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="../public/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/css/global.css" rel="stylesheet" type="text/css" media="all" />
<script src="../public/js/SpryAccordion.js" type="text/javascript"></script>
<link href="../public/js/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="../public/js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../public/js/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../public/js/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../public/js/jquery.fancybox.css" media="screen" />

<script type="text/javascript" src="/public/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/public/js/common.js"></script>

<link href="/public/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<link rel="stylesheet" href="../public/css/menu.css" type="text/css" media="screen, projection"/>
<!--[if lte IE 7]>
      <link rel="stylesheet" type="text/css" href="../public/css/ie.css" media="screen" />
  <![endif]-->
<script type="text/javascript" language="javascript" src="../public/js/jquery.dropdownPlain.js"></script>
</head>

<body>

<div id="wrap">
<div id="container">
 	<div id="header">
   <div class="logo">
     <a href="../index.php"><img src="../public/images/nexlinx-logo.png" alt="NEXLINX" border="0" /></a>
   </div>
   
   <div class="right_buttons">
     <div class="top_rheader_links">
       <ul>
         <li><a class="current">DATA</a></li>
         <li><a href="../telenex/index.php">VOICE</a></li>
       </ul>
     </div><!--top_rheader_links-->
     
   </div>
   
   <div class="clearfloat"></div>
   
   <div class="navigation">
       <ul class="dropdown">
              <li class="first-menu-item"><a href="../index.php" class="wh">HOME</a></li>
              <li><a href="../static/aboutus.php" class="wh">ABOUT US</a></li>
              <li><a href="../static/services.php" class="wh">SERVICES</a>
                    <ul class="sub_menu menu1st">
                      <li ><a href="../static/connectivity.php" >
                      <img src="../public/images/m_conn.png" align="" />
                      <h1>Connectivity</h1>
                      <p>Nexlinx provides a wide variety of connectivity options for its clients</p>
                      </a>
                      		<ul>
                             <li><a href="internet_services.php">Internet Services</a>
                             		<ul>
                                	<li><a href="../static/wireless.php">Wireless</a></li>
                                  <li><a href="../static/satellite.php">Satellite</a></li>
                                  <li><a href="../static/fibre.php">Fiber</a></li>
                                  <li class="last"><a href="../static/dsl.php">DSL</a></li>
                               </ul>
                            </li>
                             <li class="last"><a href="private_data_services.php">Private Data Services</a>
                             		<ul>
                                  <li><a href="routed.php">Routed L3</a></li>
                                  <li><a href="vlan.php">Private VLAN</a></li> 
                                  <li class="last"><a href="mpls.php">MPLS</a></li> 
                               </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="../static/managed_services.php" >
                    <img src="../public/images/m_man.png" align="" />
                    <h1>Managed Services</h1>
                    <p>Wide variety of managed services ranging from domain hosting to elaborate infrastructure support & maintenance</p>
                    </a>
                        <ul>
                          <li><a href="../static/domain_hosting.php">Domain Hosting</a>
                              <ul>
                                <li> <a href="../static/domain_registration.php">Domain Registration</a></li>
                                <li class="last"> <a href="../static/virtual_domain_managed_services.php">Virtual Domain Hosting</a></li>
                              </ul>
                          </li>
                          <li><a href="../static/dedicated-servers.php">Dedicated Servers</a>
                              <ul>
                                <li> <a href="../static/dedicated-servers.php">Windows</a></li>
                                <li class="last"> <a href="../static/dedicated-servers.php">Linux</a></li>
                              </ul>
                          </li>
                          <li><a href="../static/virtual-private-servers.php">Virtual Private Servers</a></li>
                          <li><a href="../static/colocation.php">Colocation</a></li> 
                          <li class="last"><a href="../static/cloud-computing.php">Cloud Services</a></li>
                       </ul>
                     </li>
                    <li><a href="solutions.php" >
                    <img src="../public/images/solutions-icon.png" align="" />
                    <h1>Solutions</h1>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                    </a></li>
<li class="last"><a href="../static/consulting.php" >
                    <img src="../public/images/m_con.png" align="" />
                    <h1>Consulting</h1>
                    <p>Providing a number of consulting services for our clients improve or build completely new networks</p>
                    </a>
                 </li>
               </ul>
             </li>
            <li><a href="../static/partners.php" class="wh">PARTNERS</a></li>
            <li><a href="../nexmail/nexmail.php" class="wh">NEXMAIL</a></li>
            <li><a href="../tabid/137/default.aspx" class="wh">MEMBERS</a></li>
            <li><a href="../static/support.php" class="wh">SUPPORT</a></li>
            <li class="last-menu-item"><a href="../static/contactus.php" class="wh">CONTACT US</a></li>
          </ul><!--dropdown-->
   </div><!--navigation-->
  </div><!--header-->
  
  <div class="clearfloat"></div><!--clearfloat-->
  
<div id="banner_container_sub">
    <div id="home_banner">
    <div class="banner_managed_services">  
      <div class="tagline tagsub">
        <h3>HOSTING</h3>
      </div>      
    </div>
    </div><!--home-banner-->
  </div>
  <div class="clearfloat"></div>
  <div id="content">   

    <div class="content_left wide">
      <h2><a href="../index.php">Home</a> /  <a href="../static/services.php">Services</a> / Hosting 
        <div class="print_font">
          <a href="#" onclick="window.print(); return false;"><img src="../public/images/icon_print.png" alt="Print" title="Print" /></a>
        </div></h2>
      
      	<p><strong>Nexlinx provides a wide variety of managed services to its clients ; ranging from simple domain hosting to elaborate infrastructure support and maintenance.</strong> </p><br /><br />
		<ul class="features" style="width:200px;">
         <li><a href="../static/domain_managed_services.php">Domain Hosting</a></li>
         <li><a href="../static/colocation.php">Colocation</a></li>
        </ul>
		<ul class="features" style="width:200px;">
         <li><a href="../static/dedicated-servers.php">Dedicated Servers</a></li>
         <li><a href="../static/cloud-computing.php">Cloud Computing</a></li>
        </ul>
		<ul class="features" style="width:200px;">
         <li><a href="../static/virtual-private-servers.php">Virtual Private Servers</a></li>
        </ul>
        <br />
			<div class="clearfloat"></div>

      <!--Accordion main-->        
      


      <div class="clearfloat"></div>
            

</div><!--content_left-->
  
    <div class="content_right">
      <div class="right_submenu">
        <ul>
           <li class="sub pd-10"><a href="../static/connectivity.php">Connectivity</a></li>
            <li class="sub pd-10"><a href="../static/managed_services.php">Managed Services</a></li>
            <li class="sub pd-10"><a href="../static/solutions.php">Solutions</a></li>
           <li class="sub pd-10"><a href="../static/consulting.php">Consulting</a></li>
           
        </ul>
      </div>
      
      <div class="right_quote">
          <h1>Get in Touch</h1>
          <p class="tel2">+92 42 111 432 432</p>
          <p class="eml2">info@nexlinx.net.pk</p>
          <p class="fax2">+92 423 5759092</p>
      </div>

      
    </div><!--content_right-->
   </div>
  </div><!--content-->
  </div>
  <div class="clearfloat"></div><!--clearfloat-->
  
  <?php include("../includes/footer.php");?>