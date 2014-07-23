<?

	// only show 5 events
	$events = array_slice($events, 0, 1);

?>
<div class="widget-container">
	
	<div class="widget-header">
		Fundraise for one of our events on <img src="/img/logo-justgiving.png" class="jg-logo">
	</div>

	<ul class="eventsList">

	<?php foreach ($events as $event):

		// build fundraise URL
		$fundraiseURL = 'http://www.justgiving.com/fundraising-page/creation/?cid=' . $charity_id . '&amp;eid=' . $event->id . '&utm_source=website_cid' . $charity_id . '_eid' . $event->id . '&utm_medium=widget&utm_campaign=eventwidget';

	?>
		<li class="cf">

			<div class="name">
				<?php echo $event->name; ?>
			</div>

			<div class="startDate">
				<?php echo $this->JgTime->dateWithoutTime($event->startDate); ?>
			</div>

			<div class="fundraise">
				<a href="<?php echo $fundraiseURL; ?>">Fundraise for us</a>
			</div>

		</li>
	<?php endforeach ?>

	</ul>

</div>