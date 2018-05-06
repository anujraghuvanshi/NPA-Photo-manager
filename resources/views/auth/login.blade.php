@extends('admin.layouts.master')

@section('content')

<div id="pre-header" class="container" style="height:20px"></div>

@include('admin.partials.header')

@include('admin.partials.nav-bar')

<div id="post_header" class="container" style="height:10px"></div>
<div id="content-top-border" class="container"></div>

<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-6 col-md-offset-3">
                <div class="headline">
                    <h2>Login Form</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>Email</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-offset-0">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <label>Password</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-offset-0">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-md-offset-0">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="content-bottom-border" class="container"></div>

</div>

@endsection