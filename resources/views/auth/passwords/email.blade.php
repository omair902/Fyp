@extends('layouts.frontend')
@section('title','Reset Password')
@section('main-content')
<div class="nk-main">
  <div class="nk-gap-2"></div>
  <div class="nk-gap-2"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 ml-auto mr-auto">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
      <div class="nk-card nk-box-2 bg-dark-2">
          <h4>Reset Password</h4>
         <form action="{{route('password.email')}}" method="POST">
           @csrf
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
            <div class="col-md-12 text-center">
                <button class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-x2">
                  Send Password reset link
              </button>
              <br>
            </div>
        </form>
      </div>
    </div>
</div>
 <!-- START: Page Background -->

 <div class="nk-page-background-fixed" style="background-image: url('frontend/assets/images/bg-fixed-1.jpg');"></div>
 <!-- END: Page Background -->
@endsection
                   

                    
