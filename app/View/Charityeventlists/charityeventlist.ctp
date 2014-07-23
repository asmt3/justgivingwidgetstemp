
<div class="widget-container">
	<ul class="eventsList">

	<?php foreach ($events as $event):?>
		<li class="cf">

			<div class="name">
				<?php echo $event->name; ?>
			</div>

			<div class="startDate">
				<?php echo $this->JgTime->nice($event->startDate); ?>
			</div>
			<?php if ( ! $this->request->query('hide_location')): ?>

				<div class="location">
					<?php echo $event->location ?>
				</div>

			<?php endif; // ( ! $this->request->query('hide_location')): ?>

			<div class="fundraise">
				<a href="http://www.justgiving.com/fundraising-page/creation/?cid=<?php echo $charity_id?>&amp;eid=<?php echo $event->id?>">Fundraise now</a>
			</div>

		</li>
	<?php endforeach ?>

	</ul>

</div>