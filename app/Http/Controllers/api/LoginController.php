<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use stdClass;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (isset($request->email)) {
            $email = $request->email;
        } else {
            return 1;
        }
        if (isset($request->password)) {
            $password = $request->password;
        } else {
            return 1;
        }
        $users = User::get();
        foreach ($users as $user) {
            if ($user->email == $email) {
                if (Hash::check($password, $user->password)) {
                    $token = Str::random(25);
                    $user->update(['app_token' => $token]);
                    $rs = new stdClass();
                    $rs->token = $token;
                    $rs->code = 200;
                    return json_encode($rs);
                }
            }
        }
        $rs = new stdClass();
        $rs->code = 404;
        return json_encode($rs);
    }
}
