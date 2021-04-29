@extends('layouts.admin')
@section('title','Games')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="card-group mb-4">
            <div class="card" style="height:300px;background-image: url('/frontend/assets/images/gallery-10.jpg');background-repeat:no-repeat;
                background-size: cover;">
                <div class="card-body">
                    <div class="text-center mt-5">
                        <i class="fa fa-gamepad fa-3x text-white mt-5" aria-hidden="true"> <span class="ml-2"> Games </span></i>
                        <h5 class="mt-2">Manage Games</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                @if(session('created'))
                <div class="alert alert-success" role="alert">{{session('created')}}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                @endif
                @if(session('updated'))
                <div class="alert alert-success" role="alert">{{session('updated')}}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                @endif
                @if(session('deleted'))
                <div class="alert alert-success" role="alert">{{session('deleted')}}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                @endif
                <a href="{{route('admin.game.create')}}" class="float-right btn btn-primary">Add New +</a>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Description</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $game)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$game->name}}</td>
                                <td class="text-center p-2">
                                    <a href="{{asset('game_image/'.$game->logo)}}" target="blank"><img src="{{asset('game_image/'.$game->logo)}}" alt="" width="100">
                                    </a>
                                </td>
                                <td>{{$game->description}}</td>
                                <td>
                                    <a href="{{route('admin.game.edit',$game->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" data-url="{{route('admin.game.delete',$game->id)}}" data-toggle="modal" data-target="#warningModal" class="btn btn-danger btn-sm remove-item">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul>
                    {{ $games->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Delete Game</h4>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
    <p>Are you sure,you want to delete this?</p>
    </div>
    <form class="form" action="" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
            <button class="btn btn-danger text-white" type="submit">Yes</button>
        </div>
    </form>
    </div>
    
    </div>
    
    </div>
@endsection
@section('javascript')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@endsection