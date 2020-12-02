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
                        
                        <div class="card-body">
                            <div class="table-header">
                                {{ $title }}
                            </div>

                <table id="bootstrap-data-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Created</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->first()->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                {{-- <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                                <form action="{{route('user.destroy', $user->id)}}" onclick="event.preventDefault();
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
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

@endsection