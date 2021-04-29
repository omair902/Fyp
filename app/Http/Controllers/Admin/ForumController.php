<?php

namespace App\Http\Controllers\Admin;
use App\Models\Forum;
use App\Models\ForumCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Http\Requests\ForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums=Forum::paginate(10);
        return view('admin.forums.index',compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=ForumCategory::all();
        return view('admin.forums.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumRequest $request)
    {
        $forum=new Forum;
        $forum->category_id=$request->category;
        $forum->user_id=Auth::user()->id;
        $forum->title=$request->title;

        $image=$request->image;
        $image_name=rand(1,10000).$image->getClientOriginalName();
        $destination_path=public_path('forum_image');
        $image->move($destination_path,$image_name);
        $forum->image=$image_name;
        $forum->description=$request->description;
        $forum->save();
        if($forum)
        {
            Session::flash('created','Forum Created Sucessfully');
            return redirect()->route('admin.forums');
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
        $forum=Forum::find($id);
        $categories=ForumCategory::all();
        return view('admin.forums.edit',compact('forum','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ForumRequest $request, $id)
    {
        $forum=Forum::find($id);
        $forum->category_id=$request->category;
        $forum->title=$request->title;

        $image=$request->image;
        if($image != null)
        {
            $current_photo=$forum->image;
            @unlink(public_path('/forum_image/'.$current_photo));
            $image_name=rand(1,10000).$image->getClientOriginalName();
            $destination_path=public_path('forum_image');
            $image->move($destination_path,$image_name);
            $forum->image=$image_name;
        }
        $forum->description=$request->description;
        $forum->update();
        if($forum)
        {
            Session::flash('updated','Forum Updated Sucessfully');
            return redirect()->route('admin.forums');
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
        $forum=Forum::find($id);
        $current_photo=$forum->image;
        @unlink(public_path('/forum_image/'.$current_photo));
        $forum->delete();
        if($forum)
        {
            Session::flash('deleted','Forum Deleted Sucessfully');
            return redirect()->back();
        }
    }
}
