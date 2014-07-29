<?php 

// get cid 
$cid = isset($_GET['cid']) ? $_GET['cid'] : 50;

?>



<!-- Donation List -->
<div class="example-col">


<textarea><div id="jg-widget-donationlist-<?=$cid;?>-dummy"></div>
<script>
(function(){

	var id = "jg-widget-donationlist-<?=$cid;?>-dummy",
		doc = document,
		pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

	var el=doc.getElementById(id);

	if(el){
		var js=doc.createElement('script');

		js.src="<?php echo Configure::read('App.fullBaseUrl');?>/donationlists/donationlistEmbeddableJs/<?=$cid;?>/dummy";
		el.parentNode.insertBefore(js, el);

	}
})();
</script></textarea>


<div id="jg-widget-donationlist-<?=$cid;?>-dummy"></div>
<script>
(function(){

	var id = "jg-widget-donationlist-<?=$cid;?>-dummy",
		doc = document,
		pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

	var el=doc.getElementById(id);

	if(el){
		var js=doc.createElement('script');

		js.src="<?php echo Configure::read('App.fullBaseUrl');?>/donationlists/donationlistEmbeddableJs/<?=$cid;?>/dummy";
		el.parentNode.insertBefore(js, el);

	}
})();
</script>


</div>









<!-- Donation List By Ref -->
<div class="example-col">


<textarea>
<div id="jg-widget-donationlistbyref-<?=$cid;?>-funeralzone-dummy"></div>
<script>
(function(){

	var id = "jg-widget-donationlistbyref-<?=$cid;?>-funeralzone-dummy",
		doc = document,
		pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

	var el=doc.getElementById(id);

	if(el){
		var js=doc.createElement('script');

		js.src="<?php echo Configure::read('App.fullBaseUrl');?>/donationlists/donationlistByRefEmbeddableJs/<?=$cid;?>/funeralzone/dummy";
		el.parentNode.insertBefore(js, el);

	}
})();

</script>
</textarea>



<div id="jg-widget-donationlistbyref-<?=$cid;?>-funeralzone-dummy"></div>
<script>
(function(){

	var id = "jg-widget-donationlistbyref-<?=$cid;?>-funeralzone-dummy",
		doc = document,
		pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

	var el=doc.getElementById(id);

	if(el){
		var js=doc.createElement('script');

		js.src="<?php echo Configure::read('App.fullBaseUrl');?>/donationlists/donationlistByRefEmbeddableJs/<?=$cid;?>/funeralzone/dummy";
		el.parentNode.insertBefore(js, el);

	}
})();

</script>




</div>
<div class="example-col">

	<textarea>
		<div id="jg-widget-charityeventlist-<?=$cid;?>-dummy"></div>
		<script>
		(function(){

			var id = "jg-widget-charityeventlist-<?=$cid;?>-dummy",
				doc = document,
				pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

			var el=doc.getElementById(id);

			if(el){
				var js=doc.createElement('script');

				js.src="<?php echo Configure::read('App.fullBaseUrl');?>/charityeventlists/charityeventlistEmbeddableJs/<?=$cid;?>/dummy";
				el.parentNode.insertBefore(js, el);

			}
		})();

		</script>
	</textarea>

	<div id="jg-widget-charityeventlist-<?=$cid;?>-dummy"></div>
	<script>
	(function(){

		var id = "jg-widget-charityeventlist-<?=$cid;?>-dummy",
			doc = document,
			pfx = (window.location.toString().indexOf("https")==0) ? "https":"http";

		var el=doc.getElementById(id);

		if(el){
			var js=doc.createElement('script');

			js.src="<?php echo Configure::read('App.fullBaseUrl');?>/charityeventlists/charityeventlistEmbeddableJs/<?=$cid;?>/dummy";
			el.parentNode.insertBefore(js, el);

		}
	})();

	</script>

</div>