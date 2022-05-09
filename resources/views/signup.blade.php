@extends('layouts.app')
@section('content')
    <div class="container custom-signup custom-login-content">
        <div class="col-sm-4 col-sm-offset-4" style="padding: 2rem;">
            <form method="post">
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('message.type') }}">
                        {{ Session::get('message.content') }}
                    </div>
                @endif
                @csrf
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control "
                        id="name" placeholder="Name" name="name">
                </div>
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') {{ 'is-invalid' }} @enderror" id="email" placeholder="Email address" name="email">
                </div>
                @error('email')
                    <div>
                        <span class="invalid-feedback">{{ $message }}</span>
                    </div>
                @enderror
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror" id="pwd" placeholder="Password">
                </div>
                @error('password')
                    <div>
                        <span class="invalid-feedback">{{ $message }}</span>
                    </div>
                @enderror
                <div class="form-group">
                    <label for="pwd_confirm">Password confirm</label>
                    <input type="password" class="form-control" id="pwd_confirm" placeholder="Password confirm"
                        name="password_confirmation">
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Sign Up</Button>
                </div>
            </form>
        </div>
    </div>
@endsection
