<? include "app/lib/_app-lg-header.php"; ?>
<!-- ********** Slide Out Edit|Create Layer ********** -->
	<div id="sidebar-left" class="sidebar" data-dir="left"><? include "app/sections/appointments/edit-appointment.php"; ?></div>
	<div id="sidebar-right" class="sidebar" data-dir="right"><? include "app/sections/appointments/create-appointment.php"; ?></div>
<!-- ********** || ********** -->
<? include "app/lib/_navigation.php"; ?>
<!-- row 1 -->
	<div class="container-fluid">
		<div class="row"><? include "app/sections/locations/_select-list.php"; ?></div>
		<hr>
		<div class="row">
	<!-- today's appointments -->
		<? include "app/sections/dashboard/appointments.php"; ?>
	<!-- today's patients -->
		<? include "app/sections/dashboard/patients.php"; ?>
	<!-- today's tasks -->
		<? include "app/sections/dashboard/tasks.php"; ?>
		</div>
		<hr>
	</div>
<!-- || -->
<!-- row 2 -->
	<div class="container-fluid hidden-xs">
		<div class="row">
			<div class="col-md-2">
				<div class="panel panel-warning">
					<div class="box-model panel-heading"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-info">
					<div class="panel-heading"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-danger">
					<div class="panel-heading"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-success">
					<div class="panel-heading"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-primary">
					<div class="panel-heading"></div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
				</div>
			</div>
		</div>
		<hr>
	</div>
<!-- || -->
<!-- row 3 -->
	<div class="container-fluid">
		<div class="row">
	<!-- practitioners -->
		<? include "app/sections/dashboard/practitioners.php"; ?>
	<!-- sms messaging -->
		<? include "app/sections/dashboard/messaging.php"; ?>
	<!-- notifications -->
		<? include "app/sections/dashboard/notifications.php"; ?>
		</div>
		<hr>
	</div>
<!-- || -->

<? include "app/lib/_app-lg-footer.php"; ?>
