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
        <link rel="stylesheet" href="{{ asset('adm/assets/css/ace-rtl.min.css') }}" />
        
		{{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
		<link rel="stylesheet" href="{{ asset('adm/assets/main.css') }}" />

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

		<script src="{{ asset('adm/assets/js/markdown.min.js') }}"></script>
        <script src="{{ asset('adm/assets/js/bootstrap-markdown.min.js') }}"></script>
        <script src="{{ asset('adm/assets/js/jquery.hotkeys.index.min.js') }}"></script>
		<script src="{{ asset('adm/assets/js/bootstrap-wysiwyg.min.js') }}"></script>
        <script src="{{ asset('adm/assets/js/bootbox.js') }}"></script>
        
        
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

<script>
	jQuery(function($){

		$('textarea[data-provide="markdown"]').each(function(){
var $this = $(this);

if ($this.data('markdown')) {
  $this.data('markdown').showEditor();
}
else $this.markdown()

$this.parent().find('.btn').addClass('btn-white');
})

		function showErrorAlert (reason, detail) {
var msg='';
if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
else {
	//console.log("error uploading file", reason, detail);
}
$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
}


	// $('#editor1').ace_wysiwyg();

	$('#editor1').ace_wysiwyg({
toolbar:
[
	'font',
	null,
	'fontSize',
	null,
	{name:'bold', className:'btn-info'},
	{name:'italic', className:'btn-info'},
	{name:'strikethrough', className:'btn-info'},
	{name:'underline', className:'btn-info'},
	null,
	{name:'insertunorderedlist', className:'btn-success'},
	{name:'insertorderedlist', className:'btn-success'},
	{name:'outdent', className:'btn-purple'},
	{name:'indent', className:'btn-purple'},
	null,
	{name:'justifyleft', className:'btn-primary'},
	{name:'justifycenter', className:'btn-primary'},
	{name:'justifyright', className:'btn-primary'},
	{name:'justifyfull', className:'btn-inverse'},
	null,
	{name:'createLink', className:'btn-pink'},
	{name:'unlink', className:'btn-pink'},
	null,
	{name:'insertImage', className:'btn-success'},
	null,
	'foreColor',
	null,
	{name:'undo', className:'btn-grey'},
	{name:'redo', className:'btn-grey'}
],
'wysiwyg': {
	fileUploadError: showErrorAlert
}
}).prev().addClass('wysiwyg-style2');

$('#editor2').css({'height':'200px'}).ace_wysiwyg({
toolbar_place: function(toolbar) {
	return $(this).closest('.widget-box')
		   .find('.widget-header').prepend(toolbar)
		   .find('.wysiwyg-toolbar').addClass('inline');
},
toolbar:
[
	'bold',
	{name:'italic' , title:'Change Title!', icon: 'ace-icon fa fa-leaf'},
	'strikethrough',
	null,
	'insertunorderedlist',
	'insertorderedlist',
	null,
	'justifyleft',
	'justifycenter',
	'justifyright'
],
speech_button: false
});

$('[data-toggle="buttons"] .btn').on('click', function(e){
var target = $(this).find('input[type=radio]');
var which = parseInt(target.val());
var toolbar = $('#editor1').prev().get(0);
if(which >= 1 && which <= 4) {
	toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
	if(which == 1) $(toolbar).addClass('wysiwyg-style1');
	else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
	if(which == 4) {
		$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
	} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
}
});

// resize image
if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {

var lastResizableImg = null;
function destroyResizable() {
	if(lastResizableImg == null) return;
	lastResizableImg.resizable( "destroy" );
	lastResizableImg.removeData('resizable');
	lastResizableImg = null;
}

var enableImageResize = function() {
	$('.wysiwyg-editor')
	.on('mousedown', function(e) {
		var target = $(e.target);
		if( e.target instanceof HTMLImageElement ) {
			if( !target.data('resizable') ) {
				target.resizable({
					aspectRatio: e.target.width / e.target.height,
				});
				target.data('resizable', true);
				
				if( lastResizableImg != null ) {
					//disable previous resizable image
					lastResizableImg.resizable( "destroy" );
					lastResizableImg.removeData('resizable');
				}
				lastResizableImg = target;
			}
		}
	})
	.on('click', function(e) {
		if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
			destroyResizable();
		}
	})
	.on('keydown', function() {
		destroyResizable();
	});
}

enableImageResize();

/**
//or we can load the jQuery UI dynamically only if needed
if (typeof jQuery.ui !== 'undefined') enableImageResize();
else {//load jQuery UI if not loaded
	//in Ace demo ./components will be replaced by correct components path
	$.getScript("assets/js/jquery-ui.custom.min.js", function(data, textStatus, jqxhr) {
		enableImageResize()
	});
}
*/
}

	});
</script>
	</body>
</html>
