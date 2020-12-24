<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;
use Image;
use Illuminate\Support\Facades\Mail;
use PDF;
use Auth;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Patient's Report";
        $patient = Patient::where('result', 'N')->orWhere('result', 'P')->get();

        return view('report.index', compact('title','patient'));
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

    public function fetch_report_collection(Request $request){
        // dd($request);
        $id = $request->cat_id;
        $parent = Patient::where('id', $id)->first();

        $html = view('report.fetch_report')->with(compact('parent'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function update_report(Request $request, $id){
        // echo $id;
        // dd($request);
        $pat = Patient::findOrFail($id);
        
        // dd($pat);
        $pat->result = $request->res;
        $pat->e_gene = $request->e_gene;
        $pat->n_gene = $request->n_gene;
        $pat->orf_lb = $request->orf_lab;

        $pat->reporting_date = date("Y-m-d");
        $pat->reporting_time = date("Y-m-d h:i:s");
        $pat->save();

        $idd = $pat->id;
        $records = Patient::find($id);

        // DB::table('sent_mail_details')->insert(
        //     array('patient_id' => $idd, 'mail_count' => $)
        // );

        // Session::flash('success', 'Succesfully Updated Patient Information.');
        // return redirect()->route('show_report');
        // return response()->json(['success' => true, 'html' => $pat]);
        return response()->json($records);
    }

    public function printPdf(Request $request, $id){
        // $pdf = PDF::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();

        // $pdf = PDF::loadView('pdf.invoice', $data);
        // return $pdf->download('invoice.pdf');

        $data['patient'] = Patient::find($id);

        
        $pdf = PDF::loadView('report.pdfview', $data);
        return $pdf->stream();
        // return view('admin.pdfview')->with($data);
    }

    public function downloadPdf(Request $request, $id){

        $data['patient'] = Patient::find($id);
        $n = $data['patient']->patient_name;
        $n = $n . '-' .date('Y-m-d H:i:s') . '.pdf';

        $pdf = PDF::loadView('report.pdfview', $data);
        return $pdf->download($n);
    }

    public function printhtml(Request $request){
        $data['patient'] = Patient::find($id);
        $n = time() . 'patient_report.pdf';
        $homepage = file_get_contents('filename.txt');

        return view('report.pdfview', compact('data'));
    }

    public function send_mail_pdf(Request $request, $id){
        

        $data['patient'] = Patient::find($id);
        // echo $data['patient']->patient_name;
        // dd($data);
        $data["email"] = $data['patient']->email;
        $data["client_name"] = $data['patient']->patient_name;

        $subject = "COVID-19 Result.";
        $data["subject"] = $subject;

        $pdf = PDF::loadView('report.pdfview', $data);

        try{
            Mail::send('report.emailView', $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attachData($pdf->output(), "result.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
             Session::flash('error', 'Error in Sending Mail');
        }else{

           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";

           Session::flash('success', 'Succesfully Sent E-Mail to ' .$data["client_name"]);
        }
        // return response()->json(compact('this'));
        
        return redirect()->back();
    }

    public function show_report(){
        $title = "Update Patient's Report";
        // $patient = Patient::where('result', 'N')->orWhere('result', 'P')->orderBy('id', 'desc')->get();
        $patient = Patient::whereNull('result')->orderBy('id', 'desc')->get();
        
        return view('report.show', compact('title','patient'));
    }

    public function send_sms(Request $request){
        $rec = Patient::findOrFail($request->id);
        
        try {
            if($rec->phone){
                // $contact = $rec->phone;
                $contact = '9861286346';
                $name = $rec->patient_name;
                $age_gender = $rec->patient_age.' / '.ucfirst($rec->gender);
                $lab_id = $rec->lab_id;
                $rest = $rec->result;
                if($rest == 'P'){
                    $result = 'POSITIVE';
                }elseif($rest == 'N'){
                    $result = 'NEGATIVE';
                }else{
                    $result = '';
                }
        
                $token = 'rMZJTb9JDIZRBtia52090mo5lmelNhGRb3P';
                $to = $contact;
                $sender    = 'DecodeLab';
                $message = 'COVID-19 PCR Test Report of '.$name.' '.$age_gender.' with Lab ID '.$lab_id.' is '.$result.' \n Decode Lab, Sinamangal \n 01-4116637 (7am to 7pm)';
                
                // set post fields
                $content =[
                    'token'=>rawurlencode($token),
                    'to'=>rawurlencode($to),
                    'sender'=>rawurlencode($sender),
                    'message'=>$message,
                    ];
        
                $thesmscentral_response = $this->sendSMS($content);

                $obj= json_decode($thesmscentral_response);
                if($obj->response_code == 200){
                    Session::flash('success', 'Successfully Sent Text MSG to '.$name.' ');
                }elseif($obj->response_code == 1001){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1003){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1004){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1005){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1006){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 401){
                    Session::flash('error', $obj->body);
                }else{
                    Session::flash('error', 'Something Error Occurred. SMS could not be sent.');
                }
            }
        } catch (exception $e) {
            //throw $e;
            Session::flash('error', 'Error in sending Message. ');
        }
        
        // echo $thesmscentral_response;
        
        return redirect()->back();
    }
    public function sendSMS($content){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://beta.thesmscentral.com/api/v3/sms?");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$content);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return $server_output;
    }

    public function send_bulk_email(Request $request){
        if(isset($request->arr) ){
            foreach ($request->arr as $val) {
                
                $data['patient'] = Patient::find($val);
                // echo $data['patient']->patient_name;
                // dd($data);
                $data["email"] = $data['patient']->email;
                $data["client_name"] = $data['patient']->patient_name;
        
                $subject = "COVID-19 Result.";
                $data["subject"] = $subject;
        
                $pdf = PDF::loadView('report.pdfview', $data);
        
                try{
                    Mail::send('report.emailView', $data, function($message)use($data,$pdf) {
                    $message->to($data["email"], $data["client_name"])
                    ->subject($data["subject"])
                    ->attachData($pdf->output(), "result.pdf");
                    });
                }catch(JWTException $exception){
                    $this->serverstatuscode = "0";
                    $this->serverstatusdes = $exception->getMessage();
                }
                if (Mail::failures()) {
                     $this->statusdesc  =   "Error sending mail";
                     $this->statuscode  =   "0";
                     Session::flash('error', 'Error in Sending Mail');
                }else{
        
                   $this->statusdesc  =   "Message sent Succesfully";
                   $this->statuscode  =   "1";
        
                   Session::flash('success', 'Succesfully Sent E-Mail to ' .$data["client_name"]);
                }

            }
        }
        
        // dd($request->arr);
    }

    public function send_bulk_sms(Request $request){
        // dd($request);
        // die;
        if(isset($request->arr) ){
            foreach ($request->arr as $val) {
            $rec = Patient::findOrFail($val);
        
        try {
            if($rec->phone){
                $contact = $rec->phone;
                // $contact = '9861286346';
                $name = $rec->patient_name;
                $age_gender = $rec->patient_age.' / '.ucfirst($rec->gender);
                $lab_id = $rec->lab_id;
                $rest = $rec->result;
                if($rest == 'P'){
                    $result = 'POSITIVE';
                }elseif($rest == 'N'){
                    $result = 'NEGATIVE';
                }else{
                    $result = '';
                }
        
                $token = 'rMZJTb9JDIZRBtia52090mo5lmelNhGRb3P';
                $to = $contact;
                $sender    = 'DecodeLab';
                $message = 'COVID-19 PCR Test Report of '.$name.' '.$age_gender.' with Lab ID '.$lab_id.' is '.$result.' \n Decode Lab, Sinamangal \n 01-4116637 (7am to 7pm)';
                
                // set post fields
                $content =[
                    'token'=>rawurlencode($token),
                    'to'=>rawurlencode($to),
                    'sender'=>rawurlencode($sender),
                    'message'=>$message,
                    ];
        
                $thesmscentral_response = $this->sendSMS($content);

                $obj= json_decode($thesmscentral_response);
                if($obj->response_code == 200){
                    Session::flash('success', 'Successfully Sent Text MSG to '.$name.' ');
                }elseif($obj->response_code == 1001){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1003){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1004){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1005){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 1006){
                    Session::flash('error', $obj->body);
                }elseif($obj->response_code == 401){
                    Session::flash('error', $obj->body);
                }else{
                    Session::flash('error', 'Something Error Occurred. SMS could not be sent.');
                }
            }
            } catch (exception $e) {
                //throw $e;
                Session::flash('error', 'Error in sending Message. ');
            }
            }
        }
    }
    

}
