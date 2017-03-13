@extends('layouts.master')
@section('js')
  <script type="text/javascript" src="js/react.js"></script>
	<script type="text/javascript" src="js/react-dom.js"></script>
	<script type="text/javascript" src="js/browser.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/babel" src="js/profil.js"></script>
@endsection
@section('content')
  <div id="root" class="row">
    <!--<div class="container">
      <div class="col-md-4 col-sm-4 col-lg-4">
        <div class="col-md-12 col-sm-12 col-lg-12 foto-profil center">
          <img src="/images/placeholder.jpg" alt="profil">
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 center">
          <input type="submit" class="btn btn-upload"name="upload" value="upload">
        </div>
      </div>
      <div class="col-sm-8 col-md-8 col-lg-8 data">
        <form class="" action="" method="post">
          <div class="input">
            <input class="form-control" type="text" name="nama" value="" placeholder="Nama">
          </div>
          <div class="input">
            <input class="form-control" type="text" name="email" value="" placeholder="email">
          </div>
          <div class="input">
            <input class="form-control" type="Password" name="password" value="" placeholder="Password">
          </div>
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-md-offset-8 col-sm-offset-8 col-lg-8">
              <input class="btn tombol-data" type="submit" name="submit" value="submit">
            </div>
          </div>
        </form>
      </div>
    </div>-->
  </div>
@endsection
