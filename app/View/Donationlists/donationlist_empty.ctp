<?php

	// build donate URL
	$donateURL = 'https://www.justgiving.com/4w350m3/donation/direct/charity/' . $charityId . '?utm_source=website_cid' . $charityId . '&utm_medium=widget&utm_campaign=latestdonationswidget';

?>
<div class="jg-widget-container jg-widget-donationlist jg-widget-donationlist-empty">
	<div class="jg-widget-header">
		<?php echo $this->JgLogo->img(); ?>
	</div>
	
	<p class="no-donations-intro">
		We're raising funds through JustGiving. Click the button below to securely donate to our cause.
	</p>

	<div class="cta">
			<a href="<?php echo $donateURL?>">Donate</a>
	</div>
</div>