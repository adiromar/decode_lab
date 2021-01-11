@extends('inc.app')
@section('content')

@php
    $tot = App\Patient::count();
    $rep_sub = App\Patient::whereNotNull('result')->count();
    $mail = DB::table('sent_mail_details')->sum('sent_mail_details.mail_sent');
    $sms = DB::table('sent_sms_details')->sum('sent_sms_details.sms_sent');
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
                            <span class="line-height-1 bigger-170"> {{ $sms }} </span>

                            <br>
                            <span class="line-height-1 smaller-90"> Message Sent </span>
                        </span>

                        <span class="btn btn-app btn-sm btn-grey no-hover">
                            <span class="line-height-1 bigger-170"> {{ $mail }}</span>

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