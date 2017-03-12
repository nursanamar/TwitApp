<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class Data extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function addpost(Request $request)
  {
    $data = array('userId' => Auth::id() ,'status' => $request->input('post'));
    DB::table('post')->insert($data);
  }

  public function getpost()
  {
    $data = DB::table('post')->join('users','post.userId','=','users.id')->get();
    $response=array();
    foreach ($data as $value) {
        $type = ($value->id === Auth::id()) ? "me":"friend";
        array_push($response,array('id'=>$value->id,'name'=>$value->name,'status'=>$value->status,'image'=>$value->image,'type'=> $type));
    }
    return Response::json($response);
  }

  public function daftar(Request $request)
  {
    $data= array("name" => $request->input('name'),
    "email" => $request->input('email'),
    "password" => bcrypt($request->input('password'))
  );
  dd($data);
    DB::table('users')->insert($data);
  }
}
