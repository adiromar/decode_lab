@extends('template.main')

@section('content')
    

{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Blog</h1>
        </div>
      </div>
    </div>
  </section> --}}
      
      <section class="ftco-section">
    <div class="container">
      <div class="row">
        @if(count($list) > 0):
        @foreach ($list as $item)
            
        
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('uploads/blog/thumbnails/'.$item->image)}});">
            </a>
            <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
              <h3 class="heading"><a href="#">{{ $item->blog_title }}</a></h3>
                <p>{!! substr($item->content, 0, 100) !!}</p>
            <p><a href="{{ route('news', $item->slug) }}" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        @endforeach
        @else
            <p>No Any Posts</p>
        @endif
       

      </div>

      @if(count($list) > 1)
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>

      @endif

    </div>
  </section>

  @endsection