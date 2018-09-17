						<div class="tab-pane parent-panel" id="tab-soap-c">
							<p></p>
							<div class="container-fluid">
								<div class="row">
<!-- left side drag/drop for soap notes -->
									<div class="col-md-3">
										<ul class="list-group">
											<li class="list-group-item clearfix">
												<strong><small>Drag/Drop Option 1</small></strong>
											</li>
											<li class="list-group-item clearfix">
												<strong><small>Drag/Drop Option 2</small></strong>
											</li>
											<li class="list-group-item clearfix">
												<strong><small>Drag/Drop Option 3</small></strong>
											</li>
										</ul>
									</div>
<!-- start soap notes tab -->
									<div class="col-md-9">
										<p></p>
										<div class="row">
											<div class="col-md-12">
												<div class="text-right">
												<form class="form-inline" role="form">
													<div class="form-group">
														<label for="new-sn-c"><strong><small>Assign: </small></strong></label>
														<select id="new-sn-c" name="new-sn-c" class="form-control input-sm" required>
															<option value=""></option>
															<option value="sn-s-c" selected="selected"><firstletter>S</firstletter>ubjective</option>
															<option value="sn-o-c"><span class="select-bold">O</span>bjective</option>
															<option value="sn-a-c"><span class="select-bold">A</span>ssessment</option>
															<option value="sn-p-c"><span class="select-bold">P</span>lan</option>
														</select>
													</div>
													&nbsp;
													<div class="form-group">
														<label for="note-imortance"><strong><small>Priority: </small></strong></label>
														<select name="new-soap-priority-c" class="form-control input-sm" required>
															<option value=""></option>
															<option value="" class="fa fa-flag ico-silver" selected="selected">Normal</option>
															<option value="" class="fa fa-flag ico-green">Low</option>
															<option value="" class="fa fa-flag ico-yellow">Medium</option>
															<option value="" class="fa fa-flag ico-red">High</option>
														</select>
													</div>
													&nbsp;
													<a href="javascript:void(0);" class="ctrl btn btn-success btn-sm" data-id="#soap-create-settings">
														<i class="chevron tt fa fa-chevron-up" title="minimize" data-toggle="tooltip" data-placement="top"></i></a>
												</form>
												</div>
											</div>
										</div>
									<!-- BEGIN SOAP TABS -->
										<br>
										<div class="row clearfix">
										<!-- SOAP TAB NAV -->
											<div class="col-md-2">
												<ul class="nav nav-tabs tabs-left">
													<li class="active"><a class="tab-href" href="#sn-s-c" data-ref="#new-sn-c" data-toggle="tab">
														<small>S</small></a></li>
													<li><a class="tab-href" href="#sn-o-c" data-ref="#new-sn-c" data-toggle="tab">
														<small>O</small></a></li>
													<li><a class="tab-href" href="#sn-a-c" data-ref="#new-sn-c" data-toggle="tab">
														<small>A</small></a></li>
													<li><a class="tab-href" href="#sn-p-c" data-ref="#new-sn-c" data-toggle="tab">
														<small>P</small></a></li>
												</ul>
											</div>
										<!-- SOAP TAB CONTENT -->
											<div class="col-md-10">
												<div id="soapnotes-container" class="tab-content">
													<div class="tab-pane child-panel active" id="sn-s-c">
														<h4>Subjective</h4>
														<p>Describes the patient’s current condition in narrative form.  This section usually includes the patient’s chief complaint, or reason why they came to the physician. Includes:</p>
														<ol>
															<li>Onset (when and mechanism of injury – if applicable)</li>
															<li>Chronology (better or worse since onset, episodic, variable, constant, etc.)</li>
															<li>Quality (sharp, dull, etc.)</li>
															<li>Severity (usually a pain rating)</li>
															<li>Modifying factors (what aggravates/reduces the complaint – activities, postures, drugs, etc.)</li>
															<li>Additional symptoms (un/related or significant symptoms to the chief complaint)</li>
															<li>Treatment (has the patient seen another provider for this symptom?)</li>
														</ol>
													</div>
													<div class="tab-pane child-panel" id="sn-o-c">
														<h4>Objective</h4>
														<p>Documents objective, repeatable, and traceable facts about the patient’s status. Includes:</p>
														<ol>
															<li>Vital signs</li>
															<li>Findings from physical examinations, such as posture, bruising, and abnormalities</li>
															<li>Results from laboratory</li>
															<li>Measurements, such as age and weight of the patient</li>
														</ol>
													</div>
													<div class="tab-pane child-panel" id="sn-a-c">
														<h4>Assessment</h4>
														<p>The Physician’s medical diagnoses for the medical visit on the given date of a note written.</p>
													</div>
													<div class="tab-pane child-panel" id="sn-p-c">
														<h4>Plan</h4>
														<p>This describes what the health care provider will do to treat the patient – ordering labs, referrals, procedures performed, medications prescribed, etc.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
