<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>{{ $title }}</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="shortcut icon" href="{{ asset('pdf_assets/main_logo.ico') }}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adm/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="{{ asset('adm/assets/css/jquery-ui.custom.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adm/assets/css/chosen.min.css') }}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/ace-skins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('adm/assets/css/ace-rtl.min.css') }}'" />
        
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}'" />
		<link rel="stylesheet" href="{{ asset('adm/assets/main.css') }}'" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ asset('adm/assets/js/ace-extra.min.js') }}"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    
	<body class="no-skin">
		<style>
			/* input[type=datetime-local]{
				max-width: 145px !important;
			}
			.sel-sm{
				min-width: 160px !important;
			} */
			.mdl-h5{
				margin-left: 12px;
				color: blue;
				font-weight: 600;
				text-decoration: underline;
			}
			.unique_lab_id{   
				color: green;
				font-weight: 600;
			}
		</style>
		@include('inc.header')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			@include('inc.sidebar')

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
                            <a href="{{ url('/admin') }}">Home</a>
							</li>
							<li class="active">{{ $title }}</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								{{ $title }}
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->



                                @include('errors.message')
                                
                                @yield('content')

							


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Encoderslab.com</span>
							Copyright &copy; 2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('adm/assets/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{ asset('adm/assets/js/jquery-ui.custom.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/chosen.jquery.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/jquery.sparkline.index.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/jquery.flot.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/jquery.flot.pie.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/jquery.flot.resize.min.js') }}"></script> 

        
        
		<!-- ace scripts -->
		<script src="{{ asset('adm/assets/js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
		</script>
	</body>
</html>
