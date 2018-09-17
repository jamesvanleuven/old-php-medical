			<div class="panel">
				<div class="panel-heading clearfix">
					<h4 class="panel-title">
						<span class="pull-right"><a href="javascript:void(0);">
							<i class="close-panel fa fa-times" data-dir="right" data-target="#sidebar-right"></i></a></span>
						<span class="pull-left"><strong>Create Event</strong></span>
					</h4>
				</div>
				<div class="panel-body controller-body">
					<!-- Tab menu -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-appointment-c" data-toggle="tab">Appointment</a></li>
						<li><a href="#tab-patient-c" data-toggle="tab">Patient</a></li>
						<li><a href="#tab-soap-c" data-toggle="tab">SOAP</a></li>
						<li><a href="#tab-notes-c" data-toggle="tab">Notes</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- edit-appointment appointment panel -->
						<?php include 'tabs/create/tab-appointment.php'; ?>
						<!-- edit-appointment patient panel -->
						<?php include 'tabs/create/tab-patient.php'; ?>
						<!-- edit-appointment soap panel -->
						<?php include 'tabs/create/tab-soap.php'; ?>
						<!-- edit-appointment notes panel -->
						<?php include 'tabs/create/tab-notes.php'; ?>
					</div>
				</div>
			</div>
