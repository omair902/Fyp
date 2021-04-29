@extends('layouts.admin')
@section('title','Edit Permission')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Edit Permission</strong>
                        <a href="{{route('admin.permissions')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.permission.update',$permission->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name" id="name" type="text" value="{{$permission->name}}" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
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
