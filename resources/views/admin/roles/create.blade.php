@extends('layouts.admin')
@section('title','Create Role')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Create Role</strong>
                        <a href="{{route('admin.roles')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.role.store')}}" method="POST">
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
                                <div class="col-sm-12 mt-3 mb-2">
                                <h3>Select permissions for this role</h3>
                                </div>
                                @foreach($permissions as $permission)
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input name="permissions[]" type="checkbox" value="{{$permission->name}}">
                                            <label for="">{{$permission->name}}</label>
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
