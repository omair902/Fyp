@extends('layouts.admin')
@section('title','Edit Forum')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning" role="alert">Image size should be 1000 x 400 !</div>
                <div class="card">
                    <div class="card-header"><strong>Edit Forum</strong>
                        <a href="{{route('admin.forums')}}" class="btn btn-primary float-right">View All</a>
                    </div>
                    <form action="{{route('admin.forum.update',$forum->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                                            <option value="" readonly>Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if($category->id == $forum->category_id) selected @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Title">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="text" required value="{{$forum->title}}">
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Update Image</label>
                                        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                        @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" id="description" name="description" class="description form-control @error('description') is-invalid @enderror">{{$forum->description}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="submit_btn btn btn-primary">Update</button>
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
@section('javascript')
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/w2oettsj5dyl4brfummtjxaqr57kj65bg98lx6lcbnkmlkbx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: 'textarea.description',
    branding: false,
    skin: "oxide-dark",
    content_css: "dark",
    plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
    toolbar:"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    // enable title field in the Image dialog
    image_title: true, 
    // enable automatic uploads of images represented by blob or data URIs
    automatic_uploads: true,
    // add custom filepicker only to Image dialog
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
  
      input.onchange = function() {
        var file = this.files[0];
        var reader = new FileReader();
        
        reader.onload = function () {
          var id = 'blobid' + (new Date()).getTime();
          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          var base64 = reader.result.split(',')[1];
          var blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);
  
          // call the callback and populate the Title field with the file name
          cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
      };
      
      input.click();
    }
    });
  </script>
@endsection
