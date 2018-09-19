@extends('admin.layout.home_admin')
@section('content')
<div class="panel-footer" style="width: 960px ;margin-right: 10px" >
      <h2 style="text-align:center; padding:20px">Danh Sách Sinh Viên  </h2>
      <form action="them_sv" method="post">
        <input type="submit" name="Them" value="Them" style="float: right ;margin-bottom:10px ">  
          {{ csrf_field() }}
      </form>
                  <table class="table" style="text-align: center" style="width: 900px">
                    <thead class="thead-inverse" style="background-color:black; color:white">    
                        <tr>
                            <td style="text-align:center">STT</td>
                            <td style="text-align:center">MSSV</td>
                            <td style="text-align:center">Họ tên</td>
                            <td style="text-align:center">Ngày Sinh</td>
                            <td style="text-align:center">Giới Tính</td>
                            <td style="text-align:center">Địa Chỉ</td> 
                            <td style="text-align:center">SDT</td>
                            <td style="text-align:center">Email</td>
                            <td style="text-align:center">Lớ́p</td>
                             <td style="text-align:center">Khóa</td>
                            <td style="text-align:center">Bộ Môn</td>
                            <td style="text-align:center">Ghi Chú</td>
                            <td style="text-align:center" colspan="2">Thao Tac</td>
                        </tr>
                        {{ csrf_field() }}
                        </thead>

                        @foreach($sinhvien as $sv)
                        <tr>
                            <td>{{$sv->id}}</td>
                            <td>{{$sv->user_name}}</td>
                            <td>{{$sv->full_name}}</td>
                            <td>{{$sv->birthday}}</td>
                            <td>{{$sv->gender}}</td>
                            <td>{{$sv->address}}</td>
                            <td>{{$sv->phone_number}}</td>
                            <td>{{$sv->email}}</td>
                            <td>{{$sv->class}}</td>
                            <td>{{$sv->school_year}}</td>
                            <td>{{$sv->tenbomon}}</td>
                            <td>{{$sv->ghichu}}</td>
                            
                            <td><a href="sua_sv/{{$sv->user_name}}"> Sửa</a> <a href="xoa_sv/{{$sv->user_name}}">Xóa </a></td>
                           
                        </tr>
                        @endforeach
 
                    
                    <tbody></tbody>
                  </table>
              </div>
        <div class="panel-footer" style="width: 950px">
          <div class="row">
            <div class="col col-xs-4">Trang 1 của 5 </div>
            <div class="col col-xs-8">
              <ul class="pagination hidden-xs pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              <ul class="pagination visible-xs pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
@endsection