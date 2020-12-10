<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Image;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Blog Details";
        $blogs = Blog::latest()->get();

        return view('blog.index', compact('title','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create a Blog";

        return view('blog.create', compact('title'));
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
            'blog_title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
        
        $img = $request->file('image');
        $ffname = 'feat-' . str_slug( $request->blog_title ) . '-' . str_random(8) . '.' . $img->getClientOriginalExtension();

        Image::make($img)->resize(270, 270)->save('uploads/blog/'. $ffname);
        Image::make($img)->resize(150, 150)->save('uploads/blog/thumbnails/'. $ffname);

        $blog = new Blog;

        // $pat->lab_id = $request->lab_id;
        $blog->blog_title = $request->blog_title;
        $blog->slug = str_slug($request->blog_title);
        $blog->subtitle = $request->subtitle;
        $blog->image = $ffname;
        $blog->content = $request->content;
        $blog->save();

        Session::flash('success', 'Succesfully Added Blog');
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
        $title = "Update Blog";
        $blog = Blog::findorfail($id);

        return view('blog.edit', compact('title','blog'));
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
            'blog_title' => 'required',
            // 'image' => 'required',
            'content' => 'required'
        ]);
        
        $img = $request->file('image');

        if($img){
        $ffname = 'feat-' . str_slug( $request->blog_title ) . '-' . str_random(8) . '.' . $img->getClientOriginalExtension();

        Image::make($img)->resize(270, 270)->save('uploads/blog/'. $ffname);
        Image::make($img)->resize(150, 150)->save('uploads/blog/thumbnails/'. $ffname);
        }

        $blog = Blog::FindOrFail($id);

        $blog->blog_title = $request->blog_title;
        $blog->slug = str_slug($request->blog_title);
        $blog->subtitle = $request->subtitle;
        if($img){
            $blog->image = $ffname;
        }
        
        $blog->content = $request->content;
        $blog->save();

        Session::flash('success', 'Succesfully Updated Blog');
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
        $blog = Blog::find($id);
        $blog->delete();

        Session::flash('success', 'Succesfully Removed Blog Data.');

        return redirect()->back();
    }
    public function news_list(){
        $list = Blog::latest()->paginate(1);
        $title = "Blog Details";

        return view('blog.news_list', compact('title','list'));
    }

    public function news($slug){

        $blog = Blog::where('slug', $slug)->first();
        $title = "Blog Details";

        return view('blog.news', compact('title','blog'));
    }
}
