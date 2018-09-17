<?
	if(isset($_GET["app"])){
		$app = $_GET["app"];
	}else{
		header( "location: http://bookt.in/" );
	}

	print($app);
