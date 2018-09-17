				<ul class="nav navbar-nav navbar-right">
					<li class="<?=$xs_dashboard;?>visible-xs">
						<a title="Dashboard" href="//<?=$http_host; ?>/dashboard.php"><i class="fa fa-desktop"></i> Dashboard</a></li>
					<li class="<?=$xs_appointments;?>visible-xs">
						<a title="Scheduling" href="//<?=$http_host; ?>/appointments.php"><i class="fa fa-calendar"></i> Appointments</a></li>
					<li class="<?=$xs_patients;?>visible-xs">
						<a title="Patients" href="//<?=$http_host; ?>/application.php?section=patients"><i class="fa fa-wheelchair"></i> Patients</a></li>
					<li class="<?=$xs_invoices;?>visible-xs">
						<a title="Invoicing" href="//<?=$http_host; ?>/application.php?section=invoices"><i class="fa fa-dollar"></i> Invoices</a></li>
					<li class="<?=$xs_products;?>visible-xs">
						<a title="products" href="//<?=$http_host; ?>/application.php?section=products"><i class="fa fa-barcode"></i> Products</a></li>
					<li class="<?=$xs_practitioners;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=practitioners"><i class="fa fa-user-md"></i> Practitioners</a></li>
					<li class="<?=$xs_notes;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=notes"><i class="fa fa-edit"></i> Notes</a></li>
					<li class="<?=$xs_messaging;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=messaging"><i class="fa fa-comment"></i> Messaging</a></li>
					<li class="<?=$xs_reports;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=stats"><i class="fa fa-bar-chart-o"></i> Stats</a></li>
					<li class="<?=$xs_locations;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=location"><i class="fa fa-building-o"></i> Locations</a></li>
					<li class="<?=$xs_options;?>visible-xs">
						<a title="Practitioners" href="//<?=$http_host; ?>/application.php?section=options"><i class="fa fa-gears"></i> Options</a></li>
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							<img class="usr-avi" width="23" height="23" alt="Michelle Manager" src="//<?=$http_host;?>/app/clients/michelle_manager.jpg">
							&nbsp;Michelle Manager <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="//<?=$http_host;?>/application.php?section=profile"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="//<?=$http_host;?>/application.php?section=settings"><i class="fa fa-gears"></i> Settings</a></li>
							<li class="divider"></li>
							<li><a href="//<?=$http_host;?>/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
						</ul>
					</li>
					<li class="hidden-xs"><a title="Quick Tasks" href="javascript:void(0);" class="ctrl menu" data-id="#quick-links"><i class="menu fa fa-level-down fa-2x"></i></a>
					</li>
				</ul>
