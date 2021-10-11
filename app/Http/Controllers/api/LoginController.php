<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request){
        if(isset($request->email)){
            $email = $request->email;
        }else{
            return 1;
        }
        if(isset($request->password)){
            $password = $request->password;
        }else{
            return 1;
        }
        $isAccount = false;
        $isLogin = false;
        $users= User::get();
        foreach ($users as $user){
            if($user->email == $email){
                $isAccount = true;
                if(Hash::check($password,$user->password)){
                    $isLogin = true;
                    $rs = "Login success with token :".Str::random(25);
                    $rsJson = json_encode($rs);
                    return $rsJson;
                }else{
                    return "Login Fail";
                }
            }
        }
    }
    public function showInfo(Request $request){

    }
}
