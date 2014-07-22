
<div class="widget-container">
	<ul class="donationlist">

	<?php foreach ($donations as $donation):?>
		<li class="cf">

			<div class="total">

				<div class="amount">
					<?php echo $this->Number->currency($donation->amount, 'GBP'); ?>
				</div>

				<?php if ($donation->estimatedTaxReclaim): ?>

					<div class="estimatedTaxReclaim">
						+ <?php echo $this->Number->currency($donation->estimatedTaxReclaim, 'GBP'); ?> GiftAid
					</div>

				<?php endif; //($donation->estimatedTaxReclaim): ?>

			</div>

			<div class="detail">
				<h2><?php echo $donation->donorDisplayName ?></h2>
				<p>
					<?php echo $this->Text->truncate($donation->message) ?>
					<em class="donationDate">
						<?php echo $this->JgTime->timeAgoInWords($donation->donationDate) ?>
					</em>
				</p>
			</div>



		</li>
	<?php endforeach ?>

	</ul>

</div>