<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use stdClass;
use function MongoDB\BSON\toJSON;

class UserController extends Controller
{
    public function showInfo(Request $request)
    {
        $isUser = false;
        $token = $request->token;
        foreach (User::get() as $user) {
            if (($user->app_token == $token) && ($token != "")) {
                $isUser = true;
                $user->category = $user->categories()->get();
                $user->avatar = env("APP_URL").$user->avatar;
                $user->code = 200;
                return $user;
            }
        }
        if(!$isUser){
            $error = new stdClass();
            $error->content = "Lỗi rồi";
            $error->code = 404;
            return json_encode($error);
        }
    }
}
