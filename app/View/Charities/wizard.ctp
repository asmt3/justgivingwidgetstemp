<?php echo $this->Html->script('widget-chooser', array('inline' => false)); ?>

<ul class="widget-chooser">
	<li>
		<a target="widget-preview" href="/donationlists/donationlist/<?php echo $charity_id ?>">Donation List</a>
	</li>

	<li>
		<a target="widget-preview" href="/charityeventlists/charityeventlist/<?php echo $charity_id ?>">Charity Events</a>
	</li>

	<li>
		<a target="widget-preview" href="/donationlists/donationlistByRef/funeralzone">Donations By Ref</a>
	</li>

</ul>


<iframe name="widget-preview" src="" ></iframe>