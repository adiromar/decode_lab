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


    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">

	      <div class="slider-item" style="background-image:url({{ asset('front/slider/a.jpg') }});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
		            </div>
		          </div>
		        </div>
	        </div>
          </div>
          
          <div class="slider-item" style="background-image:url({{ asset('front/slider/b.jpg') }});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
                <div class="col-md-6 ftco-animate">
                    <div class="text w-100">
                      {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('front/slider/c.jpg') }});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
                <div class="col-md-6 ftco-animate">
                    <div class="text w-100">
                      {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('front/slider/d.jpg') }});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end">
                <div class="col-md-6 ftco-animate">
                    <div class="text w-100">
                      {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>

	      <div class="slider-item" style="background-image:url({{ asset('front/slider/e.jpg') }});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            {{-- <h1 class="mb-4">Chiropractic care for the whole family</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
		            </div>
		          </div>
		        </div>
	        </div>
          </div>
          
	    </div>
	  </div>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Facilities</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 services ftco-animate">
            <div class="d-block d-flex pb-5">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-leaf"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Cancer Genetics</h3>
                {{-- <p style="min-height: 75px !important;"></p> --}}
                {{-- <p><a href="#" class="btn-custom cust-btn">Find A Test</a></p> --}}
              </div>
            </div>

            <div class="find-test text-center">
                <p><a href="#" class="btn btn-primary">Find A Test</a></p>
            </div>
          </div>
          
          <div class="col-md-3 services ftco-animate">
            <div class="d-block d-flex pb-5">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-plus-square"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Molecular Diagnosis of Infectious Disease
                </h3>
                {{-- <p style="max-height: 75px !important;"></p> --}}
                {{-- <p><a href="#" class="btn-custom cust-btn">Find A Test</a></p> --}}
              </div>
            </div> 
            <div class="find-test text-center">
                <p><a href="#" class="btn btn-primary">Find A Test</a></p>
            </div>

          </div>

          <div class="col-md-3 services ftco-animate">
            <div class="d-block d-flex pb-5">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-heartbeat"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Molecular Diagnosis of Transplant Infectious Disease</h3>

                {{-- <p style="min-height: 75px !important;"></p> --}}
                {{-- <p><a href="#" class="btn-custom cust-btn">Find A Test</a></p> --}}
              </div>
            </div>
            <div class="find-test text-center">
                <p><a href="#" class="btn btn-primary">Find A Test</a></p>
            </div>
          </div>

          <div class="col-md-3 services ftco-animate">
            <div class="d-block d-flex pb-5">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="fa fa-stethoscope"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Molecular Genetics</h3>

                {{-- <p style="min-height: 75px !important;"></p> --}}
                {{-- <p><a href="#" class="btn-custom cust-btn">Find A Test</a></p> --}}
              </div>
            </div>
            <div class="find-test text-center">
                <p><a href="#" class="btn btn-primary">Find A Test</a></p>
            </div>
          </div>

        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts Teams</h2>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('front/images/staff-1.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Chief Medical Officer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('front/images/staff-2.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Rachel Parker</h3>
								<span class="position mb-2">Chiropractor</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('front/images/staff-3.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Ian Smith</h3>
								<span class="position mb-2">Clinical Chiropractic Assistant</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('front/images/staff-4.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Alicia Henderson</h3>
								<span class="position mb-2">Licensed Massage Therapist</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('front/images/staff-5.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Front Desk Coordinator</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex order-md-last">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{ asset('front/images/about.jpg') }});">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pr-md-5 py-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to DGRC</span>
		            <h2 class="mb-4">About DECODE</h2>
		            <p>Founded in 2015 by an experienced team of Diagnostic Geneticist, Molecular Biologist, Clinical Biochemist and Clinical Microbiologist; Decode Genomics ad Research Center Pvt. Ltd is a Molecular Diagnostic Laboratory dedicated to providing molecular diagnostic services to Hospitals, Diagnostic Laboratory and Clinicians of Nepal.</p>
                    <p>We offer an extensive Menu of Molecular and Genetic tests for Oncology, Infectious Diseases and rare genetic disorders to help clinicians deliver individualized, specific and accurate diagnosis and personalized treatment.</p>
                
                </div>
		        </div>
						<div class="row ftco-counter pb-5" id="section-counter">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="45">0</strong>
		              </div>
		              <div class="text">
		              	<span>Years of <br>Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="2342">0</strong>
		              </div>
		              <div class="text">
		              	<span>Happy <br>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		              </div>
		              <div class="text">
		              	<span>Award <br>Winning</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-dark">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	{{-- <span class="subheading">Testimonies</span> --}}
            <h2>Mission, Vision &amp; About Us</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-users">About Us</span></div>
                  <div class="text">
                    <p class="mb-4">Founded in 2015 by an experienced team of Diagnostic Geneticist, Molecular Biologist, Clinical Biochemist and Clinical Microbiologist; Decode Genomics ad Research Center Pvt. Ltd is a Molecular Diagnostic Laboratory dedicated to providing molecular diagnostic services to Hospitals, Diagnostic Laboratory and Clinicians of Nepal.</p>
                    {{-- <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ asset('front/images/person_1.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div> --}}
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-target">Mission</span></div>
                  <div class="text">
                    <p class="mb-4">DGRC focused on providing Molecular Diagnostics test service that generates Reliable and Reproducible results at an affordable price to hospitals, Diagnostic Laboratory and Clinicians of Nepal.</p>
                    {{-- <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ asset('front/images/person_2.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div> --}}
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="">Our Vision</span></div>
                  <div class="text">
                    <p class="mb-4">To be the Reference Laboratory  of choice for Molecular Diagnosis of Infectious diseases, Oncology, Human Genetics, Predictive Diagnostics and Pharmacogenomics.</p>
                    {{-- <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ asset('front/images/person_2.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div> --}}
                  </div>
                </div>
              </div>
              
            
            
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/services/Sickle-cell.jpg') }});">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Foot Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-2.jpg') }});">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Arm Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-3.jpg') }});">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Shoulder Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-4.jpg') }});">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Back Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-5.jpg') }});">
            	<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Head &amp; Migraines</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-6.jpg') }});">
            	<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Wear &amp; Tear</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-7.jpg') }});">
            	<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Arm Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{ asset('front/images/work-8.jpg') }});">
            	<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Lower Back Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>	
		
		<section class="ftco-section">
            {{-- test --}}
            <div class="hero-wrap">
                <div class="services-slider owl-carousel">
        
                  <div class="slider-item" style="background-image:url({{ asset('front/services/BK-Virus-test.jpg') }});">
                      <div class="overlay"></div>
                    <div class="container">
                      <div class="row no-gutters slider-text align-items-center justify-content-end">
                          <div class="col-md-6 ftco-animate">
                              <div class="text w-100">
                                <h1 class="mb-4">Welcome to our </h1>
                                {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                {{-- <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="slider-item" style="background-image:url({{ asset('front/services/Hepatitis-B.jpg') }});">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                              {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="slider-item" style="background-image:url({{ asset('front/services/Hepatitis-C.jpg') }});">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                              {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="slider-item" style="background-image:url({{ asset('front/services/Sickle-cell.jpg') }});">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                              {{-- <h1 class="mb-4">Welcome to our chiropractic centre</h1>
                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <p><a href="#" class="btn btn-primary">Book an appointment</a></p> --}}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                </div>
            </div>
{{-- test --}}


      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('front/images/image_1.jpg') }}');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('front/images/image_2.jpg') }}');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('front/images/person_3.jpg') }});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('front/images/image_3.jpg') }}');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('front/images/person_1.jpg') }});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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