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
                <div class="main-content">
                   

                    <div class="row pt-3">
                        <div class="col-md-12 col-12">
                            <div class="widget-box">
                                <div class="table-header">
                                    {{ $title }}
                                </div>
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" class="">
                                            {{ csrf_field() }}

                                            <div class="form-horizontal">
                                                {{-- updated --}}
                                                <div class="row form-group">
                                                    {{-- <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Lab Id</h5>
                                                        <input type="text" name="lab_id" class="input-sm">
                                                    </div> --}}

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Patient's Name <span class="req_red">*</span></h5>
                                                        <input type="text" name="patient_name" class="form-control" placeholder="Full Name" required>
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Patient's Age<span class="req_red">*</span></h5>
                                                        <input type="number" name="patient_age" min="1" max="112" class="form-control">
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Gender <span class="req_red">*</span></h5>
                                                            <div class="form-check">
                                                                <div class="radio">
                                                                    <label for="radio1" class="form-check-label ">
                                                                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" required>Male
                                                                    </label>
                                                                    <label for="radio2" class="form-check-label" style="margin-left: 8px;">
                                                                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                                                                    </label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Phone No. <span class="req_red">*</span></h5>
                                                        <input type="text" name="phone" class="form-control" title="Mobile should be 10 Digits" pattern="[1-9]{1}[0-9]{9}" required>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Email. <span class="req_red">*</span></h5>
                                                        <input type="text" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Address <span class="req_red">*</span></h5>
                                                        <input type="text" name="address" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Refering Physician<span class="req_red">*</span></h5>
                                                        <input type="text" name="refering_physician" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Specimen</h5>
                                                        {{-- <input type="text" name="specimen" class="form-control" > --}}
                                                        <select name="specimen" class="input-sm">
                                                            <option value="Nasopharyngeal">Nasopharyngeal</option>
                                                            <option value="Oropharyngeal">Oropharyngeal (Throat)</option>
                                                            <option value="Sputum">Sputum</option>
                                                            <option value="Endotracheal Aspirate">Endotracheal Aspirate</option>
                                                            <option value="Bronchoiolaveolar">Bronchoiolaveolar</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Specimen Collection Site </h5>
                                                        <input type="text" name="specimen_coll_site" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Specimen Collection Date </h5>
                                                        <input type="date" name="specimen_coll_date" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Specimen Collection Time </h5>
                                                        <input type="datetime-local" name="specimen_coll_time" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Reporting Date</h5>
                                                        <input type="date" name="reporting_date" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Symptoms</h5> 
                                                        <select multiple name="symptoms" class="form-control sel-sm chosen-select" id="form-field-select-4">
                                                            <option value="ili">ILI</option>
                                                            <option value="fever">Fever</option>
                                                            <option value="cough">Cough</option>
                                                            <option value="sari">SARI</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Co Morbidity</h5>
                                                        <input type="text" name="morbidity" class="form-control">
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h6>Temperature Recorded (°F)</h6>
                                                        <input type="number" name="temperature" min="32" max="212"class="form-control">
                                                    </div>

                                                    <div class="col-md-2 col-sm-2 col-12">
                                                        <h5>Sputum</h5>
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio3" class="form-check-label ">
                                                                    <input type="radio" id="radio3" name="sputum" value="1" class="form-check-input" required>Yes
                                                                </label>
                                                                <label for="radio4" class="form-check-label" style="margin-left: 8px;">
                                                                    <input type="radio" id="radio4" name="sputum" value="0" class="form-check-input">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <h5>Additional Symptoms (if any)</h5>
                                                        <textarea name="symptoms_if_any" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <h5>Travel History in Last 14 Days</h5>
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio5" class="form-check-label ">
                                                                    <input type="radio" id="radio5" name="travel_history" value="1" class="form-check-input" required>Yes
                                                                </label>
                                                                <label for="radio6" class="form-check-label" style="margin-left: 8px;">
                                                                    <input type="radio" id="radio6" name="travel_history" value="0" class="form-check-input">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <h5>Country Visited By You (if yes)</h5>
                                                        <input type="text" name="country_visited" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <h5>H/O close contact with Positive COVID-19 Patint ?</h5>
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio7" class="form-check-label ">
                                                                    <input type="radio" id="radio7" name="close_contact" value="1" class="form-check-input" required>Yes
                                                                </label>
                                                                <label for="radio8" class="form-check-label" style="margin-left: 8px;">
                                                                    <input type="radio" id="radio8" name="close_contact" value="0" class="form-check-input">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <h5>Is Patient Admitted in Isolation Ward/Unit in hospital ?</h5>
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio9" class="form-check-label ">
                                                                    <input type="radio" id="radio9" name="admit_isolation_ward" value="1" class="form-check-input" required>Yes
                                                                </label>
                                                                <label for="radio10" class="form-check-label" style="margin-left: 8px;">
                                                                    <input type="radio" id="radio10" name="admit_isolation_ward" value="0" class="form-check-input">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-10 col-12">
                                                        <input type="submit" class="btn btn-primary btn-sm ml-2" value="Submit">
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

                {{-- <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Patient Database</strong> Form
                            </div>
                            <div class="card-body card-block">
                            
                            @include('errors.errors')

                            <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lab ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="lab_id" placeholder="Lab Id" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="patient_name" placeholder="Full Name" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Age</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="password-input" name="patient_age" class="form-control">
                                            
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
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="password-input" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group pb-3">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="address" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group pt-3">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Refering Physician</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="refering_physician" placeholder="Refering Physician" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen"  class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Site</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen_coll_site"  class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="specimen_coll_date"  class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="specimen_coll_time" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="reporting_date" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="reporting_time" class="form-control">
                                            
                                        </div>
                                    </div>

                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>  --}}

            </div>
          </div>
@endsection

