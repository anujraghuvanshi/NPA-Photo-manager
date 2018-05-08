@extends('admin.layouts.master')

@section('content')

<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-6 col-md-offset-3">
                <div class="headline">
                    <h2>Register Form</h2></center>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row margin-bottom-20">
                        <label>Name</label>
                        <div class="col-md-offset-0">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        
                        @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row margin-bottom-20">
                        <label>Email</label>
                        <div class="col-md-offset-0">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row margin-bottom-20">
                        <label>Password</label>
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
                        <label>Confirm Password</label>
                        <div class="col-md-offset-0">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection