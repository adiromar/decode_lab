<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;
use Auth;
use PDF;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = 'Dashboard | Decode Lab';
        $patient = Patient::get();
        $p_count = $patient->count();
        $data['p_count'] = $p_count;
        
        return view('admin.index', compact('title','patient','data'));
    }

    

    public function fetch_sample_collection(Request $request){
        // dd($request);
        $id = $request->cat_id;
        $parent = Patient::where('id', $id)->first();

        $html = view('patient.fetch_sample')->with(compact('parent'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function fetch_patient_record($id){
        $sample = Patient::where('id', $id)->get();
        return $sample;
    }
}
