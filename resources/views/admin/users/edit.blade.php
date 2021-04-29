@extends('layouts.admin')
@section('title','Edit User')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Edit User</strong>
                        <a href="{{route('admin.users')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.user.update',$user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name" id="name" type="text" value="{{$user->name}}" required >
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" id="email" type="email" value="{{$user->email}}" required>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3 mb-2">
                                <h3>Select roles for this user</h3>
                                </div>
                                @foreach($roles as $role)
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input name="roles[]" type="checkbox" value="{{$role->name}}"
                                            @if($user->hasRole($role)) checked @endif>
                                            <label for="">{{$role->name}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
