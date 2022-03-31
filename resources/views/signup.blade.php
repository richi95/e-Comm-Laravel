@extends('master')
@section('content')
    <div class="container custom-signup">
        <div class="col-sm-4 col-sm-offset-4">
            <form method="POST">
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('message.type') }}">
                        {{ Session::get('message.content') }}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror"
                        id="name" placeholder="Name" name="name">
                </div>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
                </div>
                @error('email')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                </div>
                @error('password')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
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
