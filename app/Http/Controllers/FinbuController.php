<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin_Accounts;
use App\Users;

class FinbuController extends Controller
{

    public function Login() {
        return view('login');
    }

    public function LoginAccess(Request $request) {
        $admin_account = Admin_Accounts::where('Email', $request->email)->first();
        if(isset($admin_account)) {
            $request->session()->put('role', 'ADMINISTRATOR');
            return redirect(Route('show-home'));
        } else {
            return redirect(Route('login'));
        }
    }

    public function ShowHomePage() {
        if(session()->has('role') && session()->get('role', 'ADMINISTRATOR')) {
            return view('home');
        } else {
            return redirect(Route('login'));
        }
    }

    public function ShowUserPage() {
        if(session()->has('role') && session()->get('role', 'ADMINISTRATOR')) {
            $users = Users::all();
            $stt = 0;
            return view('users', compact('users', 'stt'));
        } else {
            return redirect(Route('login'));
        }
        
    }

    // public function AddUser(Request $request) {
    //     try{
    //         $user = new Users;

    //         $user->User_Name = $request->exampleInputName;
    //         $user->Email = $request->exampleInputEmail1;
    //         $user->Gender = 1;
    //         $user->User_DoB = '2002-02-02';
    //         $user->Regis_Date = '2002-02-02';
    //         $user->Cellphone=0;
    //         $user->Address = 0;
    //         $user->Password = $request->exampleInputPassword1;
    
    //         $user->save();
    //         return back()->with('success', "Thành công!!");
    //     } catch(\Exception $error) {
    //         return back()->with('error', "Thất bại!!");
    //     }
        
    // }
}
