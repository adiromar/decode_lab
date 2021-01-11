<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Patient;
use PDF;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Decode Lab & Genomics Research Center";
        $blogs = Blog::latest()->get();

        return view('front.index', compact('title','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login_guest(){
        $title = 'Guest Login';

        return view('front.login_guest', compact('title'));
    }

    public function check_guest_login(Request $request){
        $this->validateWith([
            'username' => 'required',
            'password' => 'required',
        ]);

        $guest = Patient::where('lab_id', $request->username)->where('lab_pw', $request->password)->first();
       
        return view('front.view_guest_report', compact('guest'));
    }

    public function download_link_page($lab_id, $lab_pw){
        $guest = Patient::where('lab_id', $lab_id)->where('lab_pw', $lab_pw)->first();
       
        return view('front.view_guest_report', compact('guest'));
    }
    public function downloadPdf(Request $request, $id){

        $data['patient'] = Patient::find($id);
        $n = $data['patient']->patient_name;
        $n = $n . '-' .date('Y-m-d H:i:s') . '.pdf';

        $pdf = PDF::loadView('report.pdfview', $data);
        return $pdf->download($n);
    }
}
