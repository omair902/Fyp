@extends('layouts.admin')
@section('title','Create User')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Create User</strong>
                        <a href="{{route('admin.users')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.user.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name" id="name" type="text" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" id="email" type="email" required>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" id="password" type="password" required>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ConfirmPassword">Confirm Password</label>
                                        <input class="form-control" placeholder="Confirm Passeord" name="password_confirmation" type="password" required>
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
                                            <input name="roles[]" type="checkbox" value="{{$role->name}}">
                                            <label for="">{{$role->name}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Create</button>
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
