<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Users;

class FinbuController extends Controller
{
    public function ShowUserPage() {
        return Users::all();
    }

    public function GetUser($User_Email) {
        $user = Users::where("Email", $User_Email)->first();
        return $user;
    }

    public function AddUser(Request $request) {

        // try{
            $user = new Users;

            $user->User_Name      = $request->User_Name;
            $user->User_Firstname = $request->User_Firstname;
            $user->Gender         = $request->Gender;
            $user->User_DoB       = $request->User_DoB;
            $user->Cellphone      = $request->Cellphone;
            $user->Address        = null;
            $user->Email          = $request->Email;
            $user->Password       = $request->Password;
    
            $user->save();
            return ['insert'=> "OK"];
        // } catch(\Exception $error) {
        //     return ['insert'=> "error"];
        // }
    }

    public function UserLogin($Email) {
        $user_password = Users::select("Password")->where("Email", $Email)->first();
        return $user_password;
    }
}
