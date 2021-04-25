@extends('layouts.auth')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card-group">
              <div class="card p-4">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                          <i class="cil-user"></i>
                          </span>
                      </div>
                      <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                      <div class="input-group mb-4">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                          <i class="cil-lock-locked"></i>
                          </span>
                      </div>
                      <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" required>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                      </div>
                      </form>
                      <div class="col-6 text-right">
                          <a href="{{ route('password.request') }}" class="btn btn-link px-0" type="button">{{ __('Forgot Your Password?') }}</a>
                      </div>
                      </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                    <a role="button" href="{{route('login.socials','facebook')}}" class="btn btn-block btn-facebook px-4 text-white" type="button">
                        <span>Login with facebook</span>
                    </a>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-11">
                    <a role="button" href="{{route('login.socials','google')}}" class="btn btn-block bg-danger text-white px-4" type="button">
                        <span>Login with google</span>
                    </a>
                    </div>
                </div>
              </div>
              <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up here</h2>
                    <p>Don't have Score2Win account yet?</p>
                      <a href="{{ route('register') }}" class="btn btn-primary active mt-3 p-2" type="button"><h5>{{ __('Register Now') }}</h5></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection 