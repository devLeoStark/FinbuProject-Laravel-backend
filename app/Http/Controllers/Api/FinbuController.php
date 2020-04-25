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
        try{
            $user = new Users;

            $user->User_Name = $request->exampleInputName;
            $user->Email = $request->exampleInputEmail1;
            $user->Gender = 1;
            $user->User_DoB = '2002-02-02';
            $user->Regis_Date = '2002-02-02';
            $user->Cellphone=0;
            $user->Address = 0;
            $user->Password = $request->exampleInputPassword1;
    
            $user->save();
            return ['insert'=> "Thành công!!"];
        } catch(\Exception $error) {
            return ['insert'=> "Thất bại!!"];
        }
    }
}
