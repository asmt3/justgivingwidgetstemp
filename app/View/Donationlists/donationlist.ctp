<?php

	// build donate URL
	$donateURL = 'https://www.justgiving.com/4w350m3/donation/direct/charity/' . $charityId . '?utm_source=website_cid' . $charityId . '&utm_medium=widget&utm_campaign=latestdonationswidget&reference=latestdonationswidget';

?>
<div class="jg-widget-container jg-widget-donationlist">
	<div class="jg-widget-header">
		Recent donations on <br> <?php echo $this->JgLogo->img(); ?>
	</div>

	<ul class="donationlist">

	<?php foreach ($donations as $donation): ?>
		<li class="jg-widget-clearfix">
		

			<div class="detail">
				<?php if ( ! $this->request->query('hide_donor')): ?>
					<div class="name"><?php echo $donation->donorDisplayName ?></div>
				<?php endif; // ( ! $this->request->query('hide_donor')): ?>


				<p>
					
					<?php if ( ! $this->request->query('hide_message')): ?>
						<?php echo $this->Text->truncate($donation->message) ?>
					<?php endif; // ( ! $this->request->query('hide_message')): ?>

					<?php if ( ! $this->request->query('hide_date')): ?>
						<em class="donationDate">
							<?php echo $this->JgTime->timeAgoInWords($donation->donationDate) ?>
						</em>
					<?php endif; // ( ! $this->request->query('hide_date')): ?>
				</p>
			</div>

			<div class="total">

				<div class="amount">
					<?php echo $this->JgNumber->donation($donation->amount); ?>
				</div>

				<?php echo $this->JgNumber->giftAid($donation->estimatedTaxReclaim); ?>

			</div>



		</li>
	<?php endforeach ?>

	</ul>

	<div class="cta">
		<a target="_blank" href="<?php echo $donateURL?>">Donate</a>
	</div>
</div>