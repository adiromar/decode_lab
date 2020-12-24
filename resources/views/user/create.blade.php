@extends('inc.app')

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

                        @include('errors.errors')

                        <div class="widget-box">
                            <div class="table-header">
                                {{ $title }}
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <form action="{{ route('create_user') }}" method="post" enctype="multipart/form-data" class="">
                                        {{ csrf_field() }}

                                        <div class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col-md-2 col-12">
                                                    <h5>Full Name <span class="req_red">*</span></h5>
                                                    <input type="text" name="full_name" placeholder="Full Name" class="input-sm" required>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h5>Email <span class="req_red">*</span></h5>
                                                    <input type="text" name="email" class="input-sm" placeholder="E-mail" required>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h5>Password<span class="req_red">*</span></h5>
                                                    <input type="password" name="password" class="input-sm" placeholder="Password" required>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h5>Confirm Password<span class="req_red">*</span></h5>
                                                    <input type="password" name="password_confirmation" class="input-sm" placeholder="Confirm Password" required>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h5>Gender</h5>
                                                    <select class="input-md" name="gender">
                                                        <option value="male" >Male</option>
                                                        <OPTION value="female" >Female</OPTION>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h5>User Role <span class="req_red">*</span></h5>
                                                    <select class="input-md" name="user_role" required>
                                                        <option value="5" >Form User</option>
                                                        <option value="4" >Lab User</option>
                                                        <option value="3" >Normal User</option>
                                                        <OPTION value="2" >Admin</OPTION>
                                                    </select>
                                                </div>

                                                <div class="col-md-2 col-12">
                                                    <h5>Suspend </h5>
                                                    <select class="input-md" name="suspend">
                                                        <OPTION value="1">Yes</OPTION>
                                                        <OPTION value="0" selected>No</OPTION>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="row pb-4">
                                                <div class="col-md-10 col-12">
                                                    <input type="submit" class="btn btn-primary btn-sm ml-2" value="Create New User">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>


        
                    
                    </div>
                </div>
            </div>
          </div>
@endsection

