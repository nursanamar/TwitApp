@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
      <h2>LOGIN</h2>
      <form class="form" action="index.html" method="post">
        <input class="form-control" type="text" name="username" value="" placeholder="email">
        <input class="form-control" type="password" name="password" value="" placeholder="Password">
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
      <form class="form" action="index.html" method="post">
        <input class="form-control" type="text" name="username" value="" placeholder="email">
        <input class="form-control" type="text" name="nama" value="" placeholder="Nama">
        <input class="form-control" type="password" name="password" value="" placeholder="Password">
        <div class="center">
          <input type="submit" name="submit" value="login" class="btn btn-primary tombol">
        </div>
      </form>
    </div>
  </div>
@endsection
