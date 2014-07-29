<?php

	// build donate URL
	$donateURL = 'https://www.justgiving.com/4w350m3/donation/direct/charity/' . $charityId . '?utm_source=website_cid' . $charityId . '&utm_medium=widget&utm_campaign=latestdonationswidget';

?>
<div class="widget-container">
	<div class="widget-header">
		Recent donations on <?php echo $this->JgLogo->img(); ?>
	</div>
	<ul class="donationlist">

	<?php 

	foreach ($donations as $donation):?>
		<li class="cf">
		

			

			<div class="detail">
				<?php if ( ! $this->request->query('hide_donor')): ?>
					<h2><?php echo $donation->donorDisplayName ?></h2>
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

				<?php echo $this->JgNumber->giftAid($donation->amount); ?>

			</div>



		</li>
	<?php endforeach ?>

	</ul>

	<div class="cta">
			<a href="<?php echo $donateURL?>">Donate</a>
	</div>
</div>