@extends('layouts.admin')
@section('title','Edit Forum Category')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><strong>Edit Forum Category</strong>
                        <a href="{{route('admin.forum_categories')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.forum_category.update',$category->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Enter name of category" value="{{$category->name}}" required>
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