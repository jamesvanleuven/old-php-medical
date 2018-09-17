<? include "app/lib/_fc_header.php"; ?>
<!-- ********** Slide Out Edit|Create Layer ********** -->
	<div id="sidebar-left" class="sidebar" data-dir="left"><? include "app/sections/appointments/edit-appointment.php"; ?></div>
	<div id="sidebar-right" class="sidebar" data-dir="right"><? include "app/sections/appointments/create-appointment.php"; ?></div>
<!-- ********** || ********** -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button id="navbar-toggle" class="btn navbar-button btn-primary pull-right visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars fa-2x"></i></button>
				<!-- button id="sidebar-toggle" class="btn navbar-button btn-primary pull-left"><i class="fa fa-bars fa-2x"></i></button -->
				<a class="navbar-brand" href="//<?=$http_host; ?>/"><img id="nav-logo" src="//<?=$http_host;?>/pub/img/nav-logo.png" alt="Booked.in"></a>
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
				<h1><i class="fa<?=$avatar;?>"></i> <?=ucwords($dt_nav);?> - <small><?=date('D M dS, Y');?></small>
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
	<!-- today's calendar -->
			<div class="col-lg-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><h4 class="panel-title"><i class="fa fa-gear"></i><strong> Legend</strong></h4></div>
					<ul class="list-group">
						<li class="list-group-item">
							<p><strong>Practitioners</strong></p>
							<table id="event-views" class="table table-bordered">
								<tr>
									<td><input type="radio" name="evt_display" checked="checked"></td>
									<td>All Practitioners</td>
								</tr>
								<tr>
									<td><input type="radio" name="evt_display"></td>
									<td><i class="blue-up shape-margins pull-left"></i> Dr Michael</td>
								</tr>
								<tr>
									<td><input type="radio" name="evt_display"></td>
									<td><i class="pink-up shape-margins pull-left"></i> Dr Andrea</td>
								</tr>
							</table>
						</li>
						<li class="list-group-item">
							<p><strong>Appt Status</strong></p>
							<table id="event-views" class="table table-bordered">
								<tr><td><i class="green-down shape-margins pull-left"></i> Arrived</td></tr>
								<tr><td><i class="yellow-down shape-margins pull-left"></i> Rescheduled</td></tr>
								<tr><td><i class="orange-down shape-margins pull-left"></i> Booked</td></tr>
								<tr><td><i class="silver-down shape-margins pull-left"></i> Late</td></tr>
								<tr><td><i class="red-down shape-margins pull-left"></i> No Show</td></tr>
							</table>
						</li>
						<li class="list-group-item">
							<p><strong>Appt Type</strong></p>
							<table id="event-views" class="table table-bordered">
								<tr><td><i class="square adjustment shape-margins pull-left"></i> Adjustment</td></tr>
								<tr><td><i class="square consultation shape-margins pull-left"></i> Consultation</td></tr>
								<tr><td><i class="square report shape-margins pull-left"></i> Report of Finding</td></tr>
								<tr><td><i class="square weight shape-margins pull-left"></i> Weight Loss</td></tr>
							</table>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="panel panel-primary">
					<div class="panel-heading clearfix">
						<h3 class="panel-title pull-left"><i class="fa<?=$avatar;?>"></i> <?=ucwords($dt_nav);?></h3>
						<span class="pull-right">
							<div class="float-left">
								<i class="tt square adjustment" title="Adjustment Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square consultation" title="Initial Consultation Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square xray" title="X-Ray Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square exam" title="Progress Exam Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square report" title="Report of Finding Color Code" data-toggle="tooltip" data-placement="top"></i>
								<a href="javascript:void(0);" class="ctrl" data-id="#appt-settings">
									<i class="tt fa fa-wrench fa-inverse" title="settings" data-toggle="tooltip" data-placement="top"></i></a>
							</div>
						</span>
					</div>
					<div id="appt-settings" class="settings col-xs-12">
						<div class="setting panel panel-primary">
							<div class="panel-heading">
								<h5>Settings</strong></h5>
								<p>Load a collection of settings for this panel such as:</p>
								<ul class="unstyled">
									<li>color codes</li>
									<li>appointment types</li>
									<li> etc</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="calendar" class="panel-body"></div>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
		<hr>
	</div>
<!-- || -->
<? include "app/lib/_fc_footer.php"; ?>
