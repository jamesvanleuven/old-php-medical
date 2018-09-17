<!-- begin footer -->
	<div class="container-fluid">
		<div class="row">
		<footer class="col-lg-12 clearfix"><? include "app/lib/_nav-footer.php"; ?></footer>
		</div>
	</div> <!-- /container -->
<!-- ********************** Modal Print Window ********************** -->
<? include("./app/sections/invoices/modal-print.php"); ?>
<? include("./app/sections/invoices/modal-cc.php"); ?>
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
        <script src="//<?=$http_host; ?>/pub/js/calendar/calendar-main.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/calendar/bootstrap-datepicker.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/calendar/clockface.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/scroll-startstop.events.jquery.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/plugins.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/main.js"></script>
    </body>
</html>
