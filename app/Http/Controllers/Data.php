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
  public function profil()
  {
    return view('profil');
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

  public function userdata()
  {
    $data = DB::table('users')->where('id',Auth::id())->get();
    $response = array();
    foreach ($data as $value) {
      array_push($response,array('id'=>$value->id,'name'=>$value->name,'image'=>$value->image,'email' => $value->email,'password'=> $value->password));
    }
    return Response::json($response);
  }

  public function addpost(Request $request)
  {
    $data = array('userId' => Auth::id() ,'status' => $request->input('post'));
    DB::table('post')->insert($data);
    return "ok";
  }

  public function updateuser(Request $request)
  {
    $data;
    if ($request->input('password') === "") {
      $data = array('name' => $request->input('name'),'email' => $request->input('email'));
    } else {
      $data = array('name' => $request->input('name'),'email' => $request->input('email'),'password' => bcrypt($request->input('password')));
    }
    DB::table('users')->where('id',Auth::id())->update($data);

  }

  public function imageupload(Request $request)
  {
    $imagename = time().".".$request->image->getClientOriginalExtension();
    $request->image->move(public_path('profilimage'),$imagename);

    DB::table('users')->where('id',Auth::id())->update(["image" => "profilimage/".$imagename]);
    return view('profil');
  }
}
