<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\News;
use App\Images;
use App\Users;
use App\Likes;

class FinbuController extends Controller
{
    public function ShowUserPage() {
        return Users::all();
    }

    public function GetUser($User_ID) {
        $user = Users::where("User_ID", $User_ID)->first();
        return $user;
    }

    public function AddUser(Request $request) {

        try{
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
        } catch(\Exception $error) {
            return ['insert'=> "error"];
        }
    }

    public function UserLogin($Email) {
        $user = Users::where("Email", $Email)->first();
        return $user;
    }

    public function ShowNews() {
        $news = News::orderBy('News_ID', 'DESC')->get();
        return $news;
    }

    public function AddNews(Request $request) {
        try{
            $news = new News;
            $news->User_ID = $request->User_ID;
            $news->News_Detail = $request->News_Detail;
            $photo = '';
            if($request->news_image != '') {
                $photo = time().".jpg";
                Storage::disk('local')->put('uploads/'.$photo, base64_decode($request->input('news_image')));
            }
            $news->News_Image = $photo;
            $news->save();
            return ['insert' => 'success'];
        } catch(\Exception $error) {
            return ['insert' => $error];
        }
    }
    public function InsertLike(Request $request) {
        try{
            if($request->action == "true") {
                $like = new Likes;
                $like->News_ID = $request->News_ID;
                $like->User_ID = $request->User_ID;
                $like->save();
                $like_amount = Likes::where('News_ID', $request->News_ID);
                return ['insert' => 'success'];
            } else {
                $whereArray = array('User_ID' => $request->User_ID , 'News_ID' => $request->News_ID);
                $like = Likes::where($whereArray)->delete();
                return ['delete' => 'success'];
            }

        } catch(\Exception $error) {
            return ['insert' => $error];
        }
    }
    public function LikeAmount($News_ID, $User_ID) {
        $like_amount = Likes::where('News_ID', $News_ID)->count();
        $isSelfLike = false;
        $whereArray = array('User_ID' => $User_ID , 'News_ID' => $News_ID);
        $checkSelfLike = Likes::where($whereArray)->first();
        if(isset($checkSelfLike)) {
            $isSelfLike = true;
        }
        return response()->json([
            'like-amount' =>  $like_amount,
            'isSelfLike' => $isSelfLike
        ]);
    }

    public function GetNewsOfUser($User_ID) {
        return News::where('User_ID', $User_ID)->orderBy('News_ID', 'DESC')->get();
    }

}
