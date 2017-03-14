<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request as ajax;
use Input as ajaxInput;
use Illuminate\Support\Facades\Validator;

class register extends Controller
{
  public function daftar(Request $request)
  {
    $validator = Validator::make($request->all(),[
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6'
    ]);
    if ($validator->fails()) {
           return redirect('/login')
                       ->withErrors($validator,'register');
       }

    $data= array("name" => $request->input('name'),
    "email" => $request->input('email'),
    "password" => bcrypt($request->input('password'))
  );
    DB::table('users')->insert($data);
    return Back();
  }

}
