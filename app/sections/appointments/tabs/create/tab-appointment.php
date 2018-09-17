						<div class="tab-pane parent-panel active" id="tab-appointment-c">
						<form id="form-appointment-create" name="appointment-details">
							<div class="container-fluid">
					<!-- row 1 -->
								<div class="row">
									<div class="col-md-4">
										<h5><strong>Type</strong></h5>
										<select name="appointment-type" class="form-control">
											<option value=""></option>
											<option value="adjustment" selected="selected">Adjustment</option>
											<option value="consultation">Consultation</option>
											<option value="report">Report of Finding</option>
											<option value="weight">Weight Loss</option>
											<option value="xray">X Ray</option>
											<option value="exam">Exam</option>
										</select>
									</div>
									<div class="col-md-4">
										<h5><strong>Status</strong></h5>
										<select name="appointment-status" class="form-control">
											<option value=""></option>
											<option value="arrived">Arrived</option>
											<option value="reschedule">Rescheduled</option>
											<option value="booked" selected="selected">Booked</option>
											<option value="late">Late</option>
											<option value="no-show">No Show</option>
										</select>
									</div>
									<div class="col-md-4">
										<h5><strong>Practioner</strong></h5>
										<select name="appointment-practitioner" class="form-control">
											<option value=""></option>
											<option value="dr-michael-bologna" selected="selected">Dr Michael Bologna</option>
											<option value="dr-andrea-bologna">Dr Andrea Bologna</option>
										</select>
									</div>
								</div>
					<!-- row 2 -->
								<div class="row">
									<div class="col-md-4">
										<h5><strong>Date - <small>(mm-dd-yyyy)</small></strong></h5>
										<div id="create_datepicker" class="input-group date" data-date="" data-date-fprmat="mm-dd-yyyy">
											<input type="text" name="create-date" class="form-control" value="" required>
											<span class="input-group-addon"><i class="fa fa-calendar fa-sm"></i></span>
										</div>
									</div>
									<div class="col-md-4">
										<h5><strong>Time</strong></h5>
										<div class="input-group">
											<input type="text" name="create-time" class="form-control set_clock" value="" required>
											<span class="input-group-addon"><i class="fa fa-clock-o fa-sm"></i></span>
										</div>
									</div>
									<div class="col-md-4">
										<h5><strong>Duration</strong></h5>
										<select id="appt_repeating_create" class="form-control">
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
										<div class="appt_repeating_create well well-sm">
											<div class="row">
												<div class="col-xs-5">
													<label class="repeat" for="day"><span class="day-title">Selected Days: </span></label>
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
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="right" data-target="#sidebar-right">
												<i class="fa fa-times"></i> Close </a>
										</p>
									</div>
								</div>
							</div>
						</form>
						</div>
