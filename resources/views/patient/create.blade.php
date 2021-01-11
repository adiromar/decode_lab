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

                                        @include('errors.errors')
                                        
    <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" id="patient_form" style="padding-bottom: 15px;">
        {{ csrf_field() }}
        
    <div class="row">
        <h5 class="mdl-h5">Test Option</h5>
        <div class="col-md-3 col-12 col-offset-8">
            <label>Test Option </label>
            
            <select name="test_option" class="form-control">
                <option value="">--Select--</option>
                <option value="covid">COVID-19</option>
                <option value="fever">Fever</option>
                <option value="tb">TB</option>
                <option value="hiv">HIV</option>
            </select>
        </div>
    </div>

    <div class="row">

        <h5 class="mdl-h5">Personal Details</h5>
        <div class="col-md-4 col-12">
            <label>Patient's Name <span class="req_red">*</span></label>
            <input type="text" name="patient_name" placeholder="Full Name" class="form-control">
        </div>

        <div class="col-md-2 col-12">
            <label>Patient's Age</label>
            <input type="number" name="patient_age" min="1" max="115"  class="form-control" required>
        </div>

        <div class="col-md-1 col-12">
            <label>Year/Month</label>
            <select name="year_or_month" class="form-control">
                <option value="Y">Year</option>
                <option value="M">Month</option>
                <option value="D">Days</option>
            </select>
        </div>

        <div class="col-md-3 col-12">
            <label>Gender <span class="req_red">*</span></label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio1" class="form-check-label ">
                    <input type="radio" id="radio1" name="gender" value="male" class="form-check-input"  required>Male
                    </label>
                    <label for="radio2" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                    </label>
                    <label for="radio2" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio22" name="gender" value="other" class="form-check-input">Other
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-12">
            <label>DOB</label>
        <input type="date" name="dob" class="form-control">
        </div>
    </div>


    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Patient's Current Address</h5>

        <div class="col-md-3 col-12">
            <label>Province</label>
            <select name="province" class="form-control">
                <option value="1">Province 1</option>
                <option value="2">Province 2</option>
                <option value="3">Province 3</option>
                <option value="4">Province 4</option>
                <option value="5">Province 5</option>
                <option value="6">Province 6</option>
                <option value="7">Province 7</option>
            </select>
        </div>

        <div class="col-md-3 col-12">
            <label>District <span class="req_red">*</span></label>

            @php
                $lists = App\DistrictLists::orderBy('district_name', 'asc')->get();
                
            @endphp
            <select name="district" class="form-control">
                    <option value="">-----------</option>
                @foreach ($lists as $item)
                    <option value="{{ $item->district_name }}" >{{ ucwords($item->district_name) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-12">
            <label>Municipality</label>
            <input type="text" name="municipality" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Ward</label>
            <select name="ward" class="form-control">
                    <option value="">Select Ward</option>
                @for ($i = 1; $i <= 35; $i++)
                    <option value="{{ $i }}" >{{ $i }}</option>
                @endfor
            </select>
        </div>
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Patient's Contact Details</h5>

        <div class="col-md-3 col-12">
            <label>Landline</label>
            <input type="text" name="landline" class="form-control">
        </div>

        <div class="col-md-3 col-12">
            <label>Mobile <span class="req_red">*</span></label>
            <input type="text" name="phone" title="Mobile should be 10 Digits" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Phone No." required>
        </div>
        <div class="col-md-3 col-12">
            <label>Email </label>
            <input type="text" name="email" placeholder="E-mail" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Passport No.</label>
            <input type="text" name="passport" class="form-control">
        </div>

        <div class="col-md-12 col-12">
            <a href="#" id="add_email">+ Additional E-mail</a>
        </div>

        <div class="col-md-3 col-12" style="display: none;" id="show-email-1">
            <label>Email 1</label>
            <input type="text" name="email_1" class="form-control">
        </div>
        <div class="col-md-3 col-12" style="display: none;" id="show-email-2">
            <label>Email 2</label>
            <input type="text" name="email_2" class="form-control">
        </div>
        
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Specimen Details</h5>

        <div class="col-md-4 col-12">
            <label>Specimen</label>
            <select name="specimen" class="form-control">
                <option value="">---Select Specimen---</option>
                <option value="Naso / Oropharyngeal" >Naso / Oropharyngeal</option>
                <option value="Oropharyngeal" >Oropharyngeal (Throat)</option>
                <option value="Sputum" >Sputum</option>
                <option value="Endotracheal Aspirate" >Endotracheal Aspirate</option>
                <option value="Bronchoiolaveolar" >Bronchoiolaveolar</option>
                <option value="Others" >Others</option>
            </select>
        </div>

        <div class="col-md-4 col-12">
            <label>Specimen Collection Site</label>
            <input type="text" name="specimen_coll_site"  class="form-control">
        </div>
        {{-- <div class="col-md-3 col-12">
            <label>Specimen Collection Date</label>
            <input type="date" name="specimen_coll_date"  class="form-control">
        </div> --}}
        <div class="col-md-4 col-12">
            <label>Specimen Collection Date & Time</label>
            <input type="datetime-local" name="specimen_coll_time"  class="form-control">
        </div>
        {{-- <div class="col-md-3 col-12" style="margin-top: 8px;">
            <label>Reporting Time</label>
            <input type="date" name="reporting_time"  class="form-control">
        </div> --}}
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Symptoms Details</h5>

        <div class="col-md-4 col-12">
            <label>Symptoms</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio5" class="form-check-label ">
                    <input type="radio" id="radio5" name="symptoms" value="ili" class="form-check-input"  >ILI
                    </label>
                    <label for="radio6" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio6" name="symptoms" value="fever" class="form-check-input" >Fever
                    </label>
                    <label for="radio7" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio7" name="symptoms" value="cough" class="form-check-input" >Cough
                    </label>
                    <label for="radio8" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio8" name="symptoms" value="sari" class="form-check-input" >SARI
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <label>Co Morbidity</label>
            <input type="text" name="mornidity"  class="form-control">
        </div>
        <div class="col-md-2 col-12">
            <label>Temperature (°F)</label>
            <input type="number" name="temperature" min="96" max="108" step="0.1" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Sputum</label>
            <select name="sputum" class="form-control">
                <option value="">Select Sputum</option>
                <option value="1" >Yes</option>
                <option value="0" >No</option>
            </select>
        </div>

        <div class="col-md-12 col-12" style="margin: 12px 0;">
            <label>Additional Symptoms (if any)</label>
            <textarea rows="2" cols="50" name="symptoms_if_any"></textarea>
        </div>


    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">History Details</h5>

        <div class="col-md-3 col-12">
            <label>Travel History (Last 14 Days)</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio9" class="form-check-label ">
                    <input type="radio" id="radio9" name="travel_history" value="1" class="form-check-input"  >Yes
                    </label>
                    <label for="radio10" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio10" name="travel_history" value="0" class="form-check-input" >No
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12 country-div" style="display: none;">
            <label>Country Visited By You (if yes)</label>
            
            @php
                $country = App\DistrictLists::getCountries();
                // dd($country);
            @endphp
            <select name="country_visited" class="form-control">
                <option value="">Select Country</option>
            @foreach ($country as $val)
                <option value="{{ $val }}">{{ $val }}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Contact Tracing</h5>

        <div class="col-md-6 col-12">
            <label>H/O Close contact with Positive COVID-19 Patient</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio11" class="form-check-label ">
                    <input type="radio" id="radio11" name="close_contact" value="1" class="form-check-input"  >Yes
                    </label>
                    <label for="radio12" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio12" name="close_contact" value="0" class="form-check-input" >No
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <label>Is Patient admitted in isolation ward/unit in hospital?</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio13" class="form-check-label ">
                    <input type="radio" id="radio13" name="admit_isolation_ward" value="1" class="form-check-input"  >Yes
                    </label>
                    <label for="radio14" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio14" name="admit_isolation_ward" value="0" class="form-check-input" >No
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Other Info</h5>

        <div class="col-md-3 col-12">
            <label>Reference</label>
            <input type="text" name="reference" class="form-control">
        </div>

        <div class="col-md-3 col-12">
            <label>Remark</label>
            <input type="text" name="remark" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Referred By</label>
            <input type="text" name="refering_physician" class="form-control">
        </div>

    </div>

    <div class="row" style="padding: 12px 0 0 12px;">
        <input type="submit" class="btn btn-primary btn-sm submit_btn" id="submit_btn" value="Insert Record">
    </div>
        


    </form>



                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
          </div>

          <script src="{{ asset('adm/assets/js/jquery-2.1.4.min.js') }}"></script>
          {{-- <script src="{{ asset('adm/assets/js/bootstrap.min.js') }}"></script> --}}
          
          <script>
            $(document).ready(function(){
                $('#add_email').click(function(e) {
                e.preventDefault();
                    $('#show-email-1').fadeIn(" slow ");
                    $('#show-email-2').fadeIn(" slow ");

                });

                $('input:radio[name="travel_history"]').change(function(){
                    if($(this).val() == 1){
                        $('.country-div').fadeIn(" slow ");
                    }else{
                        $('.country-div').fadeOut(" slow ");
                    }
                });
                
                $("#patient_form").submit(function () {
                    $(".submit_btn").attr("disabled", true);
                    return true;
                });

            });
           </script>

@endsection

