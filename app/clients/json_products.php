<?php
	$products = [
		[
			"id"=> 2010,
			"manufacturer"=>"Denneroll",
			"products"=>[
				[
					"id"=>2011,
					"name"=>"Thoracic Support Set",
					"price"=>45.99,
					"tax"=>0.8,
					"count"=>25
				],
				[
					"id"=>2012,
					"name"=>"Cervical Traction Device",
					"price"=>125.50,
					"tax"=>0.8,
					"count"=>9
				]
			]
		],
		[
			"id"=>3010,
			"manufacturer"=>"Douglas Labratories",
			"products"=>[
				[
					"id"=>3011,
					"name"=>"Ultra Balance III",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3012,
					"name"=>"Glucosamine + MSM Forte",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3013,
					"name"=>"Multi-Probiotics",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3014,
					"name"=>"Vitamin D 1000IU",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3015,
					"name"=>"Organic Greens & Reds",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3016,
					"name"=>"Metabolic",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3017,
					"name"=>"Cal-6 + Mag",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3018,
					"name"=>"Ultra Anti-Oxidant",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3019,
					"name"=>"Ascorbplex 1000 Buffered",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>3020,
					"name"=>"Opti-EPA",
					"price"=>12.99,
					"tax"=>0.08,
					"count"=>12
				]
			]
		],
		[
			"id"=>4010,
			"manufacturer"=>"Pure Encapsulations",
			"products"=>[
				[
					"id"=>4011,
					"name"=>"The PureLean Protocol",
					"price"=>120.99,
					"tax"=>0.08,
					"count"=>5
				],
				[
					"id"=>4012,
					"name"=>"XanthiTrim",
					"price"=>149.99,
					"tax"=>0.08,
					"count"=>3
				]
			]
		],
		[
			"id"=>5010,
			"manufacturer"=>"Therapeutica",
			"products"=>[
				[
					"id"=>5011,
					"name"=>"The Ultimate Sleeping Pillow",
					"price"=>75.00,
					"tax"=>0.08,
					"count"=>12
				],
				[
					"id"=>5012,
					"name"=>"Wobble Chair",
					"price"=>245.00,
					"tax"=>0.08,
					"count"=>6
				]
			]
		]
	];

	header("Content-Type: application/json");
	echo json_encode($products);
//print_r( $events );
