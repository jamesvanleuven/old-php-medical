						<div class="tab-pane parent-panel" id="tab-notes-create">
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
									<div class="col-md-9">
										<div class="row">
											<p></p>
											<div class="col-md-12">
												<div class="block-center">
												<form class="form-inline" role="form">
													<div class="form-group">
														<label for="new-note"><strong><small>Assign: </small></strong></label>
														<select id="new-note-create" name="new-note-create" class="form-control input-sm" required>
															<option value=""></option>
															<option value="notes-appointment-create" selected="selected">Appointment</option>
															<option value="notes-patient-create">Patient</option>
															<option value="notes-treatment-create">Treatment</option>
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
													<a href="javascript:void(0);" class="ctrl btn btn-success btn-sm" data-id="#note-create-settings">
														<i class="chevron tt fa fa-chevron-up" title="minimize" data-toggle="tooltip" data-placement="top"></i></a>
												</form>
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-3">
												<ul class="nav nav-tabs tabs-left">
													<li class="active"><a href="#notes-appointment-create" data-ref="#new-note-create" data-toggle="tab"><small>Appointments</small></a></li>
													<li><a href="#notes-patient-create" data-ref="#new-note-create" data-toggle="tab"><small>Patient</small></a></li>
													<li><a href="#notes-treatment-create" data-ref="#new-note-create" data-toggle="tab"><small>Treatment</small></a></li>
												</ul>
											</div>
											<div class="col-md-9">
											<!-- slide out textarea -->
												<div id="note-create-settings" class="note-container settings col-lg-12">
													<div class="setting panel">
														<div class="panel-body">
															<p><textarea name="new-create-note" class="form-control col-lg-12" rows="8" style="width:90%;"></textarea></p>
														</div>
													</div>
												</div>
											<!-- |*****| -->
												<div id="patient-container" class="tab-content">
											<!-- notes appointment -->
													<div class="tab-pane child-panel active" id="notes-appointment-create">
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
													<div class="tab-pane child-panel" id="notes-patient-create">
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
													<div class="tab-pane child-panel" id="notes-treatment-create">
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
													<button type="button" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update </button>
													<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="right" data-target="#sidebar-right">
														<i class="fa fa-times"></i> Close </a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
