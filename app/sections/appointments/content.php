				<div class="panel panel-primary">
					<div class="panel-heading clearfix">
						<h3 class="panel-title pull-left"><i class="fa<?=$avatar;?>"></i> <?=ucwords($uri_request);?></h3>
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
