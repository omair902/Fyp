<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;
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
        $blogs=Blog::paginate(10);
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog=new Blog;
        $blog->title=$request->title;

        $image=$request->image;
        $image_name=rand(1,10000).$image->getClientOriginalName();
        $destination_path=public_path('blog_image');
        $image->move($destination_path,$image_name);
        $blog->image=$image_name;
        $blog->description=$request->description;
        $blog->save();
        if($blog)
        {
            Session::flash('created','Blog Created Sucessfully');
            return redirect()->route('admin.blogs');
        }
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
        $blog=Blog::find($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog=Blog::find($id);
        $blog->title=$request->title;

        $image=$request->image;
        if($image != null)
        {
            $current_photo=$blog->image;
            @unlink(public_path('/blog_image/'.$current_photo));
            $image_name=rand(1,10000).$image->getClientOriginalName();
            $destination_path=public_path('blog_image');
            $image->move($destination_path,$image_name);
            $blog->image=$image_name;
        }
        $blog->description=$request->description;
        $blog->update();
        if($blog)
        {
            Session::flash('updated','Blog Updated Sucessfully');
            return redirect()->route('admin.blogs');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $current_photo=$blog->image;
        @unlink(public_path('/blog_image/'.$current_photo));
        $blog->delete();
        if($blog)
        {
            Session::flash('deleted','Blog Deleted Sucessfully');
            return redirect()->back();
        }
    }
}
