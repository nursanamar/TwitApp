@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
      <h2>LOGIN</h2>
      <form class="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input class="form-control" type="password" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="center">
          <input type="submit" name="submit" value="login" class="btn btn-primary tombol">
        </div>

      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
      <h2>REGISTER</h2>
      <form class="form" method="POST" action="/daftar">
          {{ csrf_field() }}
        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required placeholder="email">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->register->first('email') }}</strong>
            </span>
        @endif
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->register->first('name') }}</strong>
            </span>
        @endif
        <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->register->first('password') }}</strong>
            </span>
        @endif
        <div class="center">
          <input type="submit" name="submit" value="Register" class="btn btn-primary tombol">
        </div>
      </form>
    </div>
  </div>
@endsection
