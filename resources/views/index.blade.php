@extends('layouts.main')

{{-- @section('head')
    @include('layouts.head')
@endsection --}}

@section('content')
          <!-- Content -->
          <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Patient Database</strong> Form
                            </div>
                            <div class="card-body card-block">
                            <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lab ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="lab_id" placeholder="Lab Id" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="patient_name" placeholder="Full Name" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Age</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="password-input" name="patient_age" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Phone Number</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="phone" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    
                                    {{-- <div class="row"> --}}
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    {{-- </div> --}}
                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
          </div>
@endsection

