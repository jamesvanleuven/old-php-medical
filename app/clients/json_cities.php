<?php
	$cities = [
		[
			"id"=>001,
			"region"=>100,
			"value"=>"San Francisco",
			"text"=>"San Francisco"
		],
		[
			"id"=>002,
			"region"=>101,
			"value"=>"North Vancouver",
			"text"=>"North Vancouver"
		],
		[
			"id"=>003,
			"region"=>102,
			"value"=>"Whistler",
			"text"=>"Whistler"
		],
		[
			"id"=>003,
			"region"=>103,
			"value"=>"Abbotsford",
			"text"=>"Abbotsford"
		],
		[
			"id"=>004,
			"region"=>104,
			"value"=>"West Vancouver",
			"text"=>"West Vancouver"
		],
		[
			"id"=>005,
			"region"=>105,
			"value"=>"richmond",
			"text"=>"Richmond"
		],
		[
			"id"=>006,
			"region"=>107,
			"value"=>"Surrey",
			"text"=>"Surrey"
		]
	];

	header("Content-Type: application/json");
	echo json_encode($cities);
//print_r( $cities );
