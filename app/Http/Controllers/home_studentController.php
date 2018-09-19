<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\bo_mon;

class home_studentController extends Controller
{
     public function homestudent(){
     	$bomon=bo_mon::all();
     	$sinhvien1 = SinhVien::where('user_name','SV20155615')->first();
    	return view('admin.phan_cong_do_an',['sinhvien1'=>$sinhvien1,'bomon'=>$bomon]);
    }
}
