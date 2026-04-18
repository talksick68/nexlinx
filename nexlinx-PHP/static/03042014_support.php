<?php include("../includes/header.php");?>
  
<div id="banner_container_sub">
    <div id="home_banner">
    <div class="banner_consulting">  
      <div class="tagline tagsub">
        <h3>Support</h3>
      </div>      
    </div>
    </div><!--home-banner-->
  </div>
  
  <div class="clearfloat"></div>
  <script type="text/javascript" src="http://tickets.nexlinx.net.pk/visitor/index.php?/LiveChat/HTML/HTMLButtonBase"/></script>
  <script type="text/javascript">
	var swiftscriptelemnc2v4biell=document.createElement("script");swiftscriptelemnc2v4biell.type="text/javascript";var swiftrandom = Math.floor(Math.random()*1001); var swiftuniqueid = "nc2v4biell"; var swifttagurlnc2v4biell="http://tickets.nexlinx.net.pk/visitor/index.php?/LiveChat/HTML/HTMLButtonBase";setTimeout("swiftscriptelemnc2v4biell.src=swifttagurlnc2v4biell;document.getElementById('swifttagcontainernc2v4biell').appendChild(swiftscriptelemnc2v4biell);",1);
</script>
  <div style="width:990px; margin:0px auto; margin-top:10px;">
		<a href="http://tickets.nexlinx.net.pk" target="_blank"><img src="../public/images/livechat.png" alt="Live Chat" title="Live Chat" /></a>
        <a href="http://tickets.nexlinx.net.pk/index.php?/Base/UserRegistration/Register" target="_blank"><img src="../public/images/support-reg.jpg" alt="Register Now" title="Register Now" /></a>
        <a href="http://tickets.nexlinx.net.pk/index.php?/Tickets/Submit" target="_blank"><img src="../public/images/support-ticket.jpg" alt="Submit Ticket" title="Submit Ticket" /></a>
        <a href="http://tickets.nexlinx.net.pk/index.php?/Knowledgebase/List" target="_blank"><img src="../public/images/support-knowledge.jpg" alt="Knowledge Base" title="Knowledge Base" /></a>
        <img src="../public/images/support-network.jpg" alt="Network Status" title="Network Status" />
        <img src="../public/images/support-trouble-shooting.jpg" alt="Trouble Shooting" title="Bandwith Test" id="bandwith" style="cursor:pointer;" /></a>
  </div>  
  <div class="clearfloat"></div>
  <div id="content">   

    <div class="content_left wide">
      <h2><a href="../index.php">Home</a> /  Support
      <div class="print_font">
        <a href="#" onclick="window.print(); return false;"><img src="../public/images/icon_print.png" alt="Print" title="Print" /></a>
      </div></h2>
      
      <div class="clearfloat"></div>
      
