<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UsersModel;

use Illuminate\Support\Str;

class AuthController extends Controller
{
    function loginfailed($req) {
        $req->session()->flash('old_username', $req->username);
        $req->session()->flash('old_password', $req->password);
        $req->session()->flash('failedlog');
        return redirect()->route('login_page');
        
    }


    public function register_submit(Request $req)
    {
        $user = new UsersModel;
        $salt = 'skdwe93kf02sf4rge56';
        $user->user_id = rand(100000, 999999);
        $user->email = Str::random(10);
        $registered_user = UsersModel::where('username', $req->username)->first();

        if ($registered_user != null) {
            $req->session()->flash('postfailed', 'Username already taken!');
            return redirect()->back(); // Atau redirect yang sesuai 
        }

        else if ($req->password != $req->confirm) {
            $req->session()->flash('postfailed', 'Password confirmation does not match!');
            return redirect()->back(); // Atau redirect yang sesuai 
        }

        else {
            $hashed_pass = base64_encode(hash('sha256', $req->password . $salt));
            $user->username = $req->username;
            $user->password = $hashed_pass;
            $user->save();
            session()->flash('postsuccess', 'Account registered Successfully!');
            return redirect()->route('login'); // Atau redirect yang sesuai 
        }
    }

    function login_submit(Request $req)
    {
        $salt = 'skdwe93kf02sf4rge56';
        $user = UsersModel::where('username', $req->username)->first();
        $passentry = base64_encode(hash('sha256', $req->password . $salt));
        
        if ($user == null) {
            return AuthController::loginfailed($req);
        } else {
            if($user->password == $passentry) {
                $req->session()->put('isLogin', hash('sha256', session()->get('__token')));
                $req->session()->put('username', $req->username);
                session()->flash('postsuccess', 'Login Successfully!');
                return redirect()->route('dashboard');  
            } else {
                session()->flash('postfailed', 'Wrong username or password!');
                return redirect()->back();  
            }
        }
    }

    function logout() {
        session()->forget('isLogin');
        session()->flash('postsuccess', 'Account Logged Out !');
        return redirect()->route('login');
    }
}
