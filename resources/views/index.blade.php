@extends('layout')
@section('bdscantho')
<div class="container">
<section>
    <!-- ======= GIỚI THIỆU DỰ ÁN ======= -->
    
      <div class="container d-flex" data-aos="fade-up">

               <div class="row">
                     <div class=" logo-flash col-lg-6 position-relative" data-aos="zoom-in-down" data-aos-duration="1500" >
                                    <img src="{{ asset('/img/cara7.jpg')}}" style="width:500px;height:600px;" class="img-fluid justify-content-center" alt="">
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                     </div>
                          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                            <div class="section-header" >
                                          
                              <h2>  CARA RIVER PARK</h2>
                     </div>
                            <p class="text-justify font-italic">Căn Hộ Chung Cư Cao Cấp CARA River Park Là Dự Án Căn Hộ Đầu Tiên theo Định Hướng Căn Hộ Phân Khúc Cao Cấp Tại Cần Thơ River Park Sở Hữu Vị Trí Đắc Địa, Độc Tôn, Trung Tâm Của Trung Tâm Thành Phố, Nằm Trong Khu Đô Thị Hưng Phú - thừa hưởng Các Tiện Ích Hiện Đại Và An Ninh Khép Kín. Dự Án Chính Là Tuyên Ngôn Cho Phong Cách Sống Thượng Lưu Mới.<br><br>

Căn Hộ Cao Cấp CARA Cái Răng Cần Thơ –  Sẽ Là Biểu Tượng Của Sự Hoàn Hảo, Đáp Ứng Tiêu Chí Cao Về Cuộc Sống Đẳng Cấp. Với Thiết Kế Hiện Đại, Sang Trọng, Hứa Hẹn Mang Lại Lợi Nhuận Đầu Tư Cao Và An Cư Cho Chủ Nhân.</p>
                                               
                        </div>
                 </div>

         </div>
		 	  	      
   

       
  

         

    <!-- ======= Frequently Asked Questions Section ======= -->
   
  </section>
  <!-- ======= BAT DAU KHU VUC TRANG TIEN ICH ======= -->
   <!--bắt đầu slide --->
   <div class="container">
    <div class="section-header" data-aos="fade-up" >
     <div data-aos="fade-right"
     data-aos-duration="2000"
     data-aos-easing="ease-in-sine"><h2>TIỆN ÍCH NỘI KHU</h2></div>
</div>
   <div class="gallery">
    <div class="gallery-container">
      <img class="gallery-item gallery-item-1" src="{{ asset('/img/cara1.jpg')}}" data-index="1">
      <img class="gallery-item gallery-item-2" src="{{ asset('/img/cara2.jpg')}}" data-index="2"><!--image main-->
      <img class="gallery-item gallery-item-3" src="{{ asset('/img/cara3.jpg')}}" data-index="3">
      <img class="gallery-item gallery-item-1" src="{{ asset('/img/cara4.jpg')}}" data-index="4">
      <img class="gallery-item gallery-item-3" src="{{ asset('/img/cara5.jpg')}}" data-index="5">
      <img class="gallery-item gallery-item-3" src="{{ asset('/img/cara6.jpg')}}" data-index="6">
      <img class="gallery-item gallery-item-1" src="{{ asset('/img/cara7.jpg')}}" data-index="7">
      <img class="gallery-item gallery-item-3" src="{{ asset('/img/cara12.jpg')}}" data-index="8">
    </div>
    <div class="gallery-controls">
          <button class="gallery-controls-VềTrước"><img src="{{ asset('/img/prev.jpg')}}" style="width:53px;height:53px;"></button>
          <button class="gallery-controls-KếTiếp"><img src="{{ asset('/img/next.png')}}" style="width:50px;height:50px;"></button>
    </div>
  </div>
</div>

  <script src="{{ asset('/js/carousel.js') }}"></script>
             <!--kết thúc slide --->

                <!--khu vực thể tổng quan dự án phần 1-->
                <div class="container">
    <div class="section-header ">
            
            <div data-aos="fade-right"
             data-aos-duration="2000"
             data-aos-easing="ease-in-sine"><h2>TỔNG QUAN DỰ ÁN</h2></div>
                           <div class="row gy-12">

                           <div class="col-lg-7 "><!--Bắt đầu vị trí địa lý-->  
                           <div data-aos="zoom-in"
                           data-aos-duration="2000"
                        data-aos-easing="ease-in-sine"> <img src="{{ asset('/img/cara10.jpg')}}" style="width:=750px;height:450px;" class="img-fluid justify-content-center" alt=""></div>
                                 
                         
                          </div><!--kết thúc row vị trí địa lý--> 
                         
                 <div class="col-lg-5" data-aos="flip-left"
                              data-aos-easing="ease-out-cubic"
                                  data-aos-duration="2000">
                                  <p class="text-justify font-italic">Cara River Park là dự án chung cư  4 mặt tiền – Nằm ngay khu đô thị Cần Thơ do ĐXMT làm chủ đầu tư.<br><br>

                                  Với số tầng đa dạng và view 04 mặt tiền (view trung tâm Cần Thơ, view sông Hậu, view Nam Long) đáp ứng đa dạng nhu cầu về nhà ở cho người dân. Diện tích đa dạng và loại hình sản phẩm từ 1 – 3 phòng ngủ là chìa khóa mở ra cánh cổng cho sự an lành và phú quý<br><br>Chung cư Cara River Park Cái Răng được xây dựng trên quỹ đất sạch 100%, với vị trí độc tôn và ngày càng có ít dự án tại trung tâm TP Cần Thơ được phê duyệt, dự án mang đến cơ hội đầu tư có lợi nhuận khủng.</p>
                                                    </div>
