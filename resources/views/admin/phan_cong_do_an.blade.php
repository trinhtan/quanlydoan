@extends('admin.layout.home_admin')

@section('content')
                  <h2 style="text-align:center; padding:20px">Danh sách phân công đồ án</h2>
                  <table class="table" style="text-align: center" >
                    <thead class="thead-inverse" style="background-color:black; color:white">
                            
                        <tr>
                            <td style="text-align:center">STT</td>
                            <td style="text-align:center">Họ tên</td>
                            <td style="text-align:center">Lớp/Khóa</td>
                            <td style="text-align:center">Tên Đề Tài</td>
                            <td style="text-align:center">GVHD</td>
                            <td style="text-align:center">Enamil</td>
                             <td style="text-align:center">Loại Đồ Án</td>
                            <td style="text-align:center">Học Kỳ</td>
                            <td style="text-align:center">Điểm</td>
                            <td style="text-align:center">File Báo Cáo</td> 
                        </tr>
 
                    </thead>
                    <tbody></tbody>
                  </table>
@endsection
                      