<h1>Latest News</h1>
			
            <!-- ########################################################################################################################################################## -->      
			<?php
                // Start counting time for the page load
                $starttime = explode(' ', microtime());
                $starttime = $starttime[1] + $starttime[0];
                
                // Include SimplePie
                // Located in the parent directory
                include_once('../includes/autoloader.php');
                include_once('../includes/idn/idna_convert.class.php');
                
                // Create a new instance of the SimplePie object
                $feed = new SimplePie();
                
                $feed->set_feed_url("http://tickets.nexlinx.net.pk/rss/index.php?/News/Feed");
                $feed->enable_cache(false);
                // Initialize the whole SimplePie object.  Read the feed, process it, parse it, cache it, and
                // all that other good stuff.  The feed's information will not be available to SimplePie before
                // this is called.
                $success = $feed->init();
                
                // We'll make sure that the right content type and character encoding gets set automatically.
                // This function will grab the proper character encoding, as well as set the content type to text/html.
                $feed->handle_content_type();
                
                
                // Check to see if there are more than zero errors (i.e. if there are any errors at all)
                if ($feed->error())
                {
                    // If so, start a <div> element with a classname so we can style it.
                    echo '<div class="sp_errors">' . "\r\n";
                
                        // ... and display it.
                        echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";
                
                    // Close the <div> element we opened.
                    echo '</div>' . "\r\n";
                }
                if ($success): ?>
            
                <!-- Let's begin looping through each individual news item in the feed. -->
                <?php 
					//echo count($feed->get_items());
					foreach($feed->get_items() as $item): ?>
                    <div class="chunk" style="margin-bottom:20px; font-family:Arial, Helvetica, sans-serif !important; font-size:12px; line-height:20px !important'">
            
                        <!-- Display the item's primary content. -->
                        <?php echo $item->get_content(); ?>
            
                        <?php
                        // Check for enclosures.  If an item has any, set the first one to the $enclosure variable.
                        if ($enclosure = $item->get_enclosure(0))
                        {
                            // Use the embed() method to embed the enclosure into the page inline.
                            echo '<div align="center">';
                            echo '<p>' . $enclosure->embed(array(
                                'audio' => './for_the_demo/place_audio.png',
                                'video' => './for_the_demo/place_video.png',
                                'mediaplayer' => './for_the_demo/mediaplayer.swf',
                                'altclass' => 'download'
                            )) . '</p>';
            
                            if ($enclosure->get_link() && $enclosure->get_type())
                            {
                                echo '<p class="footnote" align="center">(' . $enclosure->get_type();
                                if ($enclosure->get_size())
                                {
                                    echo '; ' . $enclosure->get_size() . ' MB';
                                }
                                echo ')</p>';
                            }
                            if ($enclosure->get_thumbnail())
                            {
                                echo '<div><img src="' . $enclosure->get_thumbnail() . '" alt="" /></div>';
                            }
                            echo '</div>';
                        }
                        ?>
            
                    </div>
            
                <!-- Stop looping through each item once we've gone through all of them. -->
                <?php endforeach; ?>
            
            <!-- From here on, we're no longer using data from the feed. -->
            <?php endif; ?>
            <!-- ########################################################################################################################################################## -->
      
      <div class="clearfloat"></div>
    </div><!--content_left-->
  
    <div class="content_right">
      <div class="right_submenu">
        	<style>
			#leftloginboxrememberme {
			  margin:0;
			  padding:0;
			  vertical-align:middle;
			  width:1.5em;
			}
			#leftloginboxremembermetext {
			  font-size:70%;
			  vertical-align:middle;
			}
			.vdivider {
			  border-color:#DDDDC7;
			  border-style:solid;
			  border-width:1px 0 0;
			  height:0;
			  margin:0.4em;
			}
			.input-btns{
				border:2px solid #DADADA;
				border-bottom-left-radius:10px;
				border-bottom-right-radius:10px;
				border-top-left-radius:10px;
				border-top-right-radius:10px;
				font-size:13px;
				margin-bottom:15px;
				padding:5px;
				width:120px;	
			}
			</style>
      		<div style="width:90%; margin:0px auto;">
                <h2 style="color:#2D699D!important;">Member Login</h2>
                <form method="post" action="http://tickets.nexlinx.net.pk/index.php?/Base/User/Login" name="LoginForm" target="_blank">
                    <input type="hidden" name="_redirectAction" value="">
                    <input class="loginstyledlabel input-btns" style="width:95%; margin-bottom:0px;" value="Your email address" onfocus="if (this.value == 'Your Email Address') this.value = '';" onblur="if (this.value == '') this.value = 'Your Email Address';" name="scemail" type="text"><br />
                    <input class="loginstyled input-btns" style="width:95%" value="" name="scpassword" type="password">
                    <br />
                    <div id="logintext" style="float:left;"><a href="http://tickets.nexlinx.net.pk/index.php?/Base/UserLostPassword/Index">Lost password</a></div>
                    <div id="loginsubscribebuttons" style="float:right; margin:3px 0px 0px 0px;"><input type="image" src="../public/images/login-btn.png" value="" /></div>
                    <div class="clearfloat"></div>
                </form>
                <div class="clearfloat"></div>
                <!--<p align="center" style="margin:20px 0px 0px 0px">
                <img src="../public/images/band-test.jpg" id="bandwith" style="cursor:pointer;">
                </p>-->
                <div class="clearfloat"></div>
                
            	<h2 style=" margin:20px 0px 0px 0px; color:#2D699D!important;">Subscribe</h2>
                <form method="post" action="http://tickets.nexlinx.net.pk/index.php?/News/Subscriber/Subscribe" name="SubscribeForm" target="_blank">
                    <div class="inputframe zebraeven">
                    <input class="emailstyledlabel input-btns" value="Your email address" style="width:95%" onfocus="if (this.value == 'Your email address') this.value = '';" onblur="if (this.value == '') this.value = 'Your email address';" name="subscribeemail" type="text"/>
                    </div>
                    <div id="loginsubscribebuttons" style="float:right; margin:3px 0px 0px 0px;">
                    <input type="image" src="../public/images/subscribe-btn.png" value="" />
                    </div>
                </form>
                <div class="clearfloat"></div>
                
                
            	
            	<!--pop up page bandwidth Jynkz-->
                <script type="text/javascript">
				$(document).ready(function() {
					$('#bandwith').click(function() {
						//Getting the variable's value from a link 
						var bandwith = "#popup-bandwidth";
						//Fade in the Popup
						$(bandwith).fadeIn(300);
						//Set the center alignment padding + border see css style
						var popMargTop = ($(bandwith).height() + 24) / 2; 
						var popMargLeft = ($(bandwith).width() + 24) / 2; 
						$(bandwith).css({ 
							'margin-top' : -popMargTop,
							'margin-left' : -popMargLeft
						});
						// Add the mask to body
						$('body').append('<div id="mask"></div>');
						$('#mask').fadeIn(300);
						return false;
					});
					// When clicking on the button close or the mask layer the popup closed
					//$('a.close, #mask').live('click', function() {
					$('a.close').live('click', function() {
					  $('#mask , .popup-bandwidth').fadeOut(300 , function() {
						$('#mask').remove();  
					}); 
					return false;
					});
					
				});
				</script>
                <style>
				#mask {display: none;background: #000; position: fixed; left: 0; top: 0; z-index: 10;width: 100%; height: 100%;opacity: 0.8;z-index: 999;}
				.popup-bandwidth{display:none;background: #FFF;padding: 10px; 	float: left;font-size: 1.2em;position: fixed;top: 50%; left: 50%;z-index: 99999;border-radius:3px 3px 3px 3px;-moz-border-radius: 3px; /* Firefox */ -webkit-border-radius: 3px; /* Safari, Chrome */}
				img.btn_close { Position the close buttonfloat: right; margin: -28px -28px 0 0;}
				</style>
                
            	<!-- // pop up page bandwidth Jynkz-->
            
            </div>
            
            
      </div>

      
      
      
    </div><!--content_right-->
   </div>
  </div><!--content-->
  </div>
  <div class="clearfloat"></div><!--clearfloat-->
  
    <div id="popup-bandwidth" class="popup-bandwidth">
       <a href="#" class="close" style="color:#000;float:right;"><img src="../public/images/close.png"></a>
       <iframe src="http://lg.nexlinx.net.pk/bw/meter.php" width="700" height="750"></iframe>
       <div class="clearfloat"></div>
    </div>
  <?php include("../includes/footer.php");?>
