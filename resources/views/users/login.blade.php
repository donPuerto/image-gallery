@extends('layouts.master')


@section('title_name')
    User Login
@endsection


@section('content')

    <div class="row">
        <div class="jumbotron col-sm-6 col-sm-push-3" style="margin-top: 5em">
            <h1>Login</h1>

            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div class="form-group">
                    Email
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Enter your email address"
                           class="form-control"/>

                </div>

                <div class="form-group">
                    Password
                    <input type="password"
                           name="password"
                           id="password"
                           placeholder="Enter your password"
                           class="form-control"/>

                </div>

                <div class="form-group">

                    <input type="submit"
                           name="login"
                           id="login-btn"
                           value="Login"
                           class="btn btn-primary"/>

                </div>

            </form>

        </div>

    </div>


@endsection