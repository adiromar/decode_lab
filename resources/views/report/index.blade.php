@extends('inc.app')
@section('content')

{{-- Print/Mail/SMS Report --}}


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

                            <div class="col-md-offset-4 col-md-8 col-12">
                                <a href="#" id="bulk_email" class="btn btn-primary btn-sm">Send Bulk Email</a>
                                <a href="#" id="bulk_sms" class="btn btn-info btn-sm">Send Bulk MSG</a>
                                <small> *Check multiple data & send bulk email/msg</small>
                            </div>
                <table id="print-tbl" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" id="checkAll" class="aces" />
                                    {{-- <span class="lbl" id="checkAll"></span> --}}
                                </label>
                            </th>
                            <th>#</th>
                            <th>Lab ID </th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Covid-19 Result</th>
                            <th>Mail/SMS Count</th>
                            <th>Entry Date</th>
                            <th>Report Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1; 
                        // dd($patient);
                        @endphp
                        @foreach ($patient as $pat)
                        <?php $sms_count=$mail_count=0;
                        $mail_count = DB::table('sent_mail_details')->where('lab_id', $pat->lab_id)->sum('sent_mail_details.mail_sent');
                        // $mail = DB::table('sent_mail_details')->where('lab_id', $pat->lab_id)->first();
                        $sms_count = DB::table('sent_sms_details')->where('lab_id', $pat->lab_id)->sum('sent_sms_details.sms_sent');

                         ?>
                        
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="check" value="{{ $pat->id }}" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
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

                            
                            <td>{{ $mail_count . '/' .$sms_count }}</td>
                            <td>{{ date("Y-m-d",strtotime($pat->created_at)) }}</td>
                            <td>{{ $pat->reporting_date }}</td>
                            <td>
                                <?php
                                if(Auth::user()->roles()->first()->role == 'Admin'):
                                    $print_pdf = 'print_pdf';
                                    $down_pdf = 'down_pdf';
                                    $mail_pdf = 'mail_pdf';
                                    $sms_report = 'sms_report';
                                elseif(Auth::user()->roles()->first()->role == 'Normal'):
                                    $print_pdf = 'print_pdf_normal';
                                    $down_pdf = 'down_pdf_normal';
                                    $mail_pdf = 'mail_pdf_normal';
                                    $sms_report = 'sms_report_normal';
                                endif;
                                ?>
                                <a href="{{ route($print_pdf, $pat->id) }}" target="_blank" class="btn btn-success btn-sm">Print PDF</a>
                                <a href="{{ route($down_pdf, $pat->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-download"></i> PDF</a>
                                <a href="{{ route($mail_pdf, $pat->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i> E-mail</a>
                                
                                <form action="{{ route($sms_report) }}" method="post" class="" style="display: inline;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $pat->id }}">
                                    <input type="hidden" name="unique_lab_id" value="{{ $pat->lab_id }}">

                                    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-phone"></i> Msg</button>
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

    <div class="resp"></div>
    <!-- /.content -->
    <div class="clearfix"></div>

    <script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function(){
// Check/Uncheck ALl
$('#checkAll').change(function(){
    // alert('hello');
  if($(this).is(':checked')){
    $('input[name="check[]"]').prop('checked',true);
  }else{
    $('input[name="check[]"]').each(function(){
       $(this).prop('checked',false);
    });
  }
});

  // Checkbox click
  $('input[name="check[]"]').click(function(){
    var total_checkboxes = $('input[name="check[]"]').length;
    var total_checkboxes_checked = $('input[name="check[]"]:checked').length;

    if(total_checkboxes_checked == total_checkboxes){
       $('#checkAll').prop('checked',true);
    }else{
       $('#checkAll').prop('checked',false);
    }
  });


//   function bulk_email(el) {
    $('#bulk_email').click(function(){
            // cat_id = $(el).parents('.report-show').find('.uid').data('id');
            var arr=[];
            $.each($("input[name='check']:checked"), function(){            
                    arr.push($(this).val());
            });
            // console.log(arr);
            // checkid = $('input[name="check[]"]').val();
            checkid = '109';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), '_method': 'patch'
                    // 'X-HTTP-Method-Override': 'PATCH'
                }
            });
            $.ajax({
                    type: 'POST',
                    
                    url: "{{ route('bulk_email') }}",
                    data: {
                        checkid,
                        arr
                    },
                    success: function(data) {
                        $('.resp').html(data);
                    
                        // console.log(data);
                    },error:function(data){ 
                        console.log(data);
                    }
                });
        });

        //   function bulk_email(el) {
    $('#bulk_sms').click(function(){
            // cat_id = $(el).parents('.report-show').find('.uid').data('id');
            var arr=[];
            $.each($("input[name='check']:checked"), function(){            
                    arr.push($(this).val());
            });
            // console.log(arr);
            // checkid = $('input[name="check[]"]').val();
            checkid = '109';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), '_method': 'patch'
                    // 'X-HTTP-Method-Override': 'PATCH'
                }
            });
            $.ajax({
                    type: 'POST',
                    
                    url: "{{ route('bulk_sms') }}",
                    data: {
                        checkid,
                        arr
                    },
                    success: function(data) {
                        $('.resp').html(data);
                    
                        // console.log(data);
                    },error:function(data){ 
                        console.log(data);
                    }
                });
        });

});
    </script>
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
				$('#print-tbl').DataTable( {
					"lengthMenu": [[100, 250, 500, -1], [100, 250, 500, "All"]]
			    } );
    });



</script>
@endsection