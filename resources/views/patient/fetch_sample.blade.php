
    <form action="{{ route('patient.update', $parent->id) }}" method="post" enctype="multipart/form-data" style="padding-bottom: 15px;">
        {{ csrf_field() }}
        {{ method_field('PATCH')}}
        
    <div class="row">
        <h6 style="padding-left: 12px">Unique Lab ID: <span class="unique_lab_id">{{ $parent->lab_id }}</span></h6>
    </div>
    <div class="row">
        <h5 class="mdl-h5">Personal Details</h5>
        <div class="col-md-4 col-12">
            <label>Patient's Name <span class="req_red">*</span></label>
            <input type="text" name="patient_name" value="{{ $parent->patient_name }}" class="form-control">
        </div>

        <div class="col-md-2 col-12">
            <label>Patient's Age</label>
            <input type="number" name="patient_age" min="1" max="115" value="{{ $parent->patient_age }}" class="form-control">
        </div>

        <div class="col-md-3 col-12">
            <label>Gender <span class="req_red">*</span></label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio1" class="form-check-label ">
                    <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" {{ $parent->gender == 'male' ? 'checked' : '' }} required>Male
                    </label>
                    <label for="radio2" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input" {{ $parent->gender == 'female' ? 'checked' : '' }}>Female
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <label>DOB</label>
        <input type="date" name="dob" value="{{ $parent->dob }}" class="form-control">
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
            {{-- <input type="text" name="district" value="{{ $parent->email }}" class="form-control"> --}}
            @php
                $lists = App\DistrictLists::orderBy('district_name', 'asc')->get();
                
            @endphp
            <select name="district" class="form-control">
                    <option value="">-----------</option>
                @foreach ($lists as $item)
                    <option value="{{ $item->district_name }}" {{ $item->district_name == $parent->district ? 'selected' : '' }}>{{ ucwords($item->district_name) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-12">
            <label>Municipality</label>
            <input type="text" name="municipality" value="{{ $parent->municipality }}" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Ward</label>
            <select name="ward" class="form-control">
                <option value="1" {{ $parent->ward == 1 ? 'selected' : ''}}>1</option>
                <option value="2" {{ $parent->ward == 2 ? 'selected' : ''}}>2</option>
                <option value="3" {{ $parent->ward == 3 ? 'selected' : ''}}>3</option>
                <option value="4" {{ $parent->ward == 4 ? 'selected' : ''}}>4</option>
                <option value="5" {{ $parent->ward == 5 ? 'selected' : ''}}>5</option>
                <option value="6" {{ $parent->ward == 6 ? 'selected' : ''}}>6</option>
                <option value="7" {{ $parent->ward == 7 ? 'selected' : ''}}>7</option>
                <option value="8" {{ $parent->ward == 8 ? 'selected' : ''}}>8</option>
                <option value="9" {{ $parent->ward == 9 ? 'selected' : ''}}>9</option>
                <option value="10" {{ $parent->ward == 10 ? 'selected' : ''}}>10</option>
            </select>
        </div>
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Patient's Contact Details</h5>

        <div class="col-md-3 col-12">
            <label>Landline</label>
            <input type="text" name="landline" value="{{ $parent->landline }}" class="form-control">
        </div>

        <div class="col-md-3 col-12">
            <label>Mobile <span class="req_red">*</span></label>
            <input type="text" name="phone" value="{{ $parent->phone }}" title="Mobile should be 10 Digits" pattern="[1-9]{1}[0-9]{9}" class="form-control" required>
        </div>
        <div class="col-md-6 col-12">
            <label>Email <span class="req_red">*</span></label>
            <input type="text" name="email" value="{{ $parent->email }}" class="form-control">
        </div>
        
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Specimen Details</h5>

        <div class="col-md-3 col-12">
            <label>Specimen</label>
            <select name="specimen" class="form-control">
                <option value="Nasopharyngeal" {{ $parent->specimen == 'Nasopharyngeal' ? 'selected' : '' }}>Nasopharyngeal</option>
                <option value="Oropharyngeal" {{ $parent->specimen == 'Oropharyngeal' ? 'selected' : '' }}>Oropharyngeal (Throat)</option>
                <option value="Sputum" {{ $parent->specimen == 'Sputum' ? 'selected' : '' }}>Sputum</option>
                <option value="Endotracheal Aspirate" {{ $parent->specimen == 'Endotracheal Aspirate' ? 'selected' : '' }}>Endotracheal Aspirate</option>
                <option value="Bronchoiolaveolar" {{ $parent->specimen == 'Bronchoiolaveolar' ? 'selected' : '' }}>Bronchoiolaveolar</option>
                <option value="Others" {{ $parent->specimen == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>

        <div class="col-md-3 col-12">
            <label>Specimen Collection Site</label>
            <input type="text" name="specimen_coll_site" value="{{ $parent->specimen_coll_site }}" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Specimen Collection Date</label>
            <input type="date" name="specimen_coll_date" value="{{ $parent->specimen_coll_date }}" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Specimen Collection Time</label>
            <input type="datetime-local" name="specimen_coll_time" value="{{ $parent->specimen_coll_time }}" class="form-control">
        </div>
        <div class="col-md-3 col-12" style="margin-top: 8px;">
            <label>Reporting Time</label>
            <input type="date" name="reporting_time" value="{{ $parent->reporting_time }}" class="form-control">
        </div>
    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">Symptoms Details</h5>

        <div class="col-md-4 col-12">
            <label>Symptoms</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio5" class="form-check-label ">
                    <input type="radio" id="radio5" name="symptoms" value="ili" class="form-check-input" {{ $parent->symptoms == 'ili' ? 'checked' : '' }} >ILI
                    </label>
                    <label for="radio6" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio6" name="symptoms" value="fever" class="form-check-input" {{ $parent->symptoms == 'fever' ? 'checked' : '' }}>Fever
                    </label>
                    <label for="radio7" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio7" name="symptoms" value="cough" class="form-check-input" {{ $parent->symptoms == 'cough' ? 'checked' : '' }}>Cough
                    </label>
                    <label for="radio8" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio8" name="symptoms" value="sari" class="form-check-input" {{ $parent->symptoms == 'sari' ? 'checked' : '' }}>SARI
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <label>Co Morbidity</label>
            <input type="text" name="mornidity" value="{{ $parent->morbidity }}" class="form-control">
        </div>
        <div class="col-md-2 col-12">
            <label>Temperature (°F)</label>
            <input type="number" name="temperature" value="{{ $parent->temperature }}" class="form-control">
        </div>
        <div class="col-md-3 col-12">
            <label>Sputum</label>
            <select name="sputum" class="form-control">
                <option value="1" {{ $parent->sputum == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ $parent->sputum == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>

        @if($parent->symptoms_if_any)
        <div class="col-md-12 col-12" style="margin: 12px 0;">
            <label>Additional Symptoms (if any)</label>
            <textarea rows="2" cols="50">{{ $parent->symptoms_if_any }}</textarea>
        </div>
        @endif

    </div>

    <div class="row" style="padding-top: 12px;">
        <h5 class="mdl-h5">History Details</h5>

        <div class="col-md-3 col-12">
            <label>Travel History (Last 14 Days)</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio9" class="form-check-label ">
                    <input type="radio" id="radio9" name="travel_history" value="1" class="form-check-input" {{ $parent->travel_history == '1' ? 'checked' : '' }} >Yes
                    </label>
                    <label for="radio10" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio10" name="travel_history" value="0" class="form-check-input" {{ $parent->travel_history == '0' ? 'checked' : '' }}>No
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <label>Country Visited By You (if yes)</label>
            
            @php
                $country = App\DistrictLists::getCountries();
                // dd($country);
            @endphp
            <select name="country_visited" class="form-control">
            @foreach ($country as $val)
                <option>{{ $val }}</option>
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
                    <input type="radio" id="radio11" name="close_contact" value="1" class="form-check-input" {{ $parent->close_contact == '1' ? 'checked' : '' }} >Yes
                    </label>
                    <label for="radio12" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio12" name="close_contact" value="0" class="form-check-input" {{ $parent->close_contact == '0' ? 'checked' : '' }}>No
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <label>Is Patient admitted in isolation ward/unit in hospital?</label>
            <div class="form-check">
                <div class="radio">
                    <label for="radio13" class="form-check-label ">
                    <input type="radio" id="radio13" name="admit_isolation_ward" value="1" class="form-check-input" {{ $parent->admit_isolation_ward == '1' ? 'checked' : '' }} >Yes
                    </label>
                    <label for="radio14" class="form-check-label" style="margin-left: 8px;">
                        <input type="radio" id="radio14" name="admit_isolation_ward" value="0" class="form-check-input" {{ $parent->admit_isolation_ward == '0' ? 'checked' : '' }}>No
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 12px 0 0 12px;">
        <input type="submit" class="btn btn-info btn-sm" value="Update Record">
    </div>
        


    </form>


