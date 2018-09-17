						<div class="tab-pane" id="tab-patient-c">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3">
										<p></p>
										<? include APP_SHARED . "/patient_details_sm.php"; ?>
									</div>
									<div class="col-md-9">
										<div class="row">
								<!-- patient tabs -->
											<div class="col-md-12">
												<div class="row">
													<p></p>
													<div id="search-patients" class="col-md-12">
														<? include APP_SHARED . "/patient_search.php"; ?>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-xs-3">
														<ul class="nav nav-tabs tabs-left">
															<li class="active"><a href="#patient-details-c" data-toggle="tab"><small>Details</small></a></li>
															<li><a href="#patient-treatment-c" data-toggle="tab"><small>Treatment</small></a></li>
															<li><a href="#patient-history-c" data-toggle="tab"><small>History</small></a></li>
														</ul>
													</div>
													<div class="col-xs-9">
														<div id="patient-container" class="tab-content">
													<!-- patient details -->
															<div class="tab-pane child-panel active" id="patient-details-c">
															<? include APP_SHARED . "/patient_details_lg.php"; ?>
															</div>
													<!-- patient treatment -->
															<div class="tab-pane child-panel" id="patient-treatment-c">
																<h5><strong>Patient Treatment</strong></h5>
																<p>select a patient to view treatment information or visit the patient page, and select from the treatment options</p>
															</div>
													<!-- patient history -->
															<div class="tab-pane child-panel" id="patient-history-c">
																<h5><strong>Patient History</strong></h5>
																<p>select a patient to view their history or visit the patient page, and enter historical data</p>
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
											<button type="button" data-id="#tab-patient-c" class="btn-save btn btn-success btn-sm" disabled><i class="fa fa-save"></i> Update</button>
											<a href="javascript:void(0);" class="close-panel btn btn-danger btn-sm" data-dir="right" data-target="#sidebar-right">
												<i class="fa fa-times"></i> Close </a>
										</p>
									</div>
								</div>
							</div>
						</div>
