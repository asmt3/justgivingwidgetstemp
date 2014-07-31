<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <?php echo $this->Html->css('normalize'); ?>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

        <?php echo $this->Html->css('main'); ?>
        <?php echo $this->Html->script('/js/vendor/modernizr-2.6.2.min.js'); ?>

        
    </head>
    <body>

        <nav class="cf">
            <ul class="cf">
                <li>
                    <a href="/pages/examples">Examples With Embed codes</a>
                </li>

                <li>
                    <a href="/donationlists/donationlist/2288">Donation List</a>
                </li>

                <li>
                    <a href="/donationlists/donationlistByRef/50/funeralzone">Donation List By Ref</a>
                </li>


                <li>
                    <a href="/charityeventlists/charityeventlist/2288">Charity Events</a>
                </li>
            </ul>
        </nav>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php echo $this->fetch('content'); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>


		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>


        <?php echo $this->Html->script('/js/plugins.js'); ?>
        <?php echo $this->Html->script('/js/main.js'); ?>
        <?php echo $this->fetch('script'); ?>

        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>