<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DECODE - Genomics & Research Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
  </head>
  <body>


        @include('template.head')

        @include('template.navbar')

        @yield('content')
    
    
    <footer class="footer ftco-section ftco-no-pt">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
              <h2 class="logo"><a href="#">DECODE</a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget ml-md-5 py-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Spinal Manupulation</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Electrotherapy</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Manual Lympahtic</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Medical Acupuncture</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Therapeutic Exercise</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Joint Mobilization</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget bg-primary p-4 py-5">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://encoderslab.com" target="_blank">Encoderslab</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('front/js/popper.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('front/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('front/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('front/js/google-map.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>
    
  </body>
</html>