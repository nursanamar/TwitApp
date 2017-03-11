<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Data extends Controller
{
  public function data()
  {
    $data = DB::table('user')->get();
    print_r($data->nama);
  }
  public function daftar(Request $request)
  {
    $data= array("name" => $request->input('name'),
    "email" => $request->input('email'),
    "password" => bcrypt($request->input('password'))
  );
    DB::table('users')->insert($data);
  }
}
