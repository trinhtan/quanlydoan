<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\bo_mon;

class home_dssvController extends Controller
{
	 public function dssv(){
	 	$bomon=bo_mon::all();
	 	$sinhvien1 = SinhVien::find(1);
	 	$sinhvien = SinhVien::all();
	 	foreach ($sinhvien as $sv) {
	 		$sv->tenbomon = bo_mon::find($sv->id_bo_mon)->ten_bo_mon;
	 	}
    	return view('admin.sinh_vien.danh_sach_sv',['sinhvien'=>$sinhvien,'sinhvien1'=>$sinhvien1,'bomon'=>$bomon]);
    }
}
