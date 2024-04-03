<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function savemeyes(Request $request){
        $role = $request->sadmin;
        $who = User::where('id' , $role)->get()->first();
        $who->name = !is_null($request->name)  ?  $request->name : $who->name;
        $who->family = !is_null($request->family)  ?  $request->family : $who->family;
        $who->phone_number = !is_null($request->number)  ?  $request->number : $who->phone_number;
        $who->email = !is_null($request->password)  ?  $request->email : $who->email;
        $who->role = 1;
        $who->password = !is_null($request->email)  ?  Crypt::enCrypt($request->password) : $who->password ;
        $who->save();
        return back();
    }
    public function save_admin(Request $request)
    {
        $User = new User;
        $User->name = $request->name;

        $User->family = $request->family;
        $User->phone_number = $request->number;
        $User->email = $request->email;
        $User->role = $request->role;
        $User->password = Crypt::enCrypt($request->password);
        $User->save();
        return back();
    }
    public function accessToDashboard(Request $request)
    {
        $name = $request->name;
        $pass = $request->password;
        if (is_null($pass)) {
            return back()->with(
                [
                    'error'=>true,
                ]
                );
        }
  
        $admin = User::where('name' , $name)->get()->first();
        if ($admin) {
           $password = $admin->password;
           $thispass = Crypt::deCrypt($password);
            if ($thispass == $pass) {
                auth::login($admin);
                return redirect()->route('panel');

            }
            else
            {
                return back()->with(
                    [
                        'error'=>true,
                    ]
                    );
            }
    }
    else
    {
        return back()->with(
            [
                'error'=>true,
            ]
            );
    }
    }
}
