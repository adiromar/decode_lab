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
                            <th>Lab ID</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Insert Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($patient as $pat)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $pat->lab_id }}</td>
                            <td>{{ $pat->patient_name }}</td>
                            <td>{{ $pat->patient_age . ' ' .$pat->year_or_month}}</td>
                            <td>{{ $pat->gender }}</td>
                            <td>{{ $pat->phone }}</td>
                            <td>{{ $pat->email }}</td>
                            <td>{{ date('Y-m-d', strtotime($pat->created_at)) }}</td>
                            <td>
                            {{-- <a href="{{ route('patient.edit', $pat->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> --}}

                            <a href="#" class="btn btn-primary btn-sm open_modal" data-id="{{ $pat->id }}"><i class="fa fa-pencil"></i></a>

                                <form action="{{route('patient.destroy', $pat->id)}}" onclick="event.preventDefault();
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


                <!-- Modal -->
                <div class="modal fade" id="sample_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">

                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Form - Sample Collection</h5>
                                </div>
                                <div class="col-md-4 col-12">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="modal-body sample_response">
                        
                            

                        </div>
                        {{-- <div class="modal-footer"> --}}
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        {{-- </div> --}}

                    </div>
                    </div>
                </div>
                {{-- modal ends --}}

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
        $(document).on('click','.open_modalw',function(){
        
        
        var url = "{{ url('fetch/patient_record') }}";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id, function (data) {
            //success data
            console.log(data);
            $('#tour_id').val(data.id);
            $('#name').val(data.name);
            $('#details').val(data.details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });

    $(document).ready(function(){
        $('.open_modal').click(function(e) {

                // alert($(this).data('id'));
                e.preventDefault();

                // $('#loader').show();
                let cat_id = $(this).data('id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#sample_modal').modal('show');

                $.ajax({
                    type: 'POST',
                    url: '{{ route("fetch_sample") }}',
                    data: {
                        cat_id,
                    },
                    success: function(data) {
                        // console.log(data);
                        // $('#loader').hide();
                        
                        $('.sample_response').html(data.html);
                        // if (data.status == 200) {
                            // console.log(data.html);
                            // $('#response').text();
                        // } else {
                        //     // nothing
                            // console.log('nothing');
                        // }
                    },error:function(data){ 
                        console.log(data);
                        console.log('error');
                    }
                });

            });
    });



    jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table').DataTable( {
					"lengthMenu": [[100, 250, 500, -1], [100, 250, 500, "All"]]
			    } );
    });
    
    </script>
@endsection