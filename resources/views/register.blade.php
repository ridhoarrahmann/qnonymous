@extends('layouts/auth-layouts')

@section('html-body')
        <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="auth-form-con   tainer">
            <h2 class="text-center">Qnonymous</h2>
            <div class="auth-form mt-5">
                <form action="/register" method="POST">
                   
                    @csrf
                    <input type="text" class="form form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" >
                    @error('name')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <input type="text" class="form form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" >
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <input type="password" class="form form-control @error('password') is-invalid @enderror"" name="password" placeholder="Password" >
                    @error('password')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <input type="password" class="form form-control @error('password_confirmation') is-invalid @enderror"" name="password_confirmation" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                    <button type="submit" class="btn btn-dark w-100 mt-2">Register</button>
                   
                </form>
                
                </div>
            </div>
         </div>
@endsection