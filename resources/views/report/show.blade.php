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
                        <div class="table-header">
                            {{ $title }}
                        </div>
                        <div class="card-body">
                <table id="show-tbl" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Lab ID</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Covid-19 Result</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1; 
                        // dd($patient);
                        @endphp
                        @foreach ($patient as $pat)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $pat->lab_id }}</td>
                            <td>{{ $pat->patient_name }}</td>
                            <td>{{ $pat->patient_age }}</td>
                            <td>{{ $pat->gender }}</td>
                            <td>{{ $pat->phone }}</td>

                            <td><?php if($pat->result == 'N' ):
                                echo '<span class="label label-sm label-danger">Negative</span>';
                            elseif($pat->result == 'P'):
                            echo '<span class="label label-sm label-success">POSITIVE</span>';
                            else:
                                echo '-';
                            endif;
                            ?></td>
                            <td>{{ $pat->created_at }}</td>
                            <td>
                            {{-- <a href="{{ route('patient.edit', $pat->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> --}}
                            <a href="#" class="btn btn-primary btn-sm report_modal" data-id="{{ $pat->id }}">Update Report</a>
                            </td>
                        </tr>
                        @php
                            $k++;
                        @endphp
                        @endforeach
                        
                    </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="report_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">

                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Sample Collection Report</h5>
                                </div>
                                <div class="col-md-4 col-12">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="modal-body report_response">
                        
                            

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
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

    <script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function(){
        $('.report_modal').click(function(e) {

                // alert($(this).data('id'));
                e.preventDefault();

                // $('#loader').show();
                let cat_id = $(this).data('id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#report_modal').modal('show');

                $.ajax({
                    type: 'POST',
                    url: '{{ route("fetch_report") }}',
                    data: {
                        cat_id,
                    },
                    success: function(data) {
                        // console.log(data);
                        // $('#loader').hide();
                        
                        $('.report_response').html(data.html);
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
    </script>
@endsection