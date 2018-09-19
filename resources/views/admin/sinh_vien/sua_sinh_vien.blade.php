@extends('admin.layout.home_admin')
@section('content')



<form action="../sua/{{$sinhviena->user_name}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="col-lg-9" style="padding-bottom:120px ;margin-left: 100px">
                        @if(session('thongbao'))
<div class="alert alert-success">
    {{session('thongbao')}}
</div>
@endif
                            <div class="form-group">
                                
                                <label>Mã sinh viên :</label>
                                <input class="form-control" name="msv" placeholder="Please Enter Username" value="{{$sinhviena->user_name}}" />
                            </div>
                               <div class="form-group">
                                <label>Tên sinh viên :</label>
                                <input class="form-control" name="ten" placeholder="Please Enter Username" value="{{$sinhviena->full_name}}" />
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh :</label>
                                <input class="form-control" type="date" id="datepicker" name="ngaysinh" value="{{$sinhviena->birthday}}" />
                            </div>
                            <div class="form-group">
                                <label>Gioi Tinh :</label>
                                <form >
                                <input type="radio" name="gioitinh" value="{{$sinhviena->gender}}"> Nam
                                <input type="radio" name="gioitinh" value="{{$sinhviena->gender}}"> Nữ
                                <input type="radio" name="gioitinh" value="{{$sinhviena->gender}}"> Khác
                                </form>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ :</label>
                                <input class="form-control" name="diachi" placeholder="Please Enter Username" value="{{$sinhviena->address}}" />
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input class="form-control" name="email" placeholder="Please Enter Username" value="{{$sinhviena->email}}" />
                            </div>
                            <div class="form-group">
                                <label>SDT :</label>
                                <input class="form-control" name="sdt" placeholder="Please Enter Username" value="{{$sinhviena->phone_number}}" />
                            </div>
                            <div class="form-group">
                                <label>Lop :</label>
                                <input class="form-control" name="lop" placeholder="Please Enter Username" value="{{$sinhviena->class}}" />
                            </div>
                            <div class="form-group">
                                <label>Khóa :</label>
                                <input class="form-control" name="khoa" placeholder="Please Enter Username" value="{{$sinhviena->school_year}}" />
                            </div>
                           
                            <div class="form-group">
                                <label>Bộ môn</label>
                                
                                <select  id="" class="form-control" name="bomon">
                                    @foreach($bomon as $bm)
                                     <option>{{$bm->ten_bo_mon}}</option>
                                 @endforeach
                             </select>
                            </div>
                            <div class="form-group">
                                <label>Ghi Chu :</label>
                                <input class="form-control" name="ghichu" placeholder="Please Enter Username" value="{{$sinhviena->note}}" />
                            </div>
                            <button type="submit" class="btn btn-default" value="submit">Sua </button>

                    </div>
                 </form>
@endsection