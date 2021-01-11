<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Decode Lab</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adm/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/ace.min.css') }}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ asset('adm/assets/css/ace-part2.min.css') }}" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('adm/assets/css/ace-rtl.min.css') }}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{ asset('adm/assets/css/ace-ie.min.css') }}" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
                                    {{-- <i class="ace-icon fa fa-leaf green"></i> --}}
                                <img src="{{ asset('pdf_assets/main_logo.png') }}" height="50" width="50" alt="decode lab">

									<span class="red">Decode</span>
									<span class="white" id="id-text2 grey">Lab</span>
								</h1>
								<h4 class="blue" id="id-company-text blue"> Genomics & Research Center</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-users grey"></i>
												Guest Login
											</h4>

                                            @include('errors.errors')

											<div class="space-6"></div>

											<form class="" action="{{ route('guest.login.check') }}" method="POST">
                                                {{ csrf_field() }}
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Username"  required />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                                    </label>
                                                    
                                                    @if ($errors->has('username'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                                    </label>


													<div class="space"></div>

													<div class="clearfix">
														{{-- <label class="inline">
															<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="ace" />
															<span class="lbl"> Remember Me</span>
														</label> --}}

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								

							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('adm/assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			 
			});
		</script>
	</body>
</html>
