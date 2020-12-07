
    <form action="{{ route('update_report', $parent->id) }}" method="post" enctype="multipart/form-data" style="padding-bottom: 15px;">
        {{ csrf_field() }}
        
        <div class="row">
            <h6 style="padding-left: 12px">Unique Lab ID: <span class="unique_lab_id">{{ $parent->lab_id }}</span></h6>
        </div>
        <div class="row">
            <h5 class="mdl-h5">Personal Details</h5>
            <div class="col-md-4 col-12">
                <label>Patient's Name <span class="req_red">*</span></label>
                <input type="text" value="{{ $parent->patient_name }}" class="form-control">
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
                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" {{ $parent->gender == 'male' ? 'checked' : '' }} >Male
                        </label>
                        <label for="radio2" class="form-check-label" style="margin-left: 8px;">
                            <input type="radio" id="radio2" name="gender" value="female" class="form-check-input" {{ $parent->gender == 'female' ? 'checked' : '' }}>Female
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12">
                <label>Phone</label>
            <input type="text" value="{{ $parent->phone }}">
            </div>
        </div>

        <hr>
        <div class="row" style="padding-top: 22px;">
            <div class="col-md-3 col-12">
                <label>Result</label>
                <select name="result" class="form-control" required>
                    <option>-</option>
                    <option value="N" {{ $parent->result == 'N' ? 'selected' : '' }}>NEGATIVE</option>
                    <option value="P" {{ $parent->result == 'P' ? 'selected' : '' }}>POSITIVE</option>
                </select>
            </div>

            <div class="col-md-3 col-12">
                <label>E-GENE</label>
                <input type="text" name="e_gene" value="{{ $parent->e_gene }}">
            </div>

            <div class="col-md-3 col-12">
                <label>N-GENE</label>
                <input type="text" name="n_gene" value="{{ $parent->n_gene }}">
            </div>

            <div class="col-md-3 col-12">
                <label>ORF Lab</label>
                <input type="text" name="orf_lb" value="{{ $parent->orf_lb }}">
            </div>
        </div>
    
    

    
        <div class="row" style="padding: 12px 0 0 12px;">
            <input type="submit" class="btn btn-info btn-sm" value="Update Report">
        </div>
            
    
    
        </form>
    
    
    