<?
	include "app/lib/config.php";
	if(isset($_GET["reload"])){
		$location = "/loader.php?section=/dashboard.php";
	}else{
		$location = "/loader.php?section=".$referrer;
	}
	echo($location);

	switch( $http_host ){
		case "bookt.in":
			header( "location: http://bookt.in/" );
		break;
		case "dev.bookt.in": /* seriously horrid hack for the sake of development */
			header( "location: https://dev.bookt.in".str_replace("https:dev.bookt.in","",$location) );
		break;
		case "localhost":
			header( "location: http://localhost".$location );
		break;
	}

