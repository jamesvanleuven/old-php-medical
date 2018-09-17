<?
	/****************************** domain ********************************/
	$http_host = str_replace( "www.", "", strtolower($_SERVER["HTTP_HOST"]) );
	if( !isset($_GET["reload"]) ){
		if( isset($_SERVER["HTTP_REFERER"]) ){
			$referrer = str_replace("http://".$http_host."/", "", strtolower($_SERVER["HTTP_REFERER"]) );
			switch($referrer){
				case "dashboard.php":
					$referrer = "/dashboard.php";
				break;
				default:
					$referrer = "/application.php?section=".str_replace("/","",$referrer);
			}
		}else{
			$referrer = "/dashboard.php";
		}
	}else{
		$referrer = "/dashboard.php";
	}
	if( isset($_GET["section"]) ){
		$section = $_GET["section"];
		if (strpos($section,'facebook') !== false) {
        	header("location: https://dev.bookt.in/facebook.php?app=ehc");
        }
	}
	/****************************** header info ********************************/
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	header('Content-type: text/html; charset=utf-8');
	date_default_timezone_set('America/Vancouver');
	/***************************** SQL SERVER *****************************/
	define( "SQLSRV_UID",	"sa" );
	define( "SQLSRV_PWD",	"Ch@NgEmE789" );
	define( "SQLSRV_DB",		"bookt_in" );
	define( "SQLSRV_SVR",	"64.27.59.144,1533" );
	include "db_open.php";
	define( "SQLSRV_CONN", $conn );
	/***************************** CIPHER KEY *****************************/
	include( "_cipher.php" );
	define( "CIPHER_KEY", "bookt.in" );
	$cipher = new Cipher( CIPHER_KEY );
	/***************************** CDN JS/CSS *****************************/
	define( "JQ_JS", "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ); // jquery 1.11.0
	define( "JQ_MIGRATE", "//code.jquery.com/jquery-migrate-1.2.1.min.js" ); // jquery migrate 1.2.1
	define( "MODERNIZR_JS", "//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" ); //modernizr 2.7.1
	define( "BS_JS", "//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" ); // bootstrap 3.1.1
	define( "BS_JSEDIT", "//".$http_host."/pub/js//bootstrap-editable.js" ); // bootstrap x-editable
	define( "FA_CSS", "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" ); // font awesome 4.0.3
	/***************************** CAL CSS/JS *****************************/
	define( "FC_JQUI", "//" . $http_host . "/pub/js/calendar/jquery-ui-1.10.4.custom.min.js" ); // jquery ui
	define( "FC_JS", "//" . $http_host . "/pub/js/calendar/fullcalendar.js" ); // fullcalendar
	define( "DP_JS", "//" . $http_host . "/pub/js/calendar/bootstrap-datepicker.js" ); // bootstrap datepicker
	define( "TYPE_AHEAD", "//" . $http_host . "/pub/js/typeahead.min.js" ); // typeahead bootstrap framework
	define( "HOGAN_JS", "//" . $http_host . "/pub/js/hogan-2.0.0.js" ); // hogan templating engine
	// related css files for js includes
	define( "BS_CSS", "//".$http_host."/pub/css/bootstrap.css" );
	define( "BS_CSSEDIT", "//".$http_host."/pub/css/bootstrap-editable.css" );
	define( "FC_CSS", "//".$http_host."/pub/css/calendar/fullcalendar.css");
	define( "DP_CSS", "//".$http_host."/pub/css/calendar/datepicker3.css" );
	/***************************** LABELS *****************************/
	define( "APP_NAME", "Bookt-In" );
	define( "APP_ROOT", strtolower($_SERVER['DOCUMENT_ROOT']) . "/app" );
	define( "APP_SHARED", APP_ROOT . "/lib" );
// sections
	if( isset($_SERVER['REQUEST_URI']) ){
		$uri_request = str_replace('/','', strtolower($_SERVER['REQUEST_URI']));
		$uri_request = str_replace('.php','', $uri_request);
		$uri_request = $uri_request;
	}
// navigation
	if( !isset($_GET["section"]) ){
		$dt_nav = strtolower($_SERVER["SCRIPT_NAME"]);
	}else{
		$dt_nav = strtolower( $_GET["section"] );
	}
	$dt_nav = str_replace("/", "", $dt_nav);
	$dt_nav = str_replace(".php", "", $dt_nav);
	$lg_dashboard = ""; $lg_appointments = ""; $lg_patients = ""; $lg_invoices = "";
	$lg_products = ""; $lg_practitioners = ""; $lg_notes = ""; $lg_messaging = "";
	$lg_reports = ""; $lg_locations = ""; $lg_options = ""; $lg_profile = ""; $lg_settings = "";
	$xs_dashboard = ""; $xs_appointments = ""; $xs_patients = ""; $xs_invoices = "";
	$xs_products = ""; $xs_practitioners = ""; $xs_notes = ""; $xs_messaging = "";
	$xs_reports = ""; $xs_locations = ""; $xs_options = ""; $xs_profile = ""; $xs_settings = "";
	switch($dt_nav){
		case "dashboard": $lg_dashboard = ' class="active"'; $xs_dashboard = "active "; $avatar = " fa-desktop";
			$html = '<p> -- ' . $dt_nav . ' dashboard content -- </p>'; break;
		case "appointments": $lg_appointments = ' class="active"'; $xs_appointments = "active "; $avatar = " fa-calendar";
			$html = file_get_contents("./app/sections/appointments/content.php"); $controls = file_get_contents("./app/sections/appointments/legend.php"); break;
		case "patients": $lg_patients = ' class="active"'; $xs_patients = "active "; $avatar = " fa-wheelchair";
			$html = file_get_contents("./app/sections/patients/content.php"); $controls = file_get_contents("./app/sections/patients/legend.php"); break;
		case "invoices": $lg_invoices = ' class="active"'; $xs_invoices = "active "; $avatar = " fa-dollar";
			$html = file_get_contents("./app/sections/invoices/content.php"); $controls = file_get_contents("./app/sections/invoices/legend.php"); break;
		case "products": $lg_products = ' class="active"'; $xs_products = "active "; $avatar = " fa-shopping-cart";
			$html = file_get_contents("./app/sections/products/content.php"); $controls = file_get_contents("./app/sections/products/legend.php"); break;
		case "practitioners": $lg_practitioners = ' class="active"'; $xs_practitioners = "active "; $avatar = " fa-user-md";
			$html = file_get_contents("./app/sections/practitioners/content.php"); $controls = file_get_contents("./app/sections/practitioners/legend.php"); break;
		case "notes": $lg_notes = ' class="active"'; $xs_notes = "active "; $avatar = " fa-edit";
			$html = file_get_contents("./app/sections/notes/content.php"); $controls = file_get_contents("./app/sections/notes/legend.php"); break;
		case "messaging": $lg_messaging = ' class="active"'; $xs_messaging = "active "; $avatar=" fa-comment";
			$html = file_get_contents("./app/sections/messaging/content.php"); $controls = file_get_contents("./app/sections/messaging/legend.php"); break;
		case "reporting": $lg_reports = ' class="active"'; $xs_reports = "active "; $avatar = " fa-bar-chart-o";
			$html = file_get_contents("./app/sections/reporting/content.php"); $controls = file_get_contents("./app/sections/reporting/legend.php"); break;
		case "locations": $lg_locations = ' class="active"'; $xs_locations = "active "; $avatar = " fa-building-o";
			$html = file_get_contents("./app/sections/locations/content.php"); $controls = file_get_contents("./app/sections/locations/legend.php"); break;
		case "options": $lg_options = ' class="active"'; $xs_options = "active "; $avatar = " fa-gears";
			$html = file_get_contents("./app/sections/options/content.php"); $controls = file_get_contents("./app/sections/options/legend.php"); break;
		case "profile": $lg_profile = ' class="active"'; $xs_profile = "active "; $avatar = " fa-user";
			$html = file_get_contents("./app/sections/profile/content.php"); $controls = file_get_contents("./app/sections/profile/legend.php"); break;
		case "settings": $lg_profile = ' class="active"'; $xs_profile = "active "; $avatar = " fa-gears";
			$html = file_get_contents("./app/sections/settings/content.php"); $controls = file_get_contents("./app/sections/settings/legend.php"); break;
	}
	$page_title = ucwords( $dt_nav );
