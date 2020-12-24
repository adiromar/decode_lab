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
                            <th>Result</th>

                            <th>E-Gene</th>
                            <th>N-gene</th>
                            <th>ORF Lab</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1; 
                        // dd($patient);
                        @endphp
                        @foreach ($patient as $pat)
                        <tr class="report-show">
                            <td>{{ $k }}</td>
                            <td>{{ $pat->lab_id }}</td>
                            <td>{{ $pat->patient_name }}</td>
                            <td>{{ $pat->patient_age }}</td>
                            <td>{{ $pat->gender }}</td>
                            <td>{{ $pat->phone }}</td>

                            <td class="res_1"><?php if($pat->result == 'N' ):
                                echo '<span class="label label-sm label-danger">Negative</span>';
                            elseif($pat->result == 'P'):
                            echo '<span class="label label-sm label-success">POSITIVE</span>';
                            else:
                                echo '-';
                            endif;
                            ?></td>
                            {{-- <td>{{ $pat->created_at }}</td> --}}
                            <td>
                                <select class="input-sm result sel_res" id="sel_res">
                                    <option value="" {{ $pat->result == '' ? 'selected' : ''}}>-</option>  
                                    <option value="N" {{ $pat->result == 'N' ? 'selected' : ''}}>NEGATIVE</option>  
                                    <option value="P" {{ $pat->result == 'P' ? 'selected' : ''}}>POSITIVE</option> 
                                      
                                </select></td>
                            <td><input type="text" class="input-sm e_gene" value="{{ $pat->e_gene }}" placeholder="E-GENE"></td>
                            <td><input type="text" class="input-sm n_gene" placeholder="N-GENE" value="{{ $pat->n_gene}}"></td>
                            <td><input type="text" class="input-sm orf_lab" placeholder="ORF Lab" value="{{ $pat->orf_lb}}"></td>

                            <td>
                            {{-- <a href="{{ route('patient.edit', $pat->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> --}}
                            {{-- <a href="#" class="btn btn-primary btn-sm report_modal" data-id="{{ $pat->id }}">Update Report</a> --}}
                            
                            <a href="#" class="btn btn-success btn-sm uid row_update1" onclick="editUserInfo(this, {{ $pat->id }})")" data-id="{{ $pat->id }}">Update Report</a>
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
    {{-- <div class="resp">Res: </div> --}}
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
        $(document).ready(function(){
    // $('#sel_res').on('change', function() {
        $('.sel_res').change(function(e) {
            // alert(this.value);
      if ( this.value == 'N'){

        $(this).parents('.report-show').find('input.e_gene').prop("disabled", "disabled");
        $(this).parents('.report-show').find('input.n_gene').prop("disabled", "disabled");
        $(this).parents('.report-show').find('input.orf_lab').prop("disabled", "disabled");

      }else{
        $(this).parents('.report-show').find('input.e_gene').prop("disabled", false);
        $(this).parents('.report-show').find('input.n_gene').prop("disabled", false);
        $(this).parents('.report-show').find('input.orf_lab').prop("disabled", false);
      }
    });
});

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

            


    $('.row_update').click(function(e) {
        e.preventDefault();

        // $('#loader').show();
        // let cat_id = $(this).data('id');
        // let result = $('#result').val();
        // let e_gene = $('#e_gene').val();
        // let n_gene = $('#n_gene').val();
        // let orf_lab = $('#orf_lab').val();
        var result = $(this).parent().find('.result').val();
        var e_gene = $(this).parent().find('.e_gene').val();
        // n_gene = $(this).siblings('.n_gene:first').val();
        // orf_lab = $(this).siblings('.orf_lab:first').val();
        alert(e_gene);
        console.log(e_gene);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $.ajax({
        //     type: 'POST',
        //     url: '{{ route("fetch_report") }}',
        //     data: {
        //         cat_id,
        //     },
        //     success: function(data) {
        //         // console.log(data);
        //         // $('#loader').hide();
                
        //         $('.report_response').html(data.html);
                
        //     },error:function(data){ 
        //         console.log(data);
        //         console.log('error');
        //     }
        // });

        });
});

        function editUserInfo(el, id) {
            cat_id = $(el).parents('.report-show').find('.uid').data('id');
            res = $(el).parents('.report-show').find('select.result').val();
            e_gene = $(el).parents('.report-show').find('input.e_gene').val();
            n_gene = $(el).parents('.report-show').find('input.n_gene').val();
            orf_lab = $(el).parents('.report-show').find('input.orf_lab').val();

            // appending class
            mainrow = $(el).parents('.report-show');
            res_1 = $(el).parents('.report-show').find('.res_1');
            res_val = $(el).parents('.report-show').find('select.result');
            e_gene_val = $(el).parents('.report-show').find('input.e_gene');
            n_gene_val = $(el).parents('.report-show').find('input.n_gene');
            orf = $(el).parents('.report-show').find('input.orf_lab');
            // newrow = $(el).parents('.report-show').find('.uid').data('id');
            // console.log(input_element.attr('id'));
            // console.log(input_element.val());
            // alert(cat_id);alert(e_gene);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), '_method': 'patch'
                    // 'X-HTTP-Method-Override': 'PATCH'
                }
            });
            $.ajax({
                    type: 'POST',
                    
                    url: 'http://localhost:8000/admin/updateSample/'+cat_id+'/report',
                    data: {
                        cat_id,
                        res,
                        e_gene,
                        n_gene,
                        orf_lab
                    },
                    success: function(data) {
                        $('.resp').html(data);
                    
                        console.log(data);

                        if(data.result == 'P'){
                            res_show = '<span class="label label-sm label-success">POSITIVE</span>';
                        }else if(data.result == 'N'){
                            res_show = '<span class="label label-sm label-danger">NEGATIVE</span>';
                        }else{
                            res_show = '<span class="label label-sm label-success"></span>';
                        }

                        $( res_1 ).html( res_show );
                        $( res_val ).attr( 'value', data.result );
                        // $( e_gene_val ).val( data.e_gene );
                        // $( e_gene_val ).val( data.e_gene );
                        $( e_gene_val ).attr('value', data.e_gene);
                        $( n_gene_val ).attr('value', data.n_gene);
                        $( orf ).attr('value', data.orf_lb);
                        $( mainrow ).css('background-color', '#a4dda4').animate({opacity: 1}, 2000);
                        setTimeout(function(){
                                $(mainrow).remove();
                            }, 5000)

                    },error:function(data){ 
                        // console.log(data);
                    }
                });
        }

        jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#show-tbl').DataTable( {
					"lengthMenu": [[100, 250, 500, -1], [100, 250, 500, "All"]]
			    } );
    });

    

    </script>
@endsection