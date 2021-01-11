@extends('inc.app')
@section('content')

        {{-- custom breadcrumb --}}
        {{-- <div class="custom-bread">
            <div class="">
                <div class="brd">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/admin') }}" class="adm-link"><i class="fa fa-home"></i> Home </a></li>
                        <li><span class="ml-2 mr-2"><i class="fa fa-angle-right"></i></span></li>
                        <li class="active"> {{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div> --}}
        <!-- /.breadcrumbs-->

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
                                COVID-19 Patient Information Table
                            </div>
                            <div>
                <table id="dynamic-table" class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Status</th>
                            <th>Insert Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($sliders as $slide)
                        <tr>
                            <td>{{ $k }}</td>
                            <td><img src="{{ asset('uploads/sliders/'.$slide->image)}}" alt="Image" height="55" width="75"></td>
                            <td>{{ $slide->slider_title }}</td>
                            <td>{{ $slide->status }}</td>
                            <td>{{ date('Y-m-d', strtotime($slide->created_at)) }}</td>
                            <td>
                            <a href="{{ route('sliders.edit', $slide->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>

                            <form action="{{route('sliders.destroy', $slide->id)}}" onclick="event.preventDefault();
                                var r=confirm('Are you sure you want to delete this item?');
                                if(r== true){ this.submit(); }" method="post" style="display:inline-block;">
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