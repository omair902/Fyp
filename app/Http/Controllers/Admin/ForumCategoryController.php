<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForumCategoryRequest;
use App\Models\ForumCategory;
use Session;

class ForumCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=ForumCategory::paginate(10);
        return view('admin.forum_categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forum_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumCategoryRequest $request)
    {
        $category=new ForumCategory;
        $category->name=$request->name;
        $category->save();
        if($category)
        {
            Session::flash('created','Category Created Successfuly');
            return redirect()->route('admin.forum_categories');
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
        $category=ForumCategory::find($id);
        return view('admin.forum_categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ForumCategoryRequest $request, $id)
    {
        $category=ForumCategory::find($id);
        $category->name=$request->name;
        $category->update();
        if($category)
        {
            Session::flash('updated','Category Updated Successfuly');
            return redirect()->route('admin.forum_categories');
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
        $category=ForumCategory::find($id);
        $category->delete();
        if($category)
        {
            Session::flash('deleted','Category Deleted Successfuly');
            return redirect()->back();
        }
    }
}
