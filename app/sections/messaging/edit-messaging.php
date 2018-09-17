			<div class="panel">
				<div class="panel-heading clearfix">
					<h4 class="panel-title">
						<span class="pull-right"><a href="javascript:void(0);">
						<i class="close-panel fa fa-times" data-dir="left" data-target="#sidebar-left"></i></a></span>
						<span class="pull-left"><strong>Edit Event</strong></span>
					</h4>
				</div>
				<div class="panel-body controller-body">
					<!-- Tab menu -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-appointment" data-toggle="tab">Appointment</a></li>
						<li><a href="#tab-patient" data-toggle="tab">Patient</a></li>
						<li><a href="#tab-notes" data-toggle="tab">Notes</a></li>
						<li><a href="#tab-invoices" data-toggle="tab">Quick Invoice</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
<!-- edit-appointment appointment panel -->
						<div class="tab-pane parent-panel active" id="tab-appointment">
						<form name="appointment-details">
							<div class="container-fluid">
					<!-- row 1 -->
								<div class="row">
									<div class="col-md-4">
										<h5><strong>Type</strong></h5>
										<select class="form-control">
											<option value=""></option>
											<option value="adjustment" selected>Adjustment</option>
											<option value="consultation">Consultation</option>
											<option value="report">Report of Finding</option>
											<option value="weight">Weight Loss</option>
											<option value="xray">X Ray</option>
											<option value="exam">Exam</option>
										</select>
									</div>
									<div class="col-md-4">
										<h5><strong>Status</strong></h5>
										<select class="form-control">
											<option value=""></option>
											<option value="arrived">Arrived</option>
											<option value="reschedule">Rescheduled</option>
											<option value="booked">Booked</option>
											<option value="late" selected>Late</option>
											<option value="no-show">No Show</option>
										</select>
									</div>
									<div class="col-md-4">
										<h5><strong>Practioner</strong></h5>
										<select class="form-control">
											<option value=""></option>
											<option value="dr-michael-bologna" selected>Dr Michael Bologna</option>
											<option value="dr-andrea-bologna">Dr Andrea Bologna</option>
										</select>
									</div>
								</div>
					<!-- row 2 -->
								<div class="row">
									<div class="col-md-4">
										<h5><strong>Date - <small>(mm-dd-yyyy)</small></strong></h5>
										<div id="edit_datepicker" class="input-group date" data-date="" data-date-fprmat="mm-dd-yyyy">
											<input type="text" name="edit_date" class="form-control" value="" required>
											<span class="input-group-addon"><i class="fa fa-calendar fa-sm"></i></span>
										</div>
									</div>
									<div class="col-md-4">
										<h5><strong>Time</strong></h5>
										<div class="input-group">
											<input type="text" name="edit-time" class="form-control set_clock" value="" required>
											<span class="input-group-addon"><i class="fa fa-clock-o fa-sm"></i></span>
										</div>
									</div>
									<div class="col-md-4">
										<h5><strong>Duration</strong></h5>
										<select id="appt_repeating_edit" class="form-control">
											<option value="0"></option>
											<option value="1" selected>Single Appointment</option>
											<option value="2">Single Recurring</option>
											<option value="3">Multiple Recurring</option>
										</select>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="appt_repeating_edit well well-sm">
											<div class="row">
												<div class="col-xs-5">
													<label class="repeat"><span class="day-title">Selected Days: </span></label>
													<ul class="list-inline">
														<li> Su<input type="checkbox" name="day" value="0" disabled></li>
														<li> Mo <input type="checkbox" name="day" value="1" disabled></li>
														<li> Tu <input type="checkbox" name="day" value="2" disabled></li>
														<li> We <input type="checkbox" name="day" value="3" disabled></li>
														<li> Th <input type="checkbox" name="day" value="4" disabled></li>
														<li> Fr <input type="checkbox" name="day" value="5" disabled></li>
														<li> Sa <input type="checkbox" name="day" value="6" disabled></li>
													</ul>
												</div>
												<div class="col-xs-2">
													<label class="repeat"># of Weeks: </label>
													<input type="number" name="weeks" pattern="[1-9]+" class="form-control input-sm col-xs-2" disabled>
												</div>
												<div class="col-xs-5">
													<label class="repeat">Manage Appointments: </label>
													<select name="duration" class="form-control input-sm" disabled>
														<option value="0" selected></option>
														<option value="1"> individually </option>
														<option value="2"> as a group </option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<p class="pull-right">
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update</button>
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="left" data-target="#sidebar-left">
												<i class="fa fa-times"></i> Close </a>
										</p>
									</div>
								</div>
							</div>
						</div>
						</form>
