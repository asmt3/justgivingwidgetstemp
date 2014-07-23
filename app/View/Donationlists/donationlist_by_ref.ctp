<?php

$default_limit = 5;
$min_limit = 1;
$max_limit = 10;

// truncate limit as appropriate
if ($limit = $this->request->query('limit')) {
	
	if ($limit < $min_limit) $limit = $min_limit;
	elseif ($limit > $max_limit) $limit = $max_limit;
	
} else {
	$limit = $default_limit;
}

$donations = array_slice($donations, 0, $limit);

?>

<div class="widget-container">

	<div class="widget-header">
		Recent donations on <img src="/img/logo-justgiving.png" class="jg-logo">
	</div>

	<ul class="donationlist">

	<?php foreach ($donations as $donation):?>
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

</div>