@extends('inc.app')
@section('content')

@php
    $tot = App\Patient::count();
    $rep_sub = App\Patient::where('result', 'N')->orWhere('result', 'P')->count();
@endphp
        <style>
            .btn.btn-app.btn-sm{
                width: 225px !important;
            }
        </style>
       <!-- Content -->
       <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-xs-12 col-sm-12">

                    <div class="center">
                        <span class="btn btn-app btn-sm btn-light no-hover">
                            <span class="line-height-1 bigger-170 blue"> {{ $tot }} </span>

                            <br>
                            <span class="line-height-1 smaller-90"> Patients </span>
                        </span>

                        <span class="btn btn-app btn-sm btn-yellow no-hover">
                            <span class="line-height-1 bigger-170"> {{ $rep_sub }} </span>

                            <br>
                            <span class="line-height-1 smaller-90"> Report Submitted </span>
                        </span>

                        <span class="btn btn-app btn-sm btn-pink no-hover">
                            <span class="line-height-1 bigger-170"> 0 </span>

                            <br>
                            <span class="line-height-1 smaller-90"> Message Sent </span>
                        </span>

                        <span class="btn btn-app btn-sm btn-grey no-hover">
                            <span class="line-height-1 bigger-170"> 0 </span>

                            <br>
                            <span class="line-height-1 smaller-90"> Email Sent </span>
                        </span>

                    </div>


            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

@endsection