<!-- edit-appointment patient panel -->
						<div class="tab-pane" id="tab-patient">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3">
										<p></p>
										<img src="//<?=$http_host; ?>/app/clients/mickey_mouse.jpg" class="img-responsive img-thumbnail tn-appointment">
											<address>
												<small>
													<strong>Mickey Mouse</strong><br>
													<abbr title="Email"><i class="fa fa-envelope"></i> <a href="mailto:#">mickey@mouse.com</a></abbr><br>
													<abbr title="Phone"><i class="fa fa-phone"></i> <a href="tel:"> (123) 456-7890</a></abbr><br>
													<abbr title="SMS"><i class="fa fa-comment"></i> <a href="msg:">(123) 456-7890</a></abbr></a>
												</small>
											</address>

											<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											</address>
									</div>
									<div class="col-md-9">
										<div class="row">
								<!-- patient tabs -->
											<div class="col-md-12">
												<div class="row">
													<p></p>
													<div class="col-md-12">
														<form class="form-inline" role="form">
															<div class="input-group">
																<input type="search" name="search-patient" class="form-control input-sm" placeholder="search patient" disabled>
																<span class="input-group-btn">
																	<button class="btn btn-default btn-sm" type="button" disabled><i class="fa fa-search"></i></button>
																</span>
															</div>
														</form>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-xs-3">
														<ul class="nav nav-tabs tabs-left">
															<li class="active"><a href="#details" data-toggle="tab"><small>Details</small></a></li>
															<li><a href="#treatment" data-toggle="tab"><small>Treatment</small></a></li>
															<li><a href="#history" data-toggle="tab"><small>History</small></a></li>
															<li><a href="#something" data-toggle="tab"><small>Etc...</small></a></li>
														</ul>
													</div>
													<div class="col-xs-9">
														<div id="patient-container" class="tab-content">
													<!-- patient details -->
															<div class="tab-pane child-panel active" id="details">
																<div class="container-fluid">
																	<small>To edit, click on anything which has a dotted underline. Once you've edited all the fields, just click the 'update' button below</small>
																	<div class="row">
																		<div class="col-md-12">
																			<ul class="list-group">
																				<li class="list-group-item"><strong>Name: </strong> <a href="javascript:void(0);" id="name" data-type="text" data-pk="1" data-title="patient name" class="text editable editable-click">Mickey Mouse</a></li>
																				<li class="list-group-item"><strong>Phone: </strong> <a href="javascript:void(0);" id="tel" data-type="tel" data-pk="1" data-title="Phone" class="text editable editable-click">(604) 555-1234</a></li>
																				<li class="list-group-item"><strong>Email: </strong> <a href="javascript:void(0);" id="email" data-type="text" data-pk="1" data-title="Email" class="text editable editable-click">mickey@mouse.com</a></li>
																				<li class="list-group-item"><strong>Street: </strong> <a href="javascript:void(0);" id="street" data-type="text" data-pk="1" data-title="Street Address" class="text editable editable-click">795 Folsom Ave</a></li>
																				<li class="list-group-item"><strong>Unit: </strong> <a href="javascript:void(0);" id="street" data-type="text" data-pk="1" data-title="Unit Address" class="text editable editable-click">Suite 600</a></li>
																				<li class="list-group-item"><strong>City: </strong> <a href="javascript:void(0);" id="region-edit" data-type="select" data-pk="1" data-title="Region" class="region editable editable-click">North Vancouver</a></li>
																				<li class="list-group-item"><strong>State/Province: </strong> <a href="javascript:void(0);" id="state-edit" data-type="select" data-pk="1" data-title="State/Province" class="state editable editable-click">British Columbia</a></li>
																				<li class="list-group-item"><strong>Country: </strong> <a href="javascript:void(0);" id="country" data-type="text" data-pk="1" data-title="Country" class="text editable editable-click">USA</a></li>
																				<li class="list-group-item"><strong>Postal Code: </strong> <a href="javascript:void(0);" id="zipcode" data-type="text" data-pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" data-pk="1" data-title="Postal Code" class="text editable editable-click">94107</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
													<!-- patient treatment -->
															<div class="tab-pane child-panel" id="treatment">
																<h5><strong>Patient Treatment</strong></h5>
																<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
																<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
															</div>
													<!-- patient history -->
															<div class="tab-pane child-panel" id="history">
																<h5><strong>Patient History</strong></h5>
																<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p><p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
															</div>
													<!-- patient something else -->
															<div class="tab-pane child-panel" id="something">
																<h5><strong>Patient Something Else</strong></h5>
																<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
																<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
															</div>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
						<!-- patient update button -->
								<div class="row">
									<div class="col-md-12">
										<p class="pull-right">
											<button type="button" class="btn btn-success btn-sm" disabled><i class="fa fa-save"></i> Update</button>
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="left" data-target="#sidebar-left">
												<i class="fa fa-times"></i> Close </a>
										</p>
									</div>
								</div>
							</div>
						</div>
