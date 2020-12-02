@extends('inc.app')


@section('content')
     <!-- Breadcrumbs-->
     <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                                <li class="active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.breadcrumbs-->

    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $title }}</strong>
                        </div>

                        <div class="card-body card-block">
                            <form action="{{ route('patient.update', $patient->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lab ID</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="lab_id" value="{{ $patient->lab_id }}" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="patient_name" value="{{ $patient->patient_name }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Age</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="password-input" name="patient_age" class="form-control" value="{{ $patient->patient_age }}">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" <?php echo ($patient->gender =='male') ? 'checked':'' ?>>Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input" <?php echo ($patient->gender =='female') ? 'checked':'' ?>>Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Phone</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="phone" value="{{ $patient->phone }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Result</label></div>
                                        <div class="col-12 col-md-9">
                                            {{-- <input type="text" id="password-input" name="result" value="{{ $patient->result }}" class="form-control"> --}}
                                            <select class="form-control" name="result">
                                                <option value="0" {{ $patient->result == 0 ? 'selected' : ''}}>NEGATIVE</option>
                                                <OPTION value="1" {{ $patient->result == 1 ? 'selected' : ''}}>POSITIVE</OPTION>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">E-GENE</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="e_gene" value="{{ $patient->e_gene }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">N-GENE</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="n_gene" value="{{ $patient->n_gene }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">ORF LB</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="orf_lb" value="{{ $patient->orf_lb }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    
                                    {{-- <div class="row"> --}}
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    {{-- </div> --}}
                                </form>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection