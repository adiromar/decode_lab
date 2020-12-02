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
                                        <form action="{{ route('patient.update', $patient->id) }}" method="post" enctype="multipart/form-data" class="">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH')}}

                                            <div class="form-horizontal">

                                                {{-- new --}}

                                                {{-- olf --}}
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Lab Id</label>
                                                            <input type="text" name="lab_id" value="{{ $patient->lab_id }}" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Patient Name</label>
                                                                <input type="text" name="patient_name" class="input-sm" value="{{ $patient->patient_name }}" >
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Patient's Age</label>
                                                                <input type="number" name="patient_age" value="{{ $patient->patient_age }}" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Gender </label>
                                                                <div class="form-check">
                                                                    <div class="radio">
                                                                        <label for="radio1" class="form-check-label ">
                                                                            <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" {{ $patient->gender == 'male' ? 'checked' : '' }}>Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label for="radio2" class="form-check-label ">
                                                                            <input type="radio" id="radio2" name="gender" value="female" class="form-check-input" {{ $patient->gender == 'female' ? 'checked' : '' }}>Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                                <input type="text" name="phone" value="{{ $patient->phone }}" class="input-sm">
                                                            </div>

                                                            

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <input type="text" name="email" class="input-sm" value="{{ $patient->email }}">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Address</label>
                                                                <input type="text" name="address" value="{{ $patient->address }}" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Refering Physician</label>
                                                                <input type="text" name="refering_physician" value="{{ $patient->refering_physician }}" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Specimen</label>
                                                                <input type="text" name="specimen" value="{{ $patient->specimen }}" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Site</label>
                                                                <input type="text" name="specimen_coll_site" value="{{ $patient->specimen_coll_site }}" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Date</label>
                                                                <input type="date" name="specimen_coll_date" value="{{ $patient->specimen_coll_date }}" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Time</label>
                                                                <input type="datetime-local" name="specimen_coll_time" value="{{ $patient->specimen_coll_time }}" class="input-sm">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Reporting Date</label>
                                                                <input type="date" name="reporting_date" class="input-sm" value="{{ $patient->reporting_date }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>COVID-19 Result <span class="req_red">*</span></label>
                                                                <select name="result" class="input-sm" required>
                                                                    <option>-</option>
                                                                    <option value="N" {{ $patient->result == 'N' ? 'selected' : '' }}>NEGATIVE</option>
                                                                    <option value="P" {{ $patient->result == 'P' ? 'selected' : '' }}>POSITIVE</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>E-GENE</label>
                                                                <input type="text" name="e_gene" value="{{ $patient->e_gene }}" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>N-GENE</label>
                                                                <input type="text" name="n_gene" value="{{ $patient->n_gene }}" class="input-sm">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>ORF Lab</label>
                                                                <input type="text" name="orf_lb" value="{{ $patient->orf_lb }}" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row pb-4">
                                                    <div class="col-md-10 col-12">
                                                        <input type="submit" class="btn btn-primary btn-sm ml-2" value="Update Record">
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
          </div>
@endsection

