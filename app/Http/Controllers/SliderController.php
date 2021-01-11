<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sliders;
use Image;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Sliders";
        $sliders = Sliders::get();

        return view('sliders.index', compact('title','sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create a Slider";

        return view('sliders.create', compact('title'));
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
            'slider_title' => 'required',
            'image' => 'required'
        ]);
        
        $img = $request->file('image');

        if($img){
        $ffname = 'feat-' . str_slug( $request->slider_title ) . '-' . str_random(8) . '.' . $img->getClientOriginalExtension();

        // Image::make($img)->resize(270, 270)->save('uploads/sliders/'. $ffname);
        Image::make($img)->save('uploads/sliders/'. $ffname);
        // request()->img->move('uploads/sliders/', $ffname);
        }

        $slider = new Sliders;

        $slider->slider_title = $request->slider_title;
        $slider->status = $request->status;
        if($img){
            $slider->image = $ffname;
        }

        $slider->save();

        Session::flash('success', 'Succesfully Added Slider');
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
        $title = "Update Slider";
        $slide = Sliders::findorfail($id);

        return view('sliders.edit', compact('title','slide'));
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
            'slider_title' => 'required',
            // 'image' => 'required',
        ]);
        
        $img = $request->file('image');

        if($img){
        $ffname = 'feat-' . str_slug( $request->blog_title ) . '-' . str_random(8) . '.' . $img->getClientOriginalExtension();

        Image::make($img)->save('uploads/sliders/'. $ffname);
        }

        $slide = Sliders::FindOrFail($id);

        $slide->slider_title = $request->slider_title;
        $slide->status = $request->status;
        if($img){
            $slide->image = $ffname;
        }
        $slide->save();

        Session::flash('success', 'Succesfully Updated Sliders');
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
        $slide = Sliders::find($id);
        $slide->delete();

        Session::flash('success', 'Succesfully Removed Slider Data.');

        return redirect()->back();
    }
}
