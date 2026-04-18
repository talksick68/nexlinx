<?php include("includes/header.php");?>
 <script>
$(function(){
	// Set starting slide to 1
	var startSlide = 1;
	// Get slide number if it exists
	if (window.location.hash) {
		startSlide = window.location.hash.replace('#','');
	}
	// Initialize Slides
	$('#slides').slides({
		preload: true,
		preloadImage: '',
		generatePagination: true,
		play: 7000,
		pause: 0,
		effect: 'fade',
		crossfade : false,
		hoverPause: false,
		// Get the starting slide
		start: startSlide,
		animationComplete: function(current){
			// Set the slide number as a hash
			//window.location.hash = '#' + current;
		}
	});
});
</script>
  <div id="banner_container">
    <div id="home_banner">      
      <div id="slides">
        <div class="slides_container">
          <div class="slide1">
           <div class="tagline">
            <h1>Satellite<br />CONNECTIVITY</h1>
            <h2>Whether you need to connect to the world in the middle of the ocean or even in the middle of desert, Nexlinx DVB solutions can provide high quality Satellite access to anywhere in Pakistan.</h2>
            <div class="learnmore">
              <a href="static/satellite.php">Learn More</a>
            </div>
          </div><!--tagline-->  
  
          </div><!-- end slide-->
          <div class="slide3">
          <div class="tagline">
            <h1>Connect<br />Wireless</h1>
            <h2>When your mission critical needs are not satisfied via DSL or Wimax, opt for Nexlinx dedicated Wireless to get a hassle free ,  high quality connectivity to your office or remote locations.</h2>
            <div class="learnmore">
              <a href="static/wireless.php">Learn More</a>
            </div>
          </div><!--tagline-->  
          </div><!-- end slide-->
        
          
          <div class="slide4">
          <div class="tagline">
            <h1>Fiber<br />Optic</h1>
            <h2>When you're looking for the best quality of service for your mission critical networking needs, Nexlinx Fiber Optic solutions would not let you down.</h2>
            <div class="learnmore">
              <a href="static/fibre.php">Learn More</a>
            </div>
          </div><!--tagline-->  
          </div><!-- end slide-->
        
          
          <div class="slide5">
          <div class="tagline">
            <h1>Reliable<br />Hosting</h1>
            <h2>When you need high quality Domain hosting solutions on a tight budget , Nexlinx provides a wide array of hosting packages on both Windows and Unix platforms. </h2>
            <div class="learnmore">
              <a href="static/hosting.php">Learn More</a>
            </div>
          </div><!--tagline-->  
          </div><!-- end slide-->
          
          <div class="slide2">
          <div class="tagline">
            <h1>High Speed<br />DSL Internet</h1>
            <h2>Business DSL from Nexlinx provides the affordable business Internet service you need for your business branch office, or home office with the benefit of optimum performance at the best price.</h2>
            <div class="learnmore">
              <a href="static/dsl.php">Learn More</a>
            </div>
          </div><!--tagline-->  
          </div><!-- end slide-->
          
                
        </div><!--slides_container-->
          <a href="javascript:void(0)" class="prev"> </a>
          <a href="javascript:void(0)" class="next"> </a>
        </div>
      
      
    </div><!--home-banner-->
  </div><!--banner_container-->
  
  <div class="clearfloat"></div><!--clearfloat-->
  <div id="content">
  	<table width="100%" cellpadding="0" cellspacing="0" border="0">
    	<tr>
        	<td width="40">&nbsp;</td>
            <td align="left" valign="top" style="vertical-align:top !important;">
            <div class="home_connectivity" onclick="location.href='/static/connectivity.php';">
            	<div style="float:left; color:#fff; font-size:10px; width:245px; margin:35px 0px 0px 15px;">
                	Nexlinx offers wide range of connectivity options for its customers to cater their mission critical needs.
                </div>
            </div>
            <div class="home_solutions" onclick="location.href='/static/solutions.php';">
            	<div style="float:left; color:#707070; font-size:10px; width:245px; margin:35px 0px 0px 15px;">
                	Nexlinx offers a comprehensive suite of Data and Voice Solutions designed to help businesses...
                </div>
            </div>
            </td>
            <td align="left" valign="top" style="vertical-align:top !important;">
            <div class="home_managed_services" onclick="location.href='/static/managed_services.php';">
            	<div style="float:left; color:#fff; font-size:10px; width:245px; margin:35px 0px 0px 15px;">
                	Nexlinx offers a wide range of Managed Services to serve your IT infrastructure needs.
                </div>
            </div>
                
            <div class="home_consulting" onclick="location.href='/static/consulting.php';">
            	<div style="float:left; color:#707070; font-size:10px; width:245px; margin:35px 0px 0px 15px;">
                	Providing a number of consulting services for our clients improve or build completely new networks.
                </div>
            </div>
            </td>
            <td align="left" style="vertical-align:top !important; padding-left:20px;">
            	<img src="public/images/nexlinx_update.png" />
                <p class="home_locationsp">
                	Sign up below to receive our monthly updates and learn about all Nexlinx Services.	
           	  </p>
              <form id="ufrm" name="ufrm" onsubmit="return false;">
              <input type="text" style="border:2px solid #dadada;border-radius:7px;font-size:13px;padding:5px;-moz-border-radius:10px;-webkit-border-radius: 10px;-khtml-border-radius: 10px;border-radius: 10px; width:120px; margin-bottom:15px;" name="fname" id="fname" data-title="First Name" value="First Name" onfocus="if (this.value == 'First Name') this.value = '';" onblur="if (this.value == '') this.value = 'First Name';" />
              <input type="text" style="border:2px solid #dadada;border-radius:7px;font-size:13px;padding:5px;-moz-border-radius:10px;-webkit-border-radius: 10px;-khtml-border-radius: 10px;border-radius: 10px; width:120px; margin-bottom:15px;" name="email" id="email" value="Email Address" data-title="Email Address" />
              <input type="image" src="public/images/submit-red.png" onclick="processSignup();" />
              </form>
              
            </td>
            <td width="40">&nbsp;</td>
        </tr>
    </table>
    
    <div class="blue-bg-quicklinks">
    	<table width="100%" cellpadding="0" cellspacing="0" border="0">
        	<tr>
           	  <td width="35"></td>
              <td align="left" width="100">
               	<h6><a href="static/services.php">Services</a></h6>
                    <a href="static/connectivity.php">Connectivity</a><br />
                    <a href="static/managed_services.php">Managed Services</a><br />
                	<a href="static/solutions.php">Solutions</a><br />
                    <a href="static/consulting.php">Consulting </a></td>
                <td align="left" width="115">
                	<h6><a href="static/internet_services.php">Internet Services</a></h6>
                <a href="static/wireless.php">Connect Wireless</a><br />
                <a href="static/satellite.php">Satellite Connectivity</a><br />
                <a href="static/fibre.php">Fiber Optic</a><br />
                <a href="static/dsl.php">High Speed DSL</a><br />
                </td>
                <td align="left"  width="180">
                	<h6><a href="static/private_data_services.php">Private Data Services</a></h6>
                <a href="static/lmns.php">Lahore Metro Network Services</a><br />
                <a href="static/dplc.php">Domestic Private Leased Circuit </a><br />
                <a href="static/iplc.php">International Private Leased Circuit</a><br />
                <a href="static/vplc.php">Virtual Private Leased Circut</a><br />
                </td>
                <td align="left" width="125">
                	<h6><a href="static/managed_services.php">Managed Services</a></h6>
                    <a href="static/domain_registration.php">Domain Management</a><br />
                <a href="static/virtual_domain_hosting.php">Virtual Domain Hosting</a><br />
                <a href="static/dedicated-servers.php">Dedicated Servers</a><br />
                <a href="static/virtual-private-servers.php">Virtual Private Servers</a><br />

                </td>
                <td align="left" width="115">
                	<h6>&nbsp;</h6>
                <a href="static/colocation.php">Colocation</a><br />
                <a href="static/cloud-computing.php">Cloud Computing</a><br />
                <a href="static/offsite_storage.php.php">Cloud Storage</a><br />
                <a href="static/hosted_application.php">Hosted Applications</a>
                
                </td>
                <td align="left" width="115">
                	<h6><a href="static/consulting.php">Consulting</a></h6>
                    <a href="static/consulting.php">Network Design</a><br />
                    <a href="static/consulting.php">Network Optimization</a><br />
                    <a href="static/consulting.php">Network Security</a><br />
                    <a href="static/consulting.php">System Integration</a><br />
                </td>
                <td align="left" width="85">
                	<h6><a href="static/solutions.php">Solutions</a></h6>
                    <a href="static/solutions.php">Data Solutions</a><br />
                    <a href="static/solutions.php">Hosted Voice Solutions</a><br />
                    <a href="static/solutions.php">Video Solutions</a><br />
                </td>
                <td align="left" width="95">
                	<h6><a href="static/aboutus.php">About Us</a></h6>
                <a href="static/ceo_message.php">CEO Message</a><br />
                <a href="static/contactus.php">Contact Us</a>
                </td>
            </tr>
        </table>
    </div>
  </div>
  <!--content-->
  </div>
  <div class="clearfloat"></div><!--clearfloat-->
  
<?php include("includes/footer.php");?>
<script language="javascript">
function processSignup(){
	$.post("/includes/process-signups.php", $("#ufrm").serialize(),
	  function(data) {
		if(data.substring(0,2)=="OK"){
			$("#fname").val($("#fname").attr("data-title"));
			$("#email").val($("#email").attr("data-title"));
			alert("Thanks you! You are now signed up for our monthly newsletter.");
		}else{
			alert(data);
		}
  });
}
</script>