<?php
// Start counting time for the page load
$starttime = explode(' ', microtime());
$starttime = $starttime[1] + $starttime[0];

// Include SimplePie
// Located in the parent directory
include_once('includes/autoloader.php');
include_once('includes/idn/idna_convert.class.php');

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
				<div class="chunk focus" align="center">

					<!-- If the feed has a link back to the site that publishes it (which 99% of them do), link the feed's title to it. -->
					<h3 class="header"><?php if ($feed->get_link()) echo '<a href="' . $feed->get_link() . '">'; echo $feed->get_title(); if ($feed->get_link()) echo '</a>'; ?></h3>

					<!-- If the feed has a description, display it. -->
					<?php echo $feed->get_description(); ?>

				</div>

				<!-- Let's begin looping through each individual news item in the feed. -->
				<?php foreach($feed->get_items() as $item): ?>
					<div class="chunk">

						<!-- If the item has a permalink back to the original post (which 99% of them do), link the item's title to it. -->
						<h4><?php if ($item->get_permalink()) echo '<a href="' . $item->get_permalink() . '">'; echo $item->get_title(); if ($item->get_permalink()) echo '</a>'; ?>&nbsp;<span class="footnote"><?php echo $item->get_date('j M Y, g:i a'); ?></span></h4>

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