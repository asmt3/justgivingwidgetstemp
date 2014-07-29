<?

	// only show 5 events
	$events = array_slice($events, 0, 5);

?>
<div class="jg-widget-container jg-widget-charityeventlist">
	
	<div class="jg-widget-header">
		Fundraise for one of our events on <?php echo $this->JgLogo->img(); ?>
	</div>

	<ul class="eventsList">

	<?php foreach ($events as $event):

		// build fundraise URL
		$fundraiseURL = 'http://www.justgiving.com/fundraising-page/creation/?cid=' . $charity_id . '&amp;eid=' . $event->id . '&utm_source=website_cid' . $charity_id . '_eid' . $event->id . '&utm_medium=widget&utm_campaign=eventwidget';

	?>
		<li class="jg-widget-clearfix">

			<div class="detail">
				<div class="name">
					<?php echo $event->name; ?>
				</div>

				<div class="startDate">
					<?php echo $this->JgTime->dateWithoutTime($event->startDate); ?>
				</div>
			</div>

			<div class="cta-fundraise">
				<a href="<?php echo $fundraiseURL; ?>">Fundraise for us</a>
			</div>

		</li>
	<?php endforeach ?>

	</ul>

</div>