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
                                Page Information Table
                            </div>
                            <div>
                <table id="dynamic-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Image</th> --}}
                            <th>Title</th>
                            <th>Content</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($pages as $page)
                        <tr>
                            <td>{{ $k }}</td>
                            {{-- <td><img src="{{ asset('uploads/blog/thumbnails/'.$page->image)}}" alt="Image" height="75" width="75"></td> --}}
                            <td>{{ $page->page_title }}</td>
                            <td>{{ substr($page->content, 15, 250)}}</td>
                            
                            <td>
                            <a href="{{ route('page.edit', $page->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>

                                <form action="{{route('page.destroy', $page->id)}}" onclick="event.preventDefault();
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