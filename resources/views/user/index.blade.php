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

                <table id="user-tbl" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Suspend</th>
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
                            <td>{{ $user->suspend }}</td>
                            <td>{{ $user->created_at }}</td>
                            
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                {{-- <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                                <form action="{{route('user.destroy', $user->id)}}" onclick="event.preventDefault();
                                    var r=confirm('Are you sure you want to delete this item?');
                                    if(r== true){ this.submit(); }" method="post" style="display: inline-block;">
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


    <script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('adm/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/dataTables.select.min.js') }}"></script>

    <script>
        jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#user-tbl').DataTable( {
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			    } );
    });
    </script>
@endsection