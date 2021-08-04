<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function viewUser(){
        $user = User::get();
        return $user;
    }

    public function getsingleUser($id){
        $user = User::where('id','=',$id)->get();
        return $user;
    }

    public function updateUser($id){
        $user = User::where('id','=',$id)->update([
            'role'=>'author'
        ]);
        return "Update succesful";
    }

    public function downUser($id){
        $user = User::where('id','=',$id)->update([
            'role'=>'user'
        ]);
        return "Downgrade succesful";
    }

    public function deleteUser($id){
        $user = User::where('id','=',$id)->delete(  );
        return "Delete succesful";
    }
}
