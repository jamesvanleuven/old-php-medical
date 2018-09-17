<?php
	$soapnotes = [
		[
			"id"=>5010,
			"patient_id"=>999,
			"sections"=>[
				"subjective"=>[
					[
						"id"=>5011,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>5012,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>5011,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"objective"=>[
					[
						"id"=>6011,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>6012,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>6013,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"assessment"=>[
					[
						"id"=>7011,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>7012,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>7013,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"plan"=>[
					[
						"id"=>8011,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>8012,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>8013,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				]
			]
		],
		[
			"id"=>5020,
			"patient_id"=>4,
			"sections"=>[
				"subjective"=>[
					[
						"id"=>5021,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>5022,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>5023,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"objective"=>[
					[
						"id"=>6021,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>6022,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>6023,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"assessment"=>[
					[
						"id"=>7021,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>7022,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>7023,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				],
				"plan"=>[
					[
						"id"=>8021,
						"created"=>"2014/05/25",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>8022,
						"created"=>"2014/05/21",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					],
					[
						"id"=>8023,
						"created"=>"2014/05/18",
						"practitioner"=>222,
						"details"=>[
							"item 1",
							"item 2",
							"item 3",
							"item 4"
						]
					]
				]
			]
		]
	];

	header("Content-Type: application/json");
	echo json_encode($soapnotes);
//print_r( $soapnotes );
