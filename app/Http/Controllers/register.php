<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request as ajax;
use Input as ajaxInput;

class register extends Controller
{
  public function daftar(Request $request)
  {
    $data= array("name" => $request->input('name'),
    "email" => $request->input('email'),
    "password" => bcrypt($request->input('password'))
  );
    DB::table('users')->insert($data);
  }

  /// hanya untuk testing 
  public function cek(Request $request)
  {
    dd($request);
  }
  public function token()
  {
    return csrf_token();
  }
}
