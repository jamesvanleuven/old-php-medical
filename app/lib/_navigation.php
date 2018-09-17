	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button id="navbar-toggle" class="btn navbar-button btn-primary pull-right visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars fa-2x"></i></button>
				<a class="navbar-brand" href="//<?=$http_host; ?>/?reload=home"><img id="nav-logo" src="pub/img/nav-logo.png" alt="Booked.in"></a>
			</div>
			<div class="navbar-collapse collapse"><? include "app/lib/_nav-mobile.php"; ?></div><!--/.navbar-collapse -->
		</div>
	<!-- full screen drop down panel -->
		<div id="quick-links" class="settings col-md-12">
			<div class="setting panel">
				<div class="panel-body"><? include "app/lib/_nav-desktop.php"; ?></div>
			</div>
		</div>
	</div>
