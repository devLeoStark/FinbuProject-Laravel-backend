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

    public function GetUser($User_ID) {
        $user = Users::find($User_ID);
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
}
