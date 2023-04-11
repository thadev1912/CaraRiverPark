@extends('layout')
   @section('quanlybaiviet')
<div class="container">
         
<div class="row">  <!--||VÙNG CHIA DIV THÀNH 2 PHẦN||-->
          <div class=" col-sm-2 border text-uppercas">
          <ul class="list-group">
               <li class="list-group-item active">
               DANH MỤC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="badge"><i class='fas fa-angle-double-down' style='font-size:14px'></i></span>
                      
               </li>
               <li class="list-group-item list-group-item"><a class="#" href="#">Tin Đất Xanh</a></li>
               <li class="list-group-item list-group-item"><a href="#">Tin Tức Thị Trường</a></li>
               <li class="list-group-item list-group-item"><a href="#">Tin Tức Cộng Đồng</a></li>

          </ul>
                 
               
           
                           <div class="card-body">
                           
</div>
                          
          </div>
          <div class ="col-sm-10 border ">
          <div class="section-header">
                                          
                                          <h2>  TIN ĐẤT XANH</h2>
                                 </div>
                                 <div class="title text-uppercase">
                                       <h3>{!!$tt->title !!}</h3>
                                 </div>
                                 <div class="content text-justify ">
                                      <p> {!!$tt->noidung !!}</p>
                                 </div>

@endsection