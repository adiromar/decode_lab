<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Page Details";
        $pages = Page::latest()->get();

        return view('page.index', compact('title','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create a Page";

        return view('page.create', compact('title'));
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
            'page_title' => 'required',
            // 'image' => 'required',
            'content' => 'required'
        ]);
        

        $page = new Page;

        // $pat->lab_id = $request->lab_id;
        $page->page_title = $request->page_title;
        $page->slug = str_slug($request->page_title);
        $page->subtitle = $request->subtitle;
        $page->content = $request->content;
        $page->save();

        Session::flash('success', 'Succesfully Added Page');
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
        $title = "Update Page";
        $page = Page::findorfail($id);

        return view('page.edit', compact('title','page'));
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
            'page_title' => 'required',
            // 'image' => 'required',
            'content' => 'required'
        ]);
        

        $page = Blog::FindOrFail($id);

        $page->page_title = $request->page_title;
        $page->slug = str_slug($request->page_title);
        $page->subtitle = $request->subtitle;
        
        $page->content = $request->content;
        $page->save();

        Session::flash('success', 'Succesfully Updated Page');
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
        $page = Page::find($id);
        $page->delete();

        Session::flash('success', 'Succesfully Removed Page Data.');

        return redirect()->back();
    }

    public function news($slug){

        $page = Page::where('slug', $slug)->first();
        $title = "";

        return view('page.news', compact('title','page'));
    }
}
