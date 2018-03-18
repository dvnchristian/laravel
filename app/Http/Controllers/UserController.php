<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
  public function __construct(UserModel $user)
  {
    $this -> user = $user;
  }

  public function register(Request $request)
  {

    $user = [
      "name"  => $request->name,
      "email"  => $request->email,
      "password"  => md5($request->password)
    ];

    // UserModel::save($user);
    $user = $this->user->create($user);

    if($user)
    {
      return "Successfully Created";
    }
    return "Failed";
  }

  public function all()
  {
    $users = $this->user->all();

    return view("all")->with('users', $users);
  }

  public function find($id)
  {
    $user = $this->user->find($id);


    return $user;
  }

  public function destroy($id)
  {
    $user = $this->user->find($id)->delete();

    if($user)
    {
      return "Successfully Deleted";
    }
    return "Failed";
  }
  public function update($id){

    $user = $this->user->find($id);

    return view("updateview")->with('user',$user);
  }
  public function updateview(Request $request, $id)
  {

    $user = $this->user->find($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if($user->password == $request->input("password")){

    }
    else {
      $user->password = md5($request->password);
    }
    $user = $user->save();

    if($user)
    {
      return "Successfully Edited";
    }
    return "Failed";
  }





}
