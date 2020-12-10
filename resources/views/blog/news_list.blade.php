@extends('template.main')

@section('content')
    
      
      <section class="ftco-section">
        
    <div class="container">
      <h4 class="mb-3">Blogs </h4>
      
      <div class="row">
        
        @if(count($list) > 0)
        @foreach ($list as $item)
            
        
        <div class="col-md-3 d-flex ftco-animate pb-5">
          <div class="blog-entry align-self-stretch" style="margin: 0 auto;">
            <a href="blog-single.html" >
            <img src="{{ asset('uploads/blog/thumbnails/'.$item->image)}}" class="block-20" alt="" /></a>
            <div class="text mt-3">
                
              <h3 class="blog-lt-heading"><a href="{{ route('news', $item->slug) }}">{{ $item->blog_title }}</a></h3>
                {{-- <p>{!!  mb_strimwidth($item->content, 0, 100, ' [..]') !!}</p> --}}
            <p><a href="{{ route('news', $item->slug) }}" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>

        @endforeach

        
       

      </div>

      <div class="row">
        
        <div class="col text-center offset-5">
          <div class="block-27">
            {{ $list->links() }}
          </div>
        </div>



        @else
            <p>No Any Posts</p>
        @endif
      </div>


    </div>
  </section>

  @endsection