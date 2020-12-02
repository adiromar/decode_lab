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
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Full Name <span class="req_red">*</span></label>
                                                            <input type="text" name="full_name" placeholder="Full Name" class="input-sm" required>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label>Email <span class="req_red">*</span></label>
                                                            <input type="text" name="email" class="input-sm" placeholder="E-mail" required>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Password<span class="req_red">*</span></label>
                                                            <input type="password" name="password" class="input-sm" placeholder="Password" required>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label>Confirm Password<span class="req_red">*</span></label>
                                                            <input type="password" name="password_confirmation" class="input-sm" placeholder="Confirm Password" required>
                                                        </div>
                                                        

                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-2">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Mobile No.<span class="req_red">*</span></label>
                                                            <input type="text" name="phone" class="input-sm" title="Mobile should be 10 Digits" pattern="[1-9]{1}[0-9]{9}">
                                                        </div>

                                                        

                                                    </div>
                                                </div> --}}

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Mobile No.<span class="req_red">*</span></label>
                                                            <input type="text" name="phone" class="input-sm" title="Mobile should be 10 Digits" pattern="[1-9]{1}[0-9]{9}">
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label>Gender</label> <br>
                                                            <select class="input-sm" name="gender">
                                                                <option value="male" >Male</option>
                                                                <OPTION value="female" >Female</OPTION>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label>User Role <span class="req_red">*</span></label>
                                                            <select class="input-sm" name="user_role" required>
                                                                <option value="3" >User</option>
                                                                <OPTION value="2" >Admin</OPTION>
                                                            </select>
                                                        </div>
                                                    </div>
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

