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
                <table id="patient-tbl" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Lab ID</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Covid-19 Result</th>
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
                            <td>
                            {{-- <a href="{{ route('patient.edit', $pat->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> --}}
                                {{-- <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                                <a href="{{ route('print_pdf', $pat->id) }}" target="_blank" class="btn btn-secondary btn-sm">Print PDF</a>
                                <a href="{{ route('down_pdf', $pat->id) }}" class="btn btn-warning btn-sm">Download PDF</a>

                                {{-- <form action="{{route('patient.destroy', $pat->id)}}" onclick="event.preventDefault();
                                    var r=confirm('Are you sure you want to delete this item?');
                                    if(r== true){ this.submit(); }" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <input type="submit" class="btn btn-danger btn-sm mt-2" value="Delete">
                                    </form> --}}
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