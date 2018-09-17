<? include "app/lib/config.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?=APP_NAME?> - <?=$page_title;?></title>
        <meta name="description" content="">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="//<?=$http_host;?>/pub/ico/apple-touch-icon-144-precomposed.png">
        <link rel="stylesheet" href="<?=BS_CSS; ?>">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?=FA_CSS; ?>" rel="stylesheet">
        <link rel="stylesheet" href="//<?=$http_host; ?>/pub/css/calendar/datepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="//<?=$http_host; ?>/pub/css/calendar/clockface.css" rel="stylesheet">
        <link rel="stylesheet" href="//<?=$http_host; ?>/pub/css/bootstrap.vertical-tabs.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=FC_CSS; ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?=BS_CSSEDIT; ?>" rel="stylesheet">
        <link rel="stylesheet" href="//<?=$http_host; ?>/pub/css/main.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 10]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
		<![endif]-->
		<script src="//<?=$http_host;?>/pub/js/iOS-homescreen.js"></script>
    </head>
    <body>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
