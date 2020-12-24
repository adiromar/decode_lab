@extends('template.main')
@section('content')

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
        <p><a href="{{ url('cancer-genetics') }}" class="btn btn-primary">Find A Test</a></p>
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
            <p><a href="{{ url('infectious-disease') }}" class="btn btn-primary">Find A Test</a></p>
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
            <p><a href="{{ url('transplant-infectious-disease') }}" class="btn btn-primary">Find A Test</a></p>
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
            <p><a href="{{ url('molecular-genetics') }}" class="btn btn-primary">Find A Test</a></p>
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
                <div class="icon d-flex align-items-center justify-content-center"><span class="">About Us</span></div>
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
    
    
    
    <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          {{-- <span class="subheading">Our Services</span> --}}
        <h2>Our Services</h2>
      </div>
    </div>
        {{-- test --}}
        <div class="hero-wrap">
            <div class="services-slider owl-carousel rows">
    
              {{-- <div class="slider-item" >
                  <div class=""></div>
                <div class="container">
                  <div class="row no-gutters slider-text align-items-center justify-content-end">
                      <div class="col-md-6 ftco-animate" style="background-image:url({{ asset('front/services/BK-Virus-test.jpg') }});">
                          <div class="text w-100">
                            <h1 class="mb-4">Welcome to our </h1>
                            
                        </div>
                      </div>
                    </div>
                </div>
              </div> --}}

              {{-- <div class="slider-item" >
              <div class="col-sm-4">
                <div class="product-image-wrapper" style="border: 1px solid lightgrey;">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href=""><img src="{{ asset('front/services/BK-Virus-test.jpg') }}" alt=""></a>
                            
                            <p>Some text</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            </div> --}}

            @if(count($blogs) > 0)
            @foreach ($blogs as $item)

            <div class="col-md-33 d-flex ftco-animate mg-slider">
              
                <div class="blog-entry align-self-stretch padd-inside">
                  <div class="image-div">
                  <a href="{{ route('news', $item->slug) }}" class="block-20-new rounded" style="background-image: url('{{ asset('uploads/blog/thumbnails/'.$item->image) }}');">
                  </a>
                    <p class="categories">{{ $item->subtitle }}</p>
                  </div>
                  <div class="text mt-3">
                    
                    <div class="posted mb-3 d-flex">
                      {{-- <div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div> --}}
                      <div class="desc pl-3">
                        
                        <span>{{ $item->blog_title }}</span>
                      </div>
                    </div>
                  <h3 class="heading text-center"><a href="{{ route('news', $item->slug) }}" class="btn btn-primary">Read More</a></h3>
                    
                  </div>
                </div>
              </div>

            @endforeach
            @else

            <div class="col-md-33 d-flex ftco-animate mg-slider">
              
              <div class="blog-entry align-self-stretch padd-inside">
                <div class="image-div">
                <a href="blog-single.html" class="block-20-new rounded" style="background-image: url('{{ asset('front/services/Hepatitis-B.jpg') }}');">
                </a>
                  <p class="categories">categories</p>
                </div>
                <div class="text mt-3">
                  
                  <div class="posted mb-3 d-flex">
                    {{-- <div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div> --}}
                    <div class="desc pl-3">
                      
                      <span>Hepatitis B</span>
                    </div>
                  </div>
                  <h3 class="heading text-center"><a href="#" class="btn btn-primary">Read More</a></h3>
                  
                </div>
              </div>
            </div>

            <div class="col-md-33 d-flex ftco-animate mg-slider">
              <div class="blog-entry align-self-stretch padd-inside">
                <div class="image-div">
                  <a href="blog-single.html" class="block-20-new rounded" style="background-image: url('{{ asset('front/services/Hepatitis-C.gif') }}');">
                  </a>
                  <p class="categories">categories</p>
                </div>
                
                <div class="text mt-3">
                  <div class="posted mb-3 d-flex">
                    {{-- <div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div> --}}
                    <div class="desc pl-3">
                      {{-- <span>Posted by John doe</span> --}}
                      <span>Hepatitis C</span>
                    </div>
                  </div>
                  <h3 class="heading text-center"><a href="#" class="btn btn-primary">Read More</a></h3>
                </div>
              </div>
            </div>

            <div class="col-md-33 d-flex ftco-animate mg-slider">
              <div class="blog-entry align-self-stretch padd-inside">
                <div class="image-div">
                <a href="blog-single.html" class="block-20-new rounded" style="background-image: url('{{ asset('front/services/Sickle-cell.jpg') }}');">
                </a>
                <p class="categories">categories</p>
              </div>
                <div class="text mt-3">
                  <div class="posted mb-3 d-flex">
                    {{-- <div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div> --}}
                    <div class="desc pl-3">
                      {{-- <span>Posted by John doe</span> --}}
                      <span>Sickle Cell</span>
                    </div>
                  </div>
                  <h3 class="heading text-center"><a href="#" class="btn btn-primary">Read More</a></h3>
                </div>
              </div>
            </div>

            <div class="col-md-33 d-flex ftco-animate mg-slider">
              <div class="blog-entry align-self-stretch padd-inside">
                <div class="image-div">
                <a href="blog-single.html" class="block-20-new rounded" style="background-image: url('{{ asset('front/services/BK-Virus-test.jpg') }}');">
                </a>
                <p class="categories">categories</p>
              </div>
                <div class="text mt-3">
                  <div class="posted mb-3 d-flex">
                    {{-- <div class="img author" style="background-image: url({{ asset('front/images/person_2.jpg') }});"></div> --}}
                    <div class="desc pl-3">
                      {{-- <span>Posted by John doe</span> --}}
                      <span>BK Virus Test</span>
                    </div>
                  </div>
                  <h3 class="heading text-center"><a href="#" class="btn btn-primary">Read More</a></h3>
                </div>
              </div>
            </div>

            @endif

            </div>
        </div>
{{-- test --}}
  </div>
</section>


@endsection