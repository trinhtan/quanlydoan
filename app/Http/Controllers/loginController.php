<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\SinhVien;
use App\bo_mon;

class loginController extends Controller
{
    public function login(Request $request){
       /* $this->validate($request,[
            'username'=>'required|min:1|max:10',
            'password'=>'required|min:1|max:20'
        ],['username.required'=>"Bạn chưa nhập username",
            'password.required'=>"Bạn chưa nhập password",
            'username.min'=> "Username không  được ít hơn 1 ký tự",
            'username.max'=> "Username không được nhiều hơn 10 ký tự",
            'password.min'=> "Password không được ít hơn 1 ký tự",
            'password.max'=> "Password không được nhiều hơn 20 ký tự"
        ]);
        */

    	$username = $request['username'];
    	$password = $request['password'];
    	if(Auth::attempt(['name'=>$username,'password'=>$password])){

    		if(substr($username,0,2) == "SV")

                //$all_subject = bo_mon::select('ten_bo_mon_viet_tat')->get()->toArray();

    			//view('layouts.navbar',['all_subject'=>$all_subject]);*/
				$bomon=bo_mon::all();
				$sinhvien1 = SinhVien::find(1);
                return view('admin.layout.home_admin',['bomon'=>$bomon,'sinhvien1'=>$sinhvien1]);
    	}	
    	else
    		return view('login.login',["error"=>"<div style='text-align:center; margin-top:100px; margin-left: 400px; margin-right:400px'class='p-3 mb-2 bg-info text-white' style='width: 500px'>Username hoặc password sai</div>"]);
    }

}