<!-- edit-appointment notes panel -->

						<div class="tab-pane parent-panel" id="tab-notes">
							<p></p>
							<div class="container-fluid">
								<div class="row">
							<!-- notes legend -->
									<div class="col-md-3">
										<ul class="list-group">
											<li class="list-group-item clearfix">
												<strong><small>Appointments: </small></strong>
												<span class="badge pull-right">03</span>
											</li>
											<li class="list-group-item clearfix">
												<strong><small>Patient: </small></strong>
												<span class="badge pull-right">15</span>
											</li>
											<li class="list-group-item clearfix">
												<strong><small>Treatment: </small></strong>
												<span class="badge pull-right">25</span>
											</li>
										</ul>
									</div>
							<!-- notes tabs -->
									<form class="form-inline" role="form">
									<div class="col-md-9">
										<div class="row">
											<p></p>
											<div class="col-md-12">
												<div class="block-center">
												<form class="form-inline" role="form">
													<div class="form-group">
														<label for="new-note"><strong><small>Assign: </small></strong></label>
														<select id="new-note-edit" name="new-note-edit" class="form-control input-sm" required>
															<option value=""></option>
															<option value="notes-appointment" selected="selected">Appointment</option>
															<option value="notes-patient">Patient</option>
															<option value="notes-treatment">Treatment</option>
														</select>
													</div>
													&nbsp;
													<div class="form-group">
														<label for="note-imortance"><strong><small>Priority: </small></strong></label>
														<select name="new-priority-create" class="form-control input-sm" required>
															<option value=""></option>
															<option value="" class="fa fa-flag ico-silver" selected="selected">Normal</option>
															<option value="" class="fa fa-flag ico-green">Low</option>
															<option value="" class="fa fa-flag ico-yellow">Medium</option>
															<option value="" class="fa fa-flag ico-red">High</option>
														</select>
													</div>
													&nbsp;
													<a href="javascript:void(0);" class="ctrl btn btn-success btn-sm" data-id="#note-edit-settings">
														<i class="chevron tt fa fa-chevron-up" title="minimize" data-toggle="tooltip" data-placement="top"></i></a>
												</form>
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-3">
												<ul class="nav nav-tabs tabs-left">
													<li class="active"><a href="#notes-appointment" data-ref="#new-note-edit" data-toggle="tab"><small>Appointments</small></a></li>
													<li><a href="#notes-patient" data-ref="#new-note-edit" data-toggle="tab"><small>Patient</small></a></li>
													<li><a href="#notes-treatment" data-ref="#new-note-edit" data-toggle="tab"><small>Treatment</small></a></li>
												</ul>
											</div>
											<div class="col-md-9">
											<!-- slide out textarea -->
												<div id="note-edit-settings" class="note-container settings col-lg-12">
													<div class="setting panel">
														<div class="panel-body">
															<p><textarea name="new-edit-note" class="form-control col-lg-12" rows="8" style="width:90%;"></textarea></p>
														</div>
													</div>
												</div>
											<!-- |*****| -->
												<div id="patient-container" class="tab-content">
											<!-- notes appointment -->
													<div class="tab-pane child-panel active" id="notes-appointment">
														<table class="table">
															<tr>
																<th><i class="fa fa-calendar-o"></i></th>
																<th><small>Details</small></th>
																<th><i class="fa fa-info"></i></th>
																<th></th>
															</tr>
															<tr>
																<td><small>04/12</small></td>
																<td><p><strong><small>Helen Smith</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-green"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<div class="pull-left" data-target="#note-1234">5 notes appended</div>
																		<div class="pull-right"><i class="fa fa-chevron-up"></i></div>
																		<div id="note-1234" class="appended-notes">
																			<table class="table table-striped">
																				<tr>
																					<th><i class="fa fa-calendar-o"></i></th>
																					<th><small>Details</small></th>
																					<th><i class="fa fa-info"></i></th>
																				</tr>
																				<tr>
																					<td><small>04/12</small></td>
																					<td><p><strong><small>Dr Michael Bologna</small></strong></p>
																					<p>Some appended random notation added later</p>
																					</td>
																					<td><i class="fa fa-flag ico-green"></i></td>
																				</tr>
																				<tr>
																					<td><small>04/12</small></td>
																					<td><p><strong><small>Dr Michael Bologna</small></strong></p>
																					<p>Some appended random notation added later</p>
																					</td>
																					<td><i class="fa fa-flag ico-green"></i></td>
																				</tr>
																				<tr>
																					<td><small>04/12</small></td>
																					<td><p><strong><small>Dr Michael Bologna</small></strong></p>
																					<p>Some appended random notation added later</p>
																					</td>
																					<td><i class="fa fa-flag ico-green"></i></td>
																				</tr>
																				<tr>
																					<td><small>04/12</small></td>
																					<td><p><strong><small>Dr Michael Bologna</small></strong></p>
																					<p>Some appended random notation added later</p>
																					</td>
																					<td><i class="fa fa-flag ico-green"></i></td>
																				</tr>
																				<tr>
																					<td><small>04/12</small></td>
																					<td><p><strong><small>Dr Michael Bologna</small></strong></p>
																					<p>Some appended random noted added later</p>
																					</td>
																					<td><i class="fa fa-flag ico-green"></i></td>
																				</tr>
																			</table>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/08</small></td>
																<td><p><strong><small>Laurielle Asconi</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-silver"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">0 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/03</small></td>
																<td><p><strong><small>Dr. Andrea Bologna</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-yellow"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">3 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
														</table>
													</div>
											<!-- notes patient -->
													<div class="tab-pane child-panel" id="notes-patient">
														<table class="table">
															<tr>
																<th><i class="fa fa-calendar-o"></i></th>
																<th><small>Details</small></th>
																<th><i class="fa fa-info"></i></th>
																<th></th>
															</tr>
															<tr>
																<td><small>04/12</small></td>
																<td><p><strong><small>Dr. Michael Bologna</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-green"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">5 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/08</small></td>
																<td><p><strong><small>Dr. Michael Bologna</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-silver"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">0 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/03</small></td>
																<td><p><strong><small>Dr. Andrea Bologna</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-yellow"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">3 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
														</table>
													</div>
											<!-- notes treatment -->
													<div class="tab-pane child-panel" id="notes-treatment">
														<table class="table">
															<tr>
																<th><i class="fa fa-calendar-o"></i></th>
																<th><small>Details</small></th>
																<th><i class="fa fa-info"></i></th>
																<th></th>
															</tr>
															<tr>
																<td><small>04/12</small></td>
																<td><p><strong><small>Dr. Andrea Bologna</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-red"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">5 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/08</small></td>
																<td><p><strong><small>Helen Smith</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-green"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">0 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
															<tr>
																<td><small>04/03</small></td>
																<td><p><strong><small>Helen Smith</small></strong></p>
																<p>Aenean tincidunt bibendum risus nec feugiat. Duis hendrerit tortor eget diam consequat, imperdiet fermentum urna imperdiet. Nullam diam leo, pharetra vel consequat sit amet, aliquam vitae lacus</p>
																</td>
																<td><i class="fa fa-flag ico-silver"></i></td>
																<td><button class="btn btn-sm"><i class="fa fa-pencil fa-sm"></i></button></td>
															</tr>
															<tr>
																<td colspan="4">
																	<div class="well well-sm clearfix">
																		<span class="pull-left">3 notes appended</span>
																		<span class="pull-right"><i class="fa fa-chevron-down"></i></span>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
										</div>
										<p></p>
										<div class="row">
											<div class="col-md-12">
												<p class="pull-right">
													<button type="button" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update</button>
													<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="left" data-target="#sidebar-left">
														<i class="fa fa-times"></i> Close </a>
												</p>
											</div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
