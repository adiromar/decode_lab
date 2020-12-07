<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;
use Image;
use Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Patients Information';

        $user_id = Auth::user()->id;

        if(Auth::user()->roles()->first()->role == 'User'):
            $patient = Patient::where('user_id', $user_id)->get();
        else:
            $patient = Patient::get();
        endif;
        

        return view('patient.index', compact('title','patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Patients Information';
        $patient = Patient::get();

        return view('patient.create', compact('title','patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validateWith([
            'patient_name' => 'required',
            'gender' => 'required'
        ]);
        
        $config = [
            'table' => 'patients',
            'field' => 'lab_id',
            'length' => 10,
            'prefix' => 'DG-A'
        ];
        
        // now use it
        $lab_id = IdGenerator::generate($config);

        // $lab_id = 'INX-100009';
        // output: 160001

        $pat = new Patient;

        $pat->lab_id = ( string ) $lab_id;
        $pat->patient_name = $request->patient_name;
        $pat->patient_age = $request->patient_age;
        $pat->gender = $request->gender;
        $pat->phone = $request->phone;
        $pat->email = $request->email;
        $pat->province = $request->province;
        $pat->district = $request->district;
        $pat->municipality = $request->municipality;
        $pat->ward = $request->ward;

        $pat->refering_physician = $request->refering_physician;
        $pat->specimen = $request->specimen;
        $pat->specimen_coll_site = $request->specimen_coll_site;
        $pat->specimen_coll_date = $request->specimen_coll_date;
        $pat->specimen_coll_time = $request->specimen_coll_time;
        $pat->reporting_date = $request->reporting_date;
        $pat->reporting_time = $request->reporting_time;

        $pat->morbidity = $request->morbidity;
        $pat->temperature = $request->temperature;
        $pat->sputum = $request->sputum;
        $pat->symptoms_if_any = $request->symptoms_if_any;
        $pat->travel_history = $request->travel_history;
        $pat->country_visited = $request->country_visited;
        $pat->close_contact = $request->close_contact;
        $pat->admit_isolation_ward = $request->admit_isolation_ward;

        $pat->user_id = Auth::user()->id;

        $pat->save();

        Session::flash('success', 'Succesfully created Patient Information.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findorfail($id);
        
        $title = 'Edit Patients Information';
        return view('patient.edit', compact('title','patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateWith([
            'patient_name' => 'required',
            'gender' => 'required'
        ]);

        $pat = Patient::findOrFail($id);

        // $pat->lab_id = $request->lab_id;
        $pat->patient_name = $request->patient_name;
        $pat->patient_age = $request->patient_age;
        $pat->gender = $request->gender;
        $pat->phone = $request->phone;
        $pat->email = $request->email;
        $pat->province = $request->province;
        $pat->district = $request->district;
        $pat->municipality = $request->municipality;
        $pat->ward = $request->ward;
        
        // $pat->result = $request->result;
        // $pat->e_gene = $request->e_gene;
        // $pat->n_gene = $request->n_gene;
        // $pat->orf_lb = $request->orf_lb;
        
        $pat->refering_physician = $request->refering_physician;
        $pat->specimen = $request->specimen;
        $pat->specimen_coll_site = $request->specimen_coll_site;
        $pat->specimen_coll_date = $request->specimen_coll_date;
        $pat->specimen_coll_time = $request->specimen_coll_time;
        $pat->reporting_date = $request->reporting_date;
        $pat->reporting_time = $request->reporting_time;
        $pat->save();

        Session::flash('success', 'Succesfully Updated Patient Information.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        Session::flash('success', 'Succesfully Removed Patient Information.');

        return redirect()->back();
    }

    public function fetch_report_collection(Request $request){
        // dd($request);
        $id = $request->cat_id;
        $parent = Patient::where('id', $id)->first();

        $html = view('report.fetch_report')->with(compact('parent'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function update_report(Request $request, $id){
        
        $pat = Patient::findOrFail($id);

        $pat->result = $request->result;
        $pat->e_gene = $request->e_gene;
        $pat->n_gene = $request->n_gene;
        $pat->orf_lb = $request->orf_lb;
        $pat->save();

        Session::flash('success', 'Succesfully Updated Patient Information.');
        return redirect()->route('show_report');
    }
}
