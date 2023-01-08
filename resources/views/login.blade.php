@extends('layouts/auth-layouts')

@section('html-body')
        <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="auth-form-container">
            <h2 class="text-center">Qnonymous</h2>
            <div class="auth-form mt-5">
                @if($message=Session::get('message'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                  </div>
                @endif
                @if($message=Session::get('danger'))
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @endif
                <form action="/login_action" method="post">
                    @csrf
                    <input type="text" class="form form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" >
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <input type="text" class="form form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" >
                    @error('password')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <button type="submit"class="btn btn-dark w-100 mb-2 mt-2">Login</button>
                    <a class="btn btn-outline-dark w-100" href="sign-up">Register</a>
                </form>
                
                </div>
            </div>
         </div>
@endsection