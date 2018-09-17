<? include "../../lib/config.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?=APP_NAME?> - <?=ucwords($dt_nav);?></title>
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
        <link rel="stylesheet" href="<?=FC_CSS; ?>" rel="stylesheet">
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
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button id="navbar-toggle" class="btn navbar-button btn-primary pull-right visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars fa-2x"></i></button>
				<!-- button id="sidebar-toggle" class="btn navbar-button btn-primary pull-left"><i class="fa fa-bars fa-2x"></i></button -->
				<a class="navbar-brand" href="//<?=$http_host; ?>/"><img id="nav-logo" src="//<?=$http_host;?>/pub/img/nav-logo.png" alt="Booked.in"></a>
			</div>
			<div class="navbar-collapse collapse"><? include "../../lib/_nav-mobile.php"; ?></div><!--/.navbar-collapse -->
		</div>
	<!-- full screen drop down panel -->
		<div id="quick-links" class="settings col-md-12">
			<div class="setting panel">
				<div class="panel-body"><? include "../../lib/_nav-desktop.php"; ?></div>
			</div>
		</div>
	</div>
<!-- row 1 -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clearfix">
				<h1><i class="fa<?=$avatar;?>"></i> <?=ucwords($dt_nav);?> - <small><?=date('D M dS, Y');?></small>
					<form id="location" class="pull-right">
						<select name="location" class="form-control input-sm">
							<option value=""></option>
							<option value="1" selected="selected">North Van</option>
							<option value="2">Squamish</option>
							<option value="3">Whistler</option>
						</select>
					</form>
				</h1>
			</div>
		</div>
		<hr>
		<div class="row">
<!-- begin calendar section -->
				<div class="col-lg-2"></div>
				<div class="col-lg-10">
					<div class="panel-heading clearfix">
						<span class="pull-right">
							<div class="float-left">
								<i class="tt square adjustment" title="Adjustment Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square consultation" title="Initial Consultation Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square xray" title="X-Ray Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square exam" title="Progress Exam Color Code" data-toggle="tooltip" data-placement="top"></i>
								<i class="tt square report" title="Report of Finding Color Code" data-toggle="tooltip" data-placement="top"></i>
								<a href="javascript:void(0);" class="ctrl" data-id="#appt-settings">
									<i class="tt fa fa-wrench" title="settings" data-toggle="tooltip" data-placement="top"></i></a>&nbsp;
								<a href="javascript:void(0);" class="ctrl" data-id="#appointments-panel" data-ref="chevron">
									<i class="chevron tt fa fa-chevron-up" title="minimize" data-toggle="tooltip" data-placement="top"></i></a>
							</div>
						</span>
					</div>
				<!-- settings -->
					<div id="appt-settings" class="settings col-xs-12">
						<div class="setting panel panel-success">
							<div class="panel-heading">
								<h5>Settings</strong></h5>
								<p>Load a collection of settings for this panel such as:</p>
								<ul class="unstyled">
									<li>color codes</li>
									<li>appointment types</li>
									<li> etc</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- calendar -->
				<div id="appointments-panel" class="slider">
					<div id="calendar" class="panel-body"></div>
				</div>'
<!-- end calendar section -->
<!-- begin footer -->
	<div class="container-fluid">
		<div class="row">
		<footer class="col-lg-12 clearfix"><? include "../../lib/_nav-footer.php"; ?></footer>
		</div>
	</div> <!-- /container -->
    	<script src="<?=JQ_JS; ?>"></script>
        <script src="<?=JQ_MIGRATE; ?>"></script>
        <script src="<?=BS_JS; ?>"></script>
        <script src="//<?=$http_host; ?>/pub/js/plugins.js"></script>
        <script src="<?=FC_JS; ?>"></script>
        <script src="//<?=$http_host; ?>/pub/js/plugins.js"></script>
        <script src="//<?=$http_host; ?>/pub/js/calendar/calendar-main.js"></script>
    </body>
</html>