<!-- Quick Invoicing Tabs -->
						<div class="tab-pane parent-panel" id="tab-invoices">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3">
										<p><h5><strong>Products</strong></h5></p>
										<div class="row">
<!-- products insert panel -->
											<div class="col-md-12">
												<form role="form">
													<div class="form-group">
														<select id="product-select" name="products" class="product-insert form-control input-sm" placeholder="Select Products">
															<option value=""></option>
															<optgroup label="Denneroll">
																<option value="35.95" data-taxcode="0.08"><small>Thoracic Support Set</small></option>
																<option value="125.50" data-taxcode="0.08"><small>Cervical Traction Device</small></option>
															</optgroup>
															<optgroup label="Douglas Labratories">
																<option value="12.99" data-taxcode="0.08"><small>Ultra Balance III</small></option>
																<option value="15.45" data-taxcode="0.08"><small>Glucosamine + MSM Forte</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Multi-Probiotics</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Vitamin D 1000IU</small></option>
																<option value="6.99" data-taxcode="0.08"><small>Organic Greens & Reds</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Metabolic</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Cal-6 + Mag</small></option>
																<option value="9.99" data-taxcode="0.08"><small>Ultra Anti-Oxidant</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Ascorbplex 1000 Buffered</small></option>
																<option value="12.99" data-taxcode="0.08"><small>Opti-EPA</small></option>
															</optgroup>
															<optgroup label="Pure Encapsulations">
																<option value="120.99" data-taxcode="0.08"><small>The PureLean Protocol</small></option>
																<option value="150.00" data-taxcode="0.08"><small>XanthiTrim</small></option>
															</optgroup>
															<optgroup label="Therapeutica">
																<option value="75.00" data-taxcode="0.08"><small>The Ultimate Sleeping Pillow</small></option>
																<option value="245.00" data-taxcode="0.08"><small>Wobble Chair</small></option>
															</optgroup>
														</select>
													</div>
													<div class="form-group">
														<div id="product-details" class="well well-small"></div>
													</div>
												</form>
											</div>
