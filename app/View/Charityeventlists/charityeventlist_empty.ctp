<?php
	// build fundraise URL without an event ID
	$fundraiseURL = 'http://www.justgiving.com/fundraising-page/creation/?cid=' . $charity_id . '&utm_source=website_cid' . $charity_id . '&utm_medium=widget&utm_campaign=eventwidget';

?>




<!-- No events found for this charity -->

<div class="widget-container">
	
	<div class="widget-header">
		<?php echo $this->JgLogo->img(); ?>
	</div>

	<p class="no-events-intro">
		Fundraisers are amazing. Help us raise money by starting your own fundraising campaign.
	</p>

	<div class="cta-fundraise-no-events">
		<a href="<?php echo $fundraiseURL; ?>">Fundraise for us</a>
	</div>

</div>


