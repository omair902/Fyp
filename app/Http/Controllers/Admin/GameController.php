<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\GameRequest;
use Session;
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games=Game::paginate(10);
        return view('admin.games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        $game=new Game;
        $game->name=$request->name;
        $logo=$request->logo;
        $logo_name=rand(1,10000).$logo->getClientOriginalName();
        $destination_path=public_path('game_image');
        $logo->move($destination_path,$logo_name);
        $game->logo=$logo_name;
        $game->description=$request->description;
        $game->save();
        if($game)
        {
            Session::flash('created','Game Created Successfuly');
            return redirect()->route('admin.games');
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
        $game=Game::find($id);
        return view('admin.games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameRequest $request, $id)
    {
        $game=Game::find($id);
        $game->name=$request->name;
        if($request->logo != null)
        {
            $current_photo=$game->logo;
            @unlink(public_path('/game_image/'.$current_photo));
            $logo=$request->logo;
            $logo_name=rand(1,10000).$logo->getClientOriginalName();
            $destination_path=public_path('game_image');
            $logo->move($destination_path,$logo_name);
            $game->logo=$logo_name;
        }
        $game->description=$request->description;
        $game->update();
        if($game)
        {
            Session::flash('updated','Game Updated Successfuly');
            return redirect()->route('admin.games');
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
        $game=Game::find($id);
        $current_photo=$game->logo;
        @unlink(public_path('/game_image/'.$current_photo));
        $game->delete();
        if($game)
        {
            Session::flash('deleted','Game deleted Sucessfully');
            return redirect()->back();
        }
    }
}
