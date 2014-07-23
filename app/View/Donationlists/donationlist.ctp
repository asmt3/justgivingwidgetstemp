
<div class="widget-container">
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
				<?php echo $this->Number->currency($donation->amount, 'GBP'); ?>
			</div>

			<?php if ($donation->estimatedTaxReclaim): ?>

				<div class="estimatedTaxReclaim">
					+ <?php echo $this->Number->currency($donation->estimatedTaxReclaim, 'GBP'); ?> GiftAid
				</div>

			<?php endif; //($donation->estimatedTaxReclaim): ?>

		</div>



	</li>
<?php endforeach ?>

</ul>

<ul class="ctas">
	<li>
		<a href="http://www.justgiving.com/fundraising-page/creation/?cid=<?php echo $charityId?>">Fundraise now</a>
	</li>

	<li class="donate">
		<a href="https://www.justgiving.com/4w350m3/donation/direct/charity/<?php echo $charityId; ?>">Donate now</a>
	</li>
</ul>
</div>