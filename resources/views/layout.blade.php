<!-- ======= BEGIN LOCAL THE TOP HEADER ======= -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bất Động Sản Cần Thơ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 

  <!-- Template Main CSS & JS File -->
  <link href="assets/css/main1.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/mycss.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/flash.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/hieuunganh.css') }}">
  <link rel="stylesheet" href="{{ asset('/js/main.js') }}">
  <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
       
        <h1><img src="{{ asset('/img/dxmt.png')}}" style="width:125%;height:100px;"></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
              <ul>
                    <li><a href="{!! URL::route('index') !!}" class="active">Trang chủ</a></li>
                    <li><a href="{!! URL::route('gioithieu') !!}">Giới Thiệu </a></li>
                    <li class="dropdown"><a href="#"><span>Tin Tức</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                             <li><a href="{!! URL::route('tindatxanh') !!}">Tin Đất Xanh</a></li>
                             <li><a href="{!! URL::route('tintucthitruong') !!}">Tin Tức Thị Trường</a></li>
                             <li><a href="#">Văn Hoá Cộng Đồng</a></li>          
                  
             </ul>
                 </li>
                         <li><a href="{!! URL::route('nhamau') !!}">Nhà Mẫu</a></li>
                         <li><a href="{!! URL::route('lienhe') !!}">Liên Hệ</a></li>
                         @if(Auth::check())
                         <li class="dropdown"><a href="{!! URL::route('quanlybaiviet') !!}"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                       <ul>
                       <form action="{!! route('thoat') !!}" method="POST">
                       <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                         <li><button class="dropdown-item" href="#">Đăng Xuất</button></li>
                         <form>
                         <ul>
</li>
                      @endif
             </ul>
                          <label class="icon_btn" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
                         <i class="fas fa-bars ms-1"></i>
        </label>
              
      </nav>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= dữ liệu bên trong thẻ header ======= -->
     <section class="hero d-flex align-items-center">
                        <div class="container">
						
						
                        </div><!-- End Stats Item -->           
  </section><!-- End Hero Section -->
    
	
 <!-- ======= END THE TOP HEADER ======= -->






 <!-- ======= Footer ======= -->
 
  @yield('bdscantho')
  @yield('tindatxanh')
  @yield('gioithieu')
  @yield('quanlybaiviet')
  @yield('lienhe')
 <!-- Begin Footer -->
  <footer id="footer" class="footer">
     <div class="container">
          <div class="#">
                <div class="#">

                     <a href="index.html" class="logo d-flex align-items-center"> <span>Liên Hệ</span>               
                     </a>
                        <h3>Công ty Cổ Phần Bất Động Sản Cần Thơ</h3>
                        <p class="font-weight-italic">Địa chỉ:29C-Mậu Thân-Phường An Hòa-Tp Cần Thơ</p>
                                          
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
           </div>  

       

      </div>
</div>
   
      
 

    

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><img src="{{ asset('/img/tenlua.jpg')}}" style="width:90px;height:90px;"></a>

  <div id="preloader"></div>

  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
 <script src="{{ asset('/js/main.js') }}"></script>
 <!-- ======= End Footer ======= -->

</body>

</html>