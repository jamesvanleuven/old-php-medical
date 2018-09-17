<?php
$patients = [
			[
				"id"=>"999",
				"name"=>"Mickey Mouse",
				"description"=>"Initially registered at EHC on Mar 15th, 2011",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/mickey_mouse.jpg",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"mickey@hotmail.com",
				"injury"=>[
					"Auto Accident"
				],
				"soap"=>[
									[
										"soap_id"=>3001,
										"practitioner_id"=>1111,
										"location_id"=>"ehc",
										"created"=>"2011/03/25",
										"x-ray"=>true,
										"visits"=>2,
										"type"=>"Adjustment",
										"subjective"=>[
															"headaches",
															"backpain",
															"restlessness",
															"sitting discomfort"
										],
										"objective"=>[
															"Forward Head Posture"
										],
										"assessment"=>[
											"Scoliosis confirmed",
											"Care plan initialized"
										],
										"plan"=>[
											"Decided on a care plan",
											"12 weeks x 3 times a week",
											"physio",
											"use the posture pillow every night"
											],
										"notes"=>[
													[
														"note_id"=>4002,
														"employee_id"=>1111,
														"created"=>"2011/03/25",
														"priority"=>0,
														"note_details"=>"Patient has purchased a  care plan and is going to also take physio-therapy"
													],
													[
														"note_id"=>4003,
														"employee_id"=>1111,
														"created"=>"2011/03/25",
														"priority"=>0,
														"note_details"=>"Indicated an interest in a weight loss program"
													]
										]
									],
									[
										"soap_id"=>3002,
										"practitioner_id"=>1111,
										"location_id"=>"ehc",
										"created"=>"2011/03/15",
										"x-ray"=>true,
										"visits"=>1,
										"type"=>"Initial Consultation",
										"subjective"=>[
															"headaches",
															"backpain",
															"restlessness",
															"sitting discomfort"
										],
										"objective"=>[
															"Forward Head Posture"
										],
										"assessment"=>[
											"needs a care plan",
											"possible scoliosis"
										],
										"plan"=>[
											"undetermined at this time"
											],
										"notes"=>[
													[
														"note_id"=>4001,
														"employee_id"=>1111,
														"created"=>"2014/03/15",
														"priority"=>0,
														"note_details"=>"Patient had an x-ray, but isn't sure if they want a care plan yet"
													]
										]
									]
				],
				"notes"=>null,
				"value"=>"Mickey Mouse",
				"tokens"=>[
								"Mickey",
								"Mouse",
								"604-456-7890",
								"ehc",
								"Auto",
								"Accident",
								"hotmail.com"
				]
			],
			[
				"id"=>"1",
				"name"=>"Bugs Bunny",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/bugs_bunny.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"bugs@yahoo.com",
				"injury"=>"Lower back pain",
				"soap"=>[
										"soap_id"=>3001,
										"practitioner_id"=>1111,
										"location_id"=>"ehc",
										"created"=>"2014/03/21",
										"x-ray"=>false,
										"visits"=>1,
										"type"=>"Initial Consultation",
										"subjective"=>[],
										"objective"=>[],
										"assessment"=>[],
										"plan"=>[],
										"notes"=>[
															[
															"note_id"=>1004,
															"employee_id"=>1111,
															"created"=>"2014/03/21",
															"priority"=>3,
															"note_details"=>null
															]
										]
				],
				"value"=>"Bugs Bunny",
				"tokens"=>[
								"Back",
								"Bugs",
								"Bunny",
								"778-456-7890",
								"vccm",
								"Lower",
								"Pain",
								"yahoo.com"
				]
			],
			[
				"id"=>"2",
				"name"=>"Scrooge McDuck",
				"description"=>"Initially registered at EHC on Mar 15th, 2011",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/scrooge_mcduck.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"scrooge@live.com",
				"injury"=>"Auto accident",
				"value"=>"Scrooge McDuck",
				"tokens"=>[
								"Scrooge",
								"McDuck",
								"604-456-7890",
								"ehc",
								"Auto",
								"Accident",
								"hotmail.com"
				]
			],
			[
				"id"=>"3",
				"name"=>"Elmer Fudd",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/elmer_fudd.jpg",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"elmer@outlook.com",
				"injury"=>"Hunting Accident",
				"value"=>"Elmer Fudd",
				"tokens"=>[
								"Elmer",
								"Fudd",
								"778-456-7890",
								"vccm",
								"Hunting",
								"Accident",
								"outlook.com"
				]
			],
			[
				"id"=>"4",
				"name"=>"Ludwig Von Drake",
				"description"=>"Initially registered at EHC on Mar 15th, 2011",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/ludwig_von_drake.jpg",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"ludwig@aol.com",
				"injury"=>"Spinal Injury",
				"value"=>"Ludwig Von Drake",
				"tokens"=>[
								"Ludwig",
								"Von",
								"Drake",
								"604-456-7890",
								"ehc",
								"Spinal",
								"Injury",
								"aol.com"
				]
			],
			[
				"id"=>"5",
				"name"=>"Dr. Otto Scratchansniff",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/otto_scratchansniff.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"drotto@harvard.edu",
				"injury"=>"Weight Loss",
				"value"=>"Dr. Otto Scratchansniff",
				"tokens"=>[
								"Dr",
								"Otto",
								"Scratchansniff",
								"778-456-7890",
								"vccm",
								"Weight",
								"Loss",
								"harvard.edu"
				]
			],
			[
				"id"=>"6",
				"name"=>"Peter Pan",
				"description"=>"Initially registered at EHC on Mar 15th, 2011",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/peter_pan.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"ppan@neverland.com",
				"injury"=>"Flying Accident",
				"value"=>"Peter Pan",
				"tokens"=>[
								"Peter",
								"Pan",
								"604-456-7890",
								"ehc",
								"Flying",
								"Accident",
								"neverland.com"
				]
			],
			[
				"id"=>"7",
				"name"=>"Foghorn Leghorn",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/foghorn_leghorn.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"bugs@yahoo.com",
				"injury"=>"Lower back pain",
				"value"=>"Foghorn Leghorn",
				"tokens"=>[
								"Back",
								"Foghorn",
								"Leghorn",
								"778-456-7890",
								"vccm",
								"Lower",
								"Pain",
								"leghorn.com"
				]
			],
			[
				"id"=>"8",
				"name"=>"Jiminy Cricket",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/jiminy_cricket.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"jiminy@cricket.com",
				"injury"=>"Lower back pain",
				"value"=>"Jiminy Cricket",
				"tokens"=>[
								"Back",
								"Jiminy",
								"Cricket",
								"778-456-7890",
								"vccm",
								"Lower",
								"Pain",
								"cricket.com"
				]
			],
			[
				"id"=>"9",
				"name"=>"Daisy Duck",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/daisy_duck.jpg",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"daisy@yahoo.com",
				"injury"=>"Lower back pain",
				"value"=>"Daisy Duck",
				"tokens"=>[
								"Back",
								"Daisy",
								"Duck",
								"778-456-7890",
								"vccm",
								"Lower",
								"Pain",
								"yahoo.com"
				]
			],
			[
				"id"=>"10",
				"name"=>"Daffy Duck",
				"description"=>"Initially registered at VCCM on Feb 24th 2009",
				"street"=>"795 Folsom Ave",
				"suite"=>"Suite 600",
				"city"=>"San Francisco",
				"region"=>"CA",
				"country"=>"US",
				"zipcode"=>94107,
				"avatar"=>"app/clients/patients/daffy_duck.png",
				"phone"=>"604-456-7890",
				"sms"=>"604-456-7890",
				"email"=>"daffy@duck.com",
				"injury"=>"Lower back pain",
				"value"=>"Daffy Duck",
				"tokens"=>[
								"Back",
								"Daisy",
								"Duck",
								"778-456-7890",
								"vccm",
								"Lower",
								"Pain",
								"duck.com"
				]
			]
	];

	header("Content-Type=>application/json");
	echo json_encode($patients);
