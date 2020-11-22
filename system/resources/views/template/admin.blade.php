<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>WENS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('public/admin')}}/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('public/admin')}}/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('public/admin')}}/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<h1>WENS</h1>
			</div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			
		</div>
		<div class="header-right">
			
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{url('public/admin')}}/vendors/images/photo12.jpeg" >
						</span>
						<span class="user-name">Admin</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="{{url('logout')}}"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<h1 style="color:blue;">WENS</h1>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				
					
					<li>
						<a href="{{url('admin')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{url('admin/client')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user"></span><span class="mtext">Data Client</span>
						</a>
					</li>
					<li>
						<a href="{{url('produk')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-file"></span><span class="mtext">Produk</span>
						</a>
					</li>

					<li>
						<a href="{{url('kategori')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list"></span><span class="mtext">Kategori</span>
						</a>
					</li>

					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-check"></span><span class="mtext">Promo</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			@yield('content')
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{url('public/admin')}}/vendors/scripts/core.js"></script>
	<script src="{{url('public/admin')}}/vendors/scripts/script.min.js"></script>
	<script src="{{url('public/admin')}}/vendors/scripts/process.js"></script>
	<script src="{{url('public/admin')}}/vendors/scripts/layout-settings.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="{{url('public/admin')}}/vendors/scripts/dashboard.js"></script>

	<!-- <script src="{{url('public/admin')}}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="{{url('public/admin')}}/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="{{url('public/admin')}}/vendors/scripts/datatable-setting.js"></script></body> -->
</body>
</html>