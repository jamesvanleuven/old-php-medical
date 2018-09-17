<? include "app/lib/_app-lg-header.php"; ?>
<!-- ********** Slide Out Edit|Create Layer ********** -->
	<div id="sidebar-left" class="sidebar" data-dir="left"><? include "app/sections/appointments/edit-appointment.php"; ?></div>
	<div id="sidebar-right" class="sidebar" data-dir="right"><? include "app/sections/appointments/create-appointment.php"; ?></div>
<!-- ********** || ********** -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button id="navbar-toggle" class="btn navbar-button btn-primary pull-right visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars fa-2x"></i></button>
				<!-- button id="sidebar-toggle" class="btn navbar-button btn-primary pull-left"><i class="fa fa-bars fa-2x"></i></button -->
				<a class="navbar-brand" href="//<?=$http_host; ?>/?reload=home"><img id="nav-logo" src="//<?=$http_host;?>/pub/img/nav-logo.png" alt="Booked.in"></a>
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
<!-- row 1 -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clearfix">
				<h1><i class="fa<?=$avatar;?>"></i> <?=ucwords($uri_request);?> - <small><?=date('D M dS, Y');?></small>
					<form id="location" class="pull-right">
						<select name="location" class="form-control input-sm">
							<option value=""></option>
							<option value="1" selected="selected">North Van</option>
							<option value="2">Squamish</option>
							<option value="3">Whistler</option>
						</select>
					</form>
				</h1>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-2"><? include "app/sections/".$uri_request."/legend.php"; ?></div>
			<div class="col-lg-10"><? include "app/sections/".$uri_request."/content.php"; ?></div>
		</div>
		<hr>
	</div>
<!-- || -->
<? include "app/lib/_app-lg-footer.php"; ?>
