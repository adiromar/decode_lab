<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "User's Information";
        $users = User::get();

        return view('user.index', compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create New User";

        if(Auth::user()->roles()->first()->role == 'Admin'){
            return view('user.create', compact('title'));
        }elseif(Auth::user()->roles()->first()->role == 'User'){
            redirect()->back();
        }else{
            redirect()->back();
        }
        
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
            'full_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'user_role' => 'required'
        ]);
        
        // dd($request);
        $user = new User;

        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        // $user->user_role = $request->user_role;
        $user->phone = $request->phone;
        $user->suspend = $request->suspend;

        $user->save();
        // get user inserted id
        $uid = $user->id;
        $roleid = $request->user_role;

        if ( isset($roleid) && isset($uid) ) {

            DB::table('role_user')->insert([
                'user_id' => $uid,
                'role_id' => $roleid,
            ]);            
        }

        Session::flash('success', 'Succesfully Added User.');
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
        $title = 'Edit User';
        $user = User::find($id);
        return view('user.edit', compact('title','user'));
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
            'full_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191',
            // 'password' => 'required|string|min:6|confirmed',
            'user_role' => 'required'
        ]);
        
        // dd($request);
        $user = User::find($id);

        $user->name = $request->full_name;
        $user->email = $request->email;
        if(isset($request->password) && $request->password != ''){
            $user->password = bcrypt($request->password);
        }
        
        $user->gender = $request->gender;
        // $user->user_role = $request->user_role;
        $user->phone = $request->phone;
        $user->suspend = $request->suspend;
        
        $user->save();
        // get user inserted id
        $uid = $request->user_role;

        if ( isset($uid) ) {

            DB::table('role_user')->where('user_id', $id)->update([
                'role_id' => $uid,
            ]);            
        }

        Session::flash('success', 'Succesfully Updated User.');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        DB::table('role_user')->where('user_id', $id)->delete();

        Session::flash('success', 'Succesfully Removed User.');

        return redirect()->back();
    }
}
