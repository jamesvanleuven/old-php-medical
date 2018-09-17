<!-- begin footer -->
	<div class="container-fluid">
		<div class="row">
		<footer class="col-lg-12 clearfix"><? include "app/lib/_nav-footer.php"; ?></footer>
		</div>
	</div> <!-- /container -->
<!-- ********************** Modal Print Window ********************** -->
<? include("./app/sections/invoices/modal-print.php"); ?>
<!-- **********************  -->
        <script src="<?=HOGAN_JS; ?>"></script>
    	<script src="<?=JQ_JS; ?>"></script>
        <script src="<?=JQ_MIGRATE; ?>"></script>
        <script src="<?=BS_JS; ?>"></script>
        <script src="<?=FC_JS; ?>"></script>
        <script src="<?=FC_JQUI; ?>"></script>
        <script src="<?=TYPE_AHEAD; ?>"></script>
        <script src="<?=BS_JSEDIT; ?>"></script>
        <script src="<?=MODERNIZR_JS; ?>"></script>
        <script src="<?=BS_JSEDIT; ?>"></script>
        <script src="//<?=$http_host; ?>/pub/js/invoices/printThis.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/calendar/sidebar.js"></script>
<?
	switch( $uri_request ){
		case "dashboard":
			print('<script src="//' . $http_host . '/pub/js/calendar/calendar-dashboard.js"></script>');
		break;
		case "appointments":
			print('<script src="//' . $http_host . '/pub/js/calendar/calendar-main.js"></script>');
		break;
	}
?>
        <script src="//<?=$http_host; ?>/pub/js/calendar/bootstrap-datepicker.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/calendar/clockface.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/scroll-startstop.events.jquery.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/serializeForm.min.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/plugins.js"></script>
        <script>var script_name = '<?=$referrer; ?>';</script>
        <script src="//<?=$http_host; ?>/pub/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        <!--
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        -->
        </script>
    </body>
</html>