</div>
                         <!--kết thúc khu vực thể tổng quan dự án-->
                         <div class="row">
                          <div class="col-lg-6">
                          <div class="section-header" data-aos="flip-right" >
                                          
                                          <h2>  VỊ TRÍ ĐẮC ĐỊA</h2>
                                 <p class="text-justify font-italic">
Được ví là viên ngọc sáng của Cần Thơ – Chung cư River Park nằm ngay mặt tiền đường xxx, thuộc khu Hưng Phú, Cái Răng. Kết nối trục đường Võ Nguyên Giáp tiến thẳng vào trung tâm thành phố. Đáp ứng đủ 03 tiêu chí độc nhất của bất động sản: Nhất cận thị – Nhị cận giang – Tam cận lộ.
</div>
<div class="section-header" data-aos="flip-right" >
                                          
                                          <h2>  KẾT NỐI GIAO THƯƠNG SẦM UẤT</h2>
                                 
                                 <p class="text-justify font-italic">
Từ khu Hưng Phú có thể đi đến nút giao IC3 và kết nối trung tâm quận Ninh Kiều chưa đến 5 phút di chuyển, với các tiện ích nội khu có sẵn, không gian xanh mát. Chung cư Hưng Phú là điểm sống lý tưởng cho người dân TP Cần Thơ.</p></div>
</div>
                         <div class="col-lg-6" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
               
                       <img src="{{ asset('/img/bando.png')}}" style="width:500px;height:410px;" class="img-fluid border img-thumbnail" alt="">
                </div>

                </div>
        <!--khu vực thể tổng quan dự án phần 2-->
           
  <!--bắt đầu khu vực trang tin tuc --->
 

<div class="section-header" data-aos="fade-up" data-aos-duration="6000">
                                          
                                          <h2>  TIN TỨC THỊ TRƯỜNG</h2>

                                         
                                        
                                            
                                           
                                 </div>
                                
                                 <div class="news row "><!--create one line -->
                                            <!--thông tin đầu tiên-->
                                            @foreach ($news as $ttt)
                                      <div class="subnew col-lg-4" data-aos="fade-up-left" data-aos-durartion="6000">
                                            <div class="card">
                                                    <div class="card-img">
                                                    <figure><img src="../public/img/images/{{$ttt->hinh}}" style="width:100%;height:300px;" alt="" class="img-fluid"><figure>
                                                    </div>
                                                    <div class="content text-justify" style="height:180px">
                                                          <h4><a href="{!! URL::route('chitietbaivietthitruong', $ttt->id) !!}" class="stretched-link">{{$ttt->title}}</a></h4>
                                                         
                                                    </div>
                                                      </div>
                                      </div><!-- End  -->
                                      @endforeach     
                                     
                                   
                                        
                                        
                          
                                      
                                      

                              
                               


   <!--ket thuc khu vực trang tin tuc --->
  
             <!--bắt đầu slide
  <div class="container"  >
    <div class="section-header" data-aos="fade-up" >
            
     <div data-aos="fade-right"
     data-aos-duration="2000"
     data-aos-easing="ease-in-sine"><h2>TIỆN ÍCH NỘI-NGOẠI KHU</h2></div>
             <div class="slide"   >
                         <img class="show img-thumbnail active" src="{{ asset('/img/cara1.jpg')}}">
                         <img class="show img-thumbnail" src="{{ asset('/img/cara8.jpg')}}">
                         <img class="show img-thumbnail" src="{{ asset('/img/cara9.jpg')}}" >                  
                     
                </div>
                <div class="button">
                    <i class="fa fa-chevron-circle-left" onclick="next()"></i>   
                    <i class="fa fa-chevron-circle-right" onclick="prev()"></i>         
                 
                   
             
          </div>
         
    </div>
    <script src="{{ asset('/js/myjs.js') }}"></script>
     --->
  

              

<!--khu vuc trang tin tuc-->

<!--kết thúc trang tin tưc-->
   
                                      
                                      



  <script>
  AOS.init();
</script>
</div>
@endsection
