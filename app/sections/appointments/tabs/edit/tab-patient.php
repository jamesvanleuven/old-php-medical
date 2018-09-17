						<div class="tab-pane" id="tab-patient-create">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3">
										<p></p>
										<img src="//<?=$http_host; ?>/pub/img/placeholder-user.png" class="avatar img-responsive img-thumbnail tn-appointment">
											<address class="contact">
												<small>
													<strong>Patient Name</strong><br>
													<abbr title="Email"><i class="fa fa-envelope"></i> <a class="email" href="mailto:#">patient@email.com</a></abbr><br>
													<abbr title="Phone"><i class="fa fa-phone"></i> <a class="phone" href="tel:"> (123) 456-7890</a></abbr><br>
													<abbr title="SMS"><i class="fa fa-comment"></i> <a class="phone" href="msg:">(123) 456-7890</a></abbr></a>
												</small>
											</address>

											<address class="address"></address>
									</div>
									<div class="col-md-9">
										<div class="row">
								<!-- patient tabs -->
											<div class="col-md-12">
												<div class="row">
													<p></p>
													<div class="col-md-12">
														<form id="search-patients" role="form">
															<div id="multiple-datasets" class="typeahead-container col-lg-12">
																<input type="text" id="search-patient" name="search-patient" class="typeahead form-control col-lg-12" placeholder="search patient">
																<br> <small>Search by patient name, injury, treatment, telephone area-code, email <br>or clinic location's abbreviation (ehc, vccm)</small>
															</div>
														</form>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-xs-3">
														<ul class="nav nav-tabs tabs-left">
															<li class="active"><a href="#details-create" data-toggle="tab"><small>Details</small></a></li>
															<li><a href="#treatment-create" data-toggle="tab"><small>Treatment</small></a></li>
															<li><a href="#history-create" data-toggle="tab"><small>History</small></a></li>
															<li><a href="#something-create" data-toggle="tab"><small>Etc...</small></a></li>
														</ul>
													</div>
													<div class="col-xs-9">
														<div id="patient-container" class="tab-content">
													<!-- patient details -->
															<div class="tab-pane child-panel active" id="details-create">
																<div class="container-fluid">
																	<small>To edit, click on anything which has a dotted underline. Once you've edited all the fields, just click the 'update' button below</small>
																	<div class="row">
																		<div class="col-md-12">
																			<ul class="list-group">
																				<li class="list-group-item"><strong>Name: </strong> <a href="javascript:void(0);" id="name-edit" data-type="text" data-pk="1" data-title="patient name" class="text name editable editable-click">patient name</a></li>
																				<li class="list-group-item"><strong>Phone: </strong> <a href="javascript:void(0);" id="tel-edit" data-type="tel" data-pk="1" data-title="Phone" class="text phone editable editable-click">Patient Number</a></li>
																				<li class="list-group-item"><strong>Email: </strong> <a href="javascript:void(0);" id="email-edit" data-type="text" data-pk="1" data-title="Email" class="text email editable editable-click">Patient Email</a></li>
																				<li class="list-group-item"><strong>Street: </strong> <a href="javascript:void(0);" id="street-edit" data-type="text" data-pk="1" data-title="Street Address" class="text street editable editable-click">Patient Street Address</a></li>
																				<li class="list-group-item"><strong>Unit: </strong> <a href="javascript:void(0);" id="suite-edit" data-type="text" data-pk="1" data-title="Unit Address" class="text suite editable editable-click">Patient Suite Number</a></li>
																				<li class="list-group-item"><strong>City: </strong> <a href="javascript:void(0);" id="city-edit" data-type="select" data-pk="1" data-title="City" class="city editable editable-click">Patient City</a></li>
																				<li class="list-group-item"><strong>State/Province: </strong> <a href="javascript:void(0);" id="region-edit" data-type="select" data-pk="1" data-title="Region" class="region editable editable-click">Patient Region</a></li>
																				<li class="list-group-item"><strong>Country: </strong> <a href="javascript:void(0);" id="country-edit" data-type="select" data-pk="1" data-title="Country" class="country editable editable-click">Patient Country</a></li>
																				<li class="list-group-item"><strong>Postal Code: </strong> <a href="javascript:void(0);" id="zipcode-edit" data-type="text" data-pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" data-pk="1" data-title="Postal Code" class="text zipcode editable editable-click">Patient Postal/Zipcode</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
													<!-- patient treatment -->
															<div class="tab-pane child-panel" id="treatment-create">
																<h5><strong>Patient Treatment</strong></h5>
																<p>select a patient to view treatment information or visit the patient page, and select from the treatment options</p>
															</div>
													<!-- patient history -->
															<div class="tab-pane child-panel" id="history-create">
																<h5><strong>Patient History</strong></h5>
																<p>select a patient to view their history or visit the patient page, and enter historical data</p>
															</div>
													<!-- patient something else -->
															<div class="tab-pane child-panel" id="something-create">
																<h5><strong>Patient Something Else</strong></h5>
																<p>select a patient to view something else about them or visit the patient page, and select from the something else options or enter some kind of data</p>
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
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="right" data-target="#sidebar-right">
												<i class="fa fa-times"></i> Close </a>
										</p>
									</div>
								</div>
							</div>
						</div>
