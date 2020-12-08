@extends('inc.app')
@section('content')

       <!-- Content -->
       <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <strong class="card-title">{{ $title }}</strong>
                        </div> --}}
                        <div class="card-body">

                            <div class="table-header">
                                Blog Information Table
                            </div>
                            <div>
                <table id="dynamic-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $k }}</td>
                            <td><img src="{{ asset('uploads/blog/thumbnails/'.$blog->image)}}" alt="Image" height="75" width="75"></td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->content }}</td>
                            
                            <td>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>

                                <form action="{{route('blog.destroy', $blog->id)}}" onclick="event.preventDefault();
                                    var r=confirm('Are you sure you want to delete this item?');
                                    if(r== true){ this.submit(); }" method="post" style="margin-top: 8px;">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    {{-- <input type="submit" class="btn btn-danger btn-sm mt-2" value="Delete"> --}}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                            </td>
                        </tr>
                        @php
                            $k++;
                        @endphp
                        @endforeach
                        
                    </tbody>
                </table>



            </div>

                        </div>
                    </div>
                </div>
            
                
                
                
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

   
@endsection