<!-- end products insert form -->
										</div>
									</div>
									<div class="col-md-9">
										<div id="patient-invoice" class="panel panel-info">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-12">
													<!-- insert quick invoice for this patient -->
														<div id="invoice-details" class="child-panel"></div>
													<!-- | end invoice | -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12 clearfix">
										<p class="pull-right">
											<button id="print-invoice" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
												<i class="fa fa-search"></i> Print Preview</button>
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="left" data-target="#sidebar-left">
												<i class="fa fa-times"></i> Close </a>
										</p>
										<p class="pull-left">
											<ul class="list-inline">
												<li><input type="radio" id="ico_cash" name="payment_type" data-type="ico_cash.jpg" value="cash">
													<label for="ico_cash">
														<img title="Cash Payment" class="img-thumbnail cc-icons" src="http://<?=$http_host;?>/pub/img/ico_cash.jpg"></label></li>
												<li><input type="radio" id="ico_debit" name="payment_type" data-type="ico_debit.jpg" value="debit" checked>
													<label for="ico_debit">
														<img title="Interac Debit" class="img-thumbnail cc-icons" src="http://<?=$http_host;?>/pub/img/ico_debit.jpg"></label></li>
												<li><input type="radio" id="ico_visa" name="payment_type" class="cc" data-type="ico_visa.jpg" value="visa">
													<label for="ico_visa">
														<img title="Visa Payment" class="img-thumbnail cc-icons" src="http://<?=$http_host;?>/pub/img/ico_visa.jpg"></label></li>
												<li><input type="radio" id="ico_mc" name="payment_type" class="cc" data-type="ico_mc.jpg" value="mc">
													<label for="ico_mc">
														<img title="Mastercard Payment" class="img-thumbnail cc-icons" src="http://<?=$http_host;?>/pub/img/ico_mc.jpg"></label></li>
												<li><input type="radio" id="ico_amex" name="payment_type" class="cc" data-type="ico_amex.jpg" value="amex">
													<label for="ico_amex">
														<img title="American Express Payment" class="img-thumbnail cc-icons" src="http://<?=$http_host;?>/pub/img/ico_amex.jpg"></label></li>
											</ul>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
