@extends('layouts.auth-layout')
@section('content')
    <form class="form-horizontal" action="{{ route('admin.login') }}" method="post">
       @csrf
        <div class="form-group">
            <label for="username">Enter Email/Phone no</label>
            <input type="text" class="form-control @error('field') is-invalid @enderror" name="field" placeholder="Email/Phone">
        </div>

        <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password">
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customControlInline">
            <label class="custom-control-label" for="customControlInline">Remember me</label>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
        </div>

        <div class="mt-4 text-center">
            @if(Route::has('password.request'))
            <a href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
            @endif
        </div>
    </form>
@endsection

