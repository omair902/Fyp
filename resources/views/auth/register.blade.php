@extends('layouts.frontend')
@section('title','Signup')
@section('main-content')
<div class="nk-main">
  <div class="nk-gap-2"></div>
  <div class="nk-gap-2"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 ml-auto mr-auto">
      <div class="nk-card nk-box-2 bg-dark-2">
          <h4>REGISTER</h4>
         Create your account
         <form action="{{route('register')}}" method="POST">
           @csrf
            <div class="nk-gap-2"></div>
            <div class="input-group">
              <button class="nk-btn nk-btn-color-main-1">
                <span class="fa fa-user"></span>
              </button>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror bg-white text-black" placeholder="Username">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="nk-gap-2"></div>
            <div class="input-group">
              <button class="nk-btn nk-btn-color-main-1">
                <span class="fa fa-envelope"></span>
              </button>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror bg-white text-black" placeholder="Email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="nk-gap-2"></div>
            <div class="input-group">
              <button class="nk-btn nk-btn-color-main-1">
                <span class="fa fa-lock"></span>
              </button>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror bg-white text-black" placeholder="Enter Password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="nk-gap-2"></div>
            <div class="input-group">
              <button class="nk-btn nk-btn-color-main-1">
                <span class="fa fa-lock"></span>
              </button>
              <input type="password" name="password_confirmation" class="form-control bg-white text-black" placeholder="Confirm Password">
            </div>

            <div class="nk-gap-2"></div>
            <div class="col-md-12 text-center">
                <button class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-x2">
                  Submit
              </button>
              <br>
            </div>
            <div class="nk-gap-2"></div>
            <span>Already have account? <a href="" data-toggle="modal" data-target="#modalLogin">Login Here.</a></span>
         </form>
      </div>
    </div>
    <div class="nk-gap-2"></div>
  <div class="nk-gap-2"></div>
</div>
 <!-- START: Page Background -->

 <div class="nk-page-background-fixed" style="background-image: url('frontend/assets/images/bg-fixed-1.jpg');"></div>
 <!-- END: Page Background -->
@endsection