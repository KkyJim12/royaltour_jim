<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-none d-lg-block" style="border-top: 2px solid #6ABCDC;">
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse headerTop">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <h3 class="first-contact mb-0"><i class="fab fa-telegram"></i> <a href='tel:{{$main_tel->content}}'>{{$main_tel->content}}</a></h3>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
               <a class="nav-link p-0" href="https://www.facebook.com/{{$main_facebook->content}}/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link p-0" href="http://line.me/ti/p/{{$main_line->content}}" target="_blank"><i class="fab fa-line"></i></a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<nav class="second-navbar navbar navbar-expand-lg navbar-light bg-light d-none d-md-none d-lg-block">
   <div class="container">
      <div class='col-4'>
         <a class="navbar-brand" href="/"><img src="/assets/img/logo/logo.png" alt="logo"> </a>
      </div>
      <div class='col-8'>
         <a href="{{$nav_banner->banner_link}}" class='bannerTop'>
            <img class="nav-banner-img" src="/assets/img/upload/banner/{{$nav_banner->banner_img}}" alt="">
         </a>
      </div>
   </div>
</nav>

<!-- Mobile -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none">
   <div class="container">
      <a class="navbar-brand mr-auto d-md-none d-lg-none d-md-block d-lg-none" href="/"><img src="/assets/img/logo/logo.png" alt="logo"> </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class='d-lg-none w-100 text-center mt-3'>
         <div class="form-group d-inline-block selectTemp">
            <select class="form-control d-inline-block" onchange="location = this.value;">
               <option>กรุณาเลือกประเทศ</option>
               @foreach($continent as $show_continent)
               <optgroup label="{{$show_continent->continent_name}}">
                  @foreach($show_continent->subcat as $subcat)
                  <option value="/category/{{$subcat->_id}}">{{$subcat->country_name}}</option>
                  @endforeach
               </optgroup>
               @endforeach
            </select>
         </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/">หน้าหลัก</a>
            </li>
            <li class="nav-item mr-3 py-2 d-none d-lg-block">
               <div class="dropdown tempCountry">
                  <a class="nav-link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ทัวร์ต่างประเทศ
                  </a>
                  <div class="dropdown-menu dropdown-nav" aria-labelledby="dropdownMenu2">
                     @foreach($continent as $all_continent)
                     <div class="row px-3">
                        <div class="col-12">
                           <span class="dropdown-item mb-3">{{$all_continent->continent_name}}</span>
                        </div>
                        @foreach($all_continent->subcat as $subcat)
                        <div class="col-3">
                           <a class="dropdown-item cat-link navCountry" href="/category/{{$subcat->_id}}">
                              <img src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">
                              <span>{{$subcat->country_name}}</span>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <hr>
                     @endforeach
                  </div>
               </div>
            </li>
            <li class="nav-item mr-3 py-2 d-lg-none">
               <div class="accordion" id="accordionExample">
                  <button type="button" class="btn form-control nav-link text-left" data-toggle="collapse" data-target="#tourlist" aria-expanded="true" aria-controls="tourlist" style="background-color:ghostwhite">
                     <i class="fas fa-plus-square"></i> ทัวร์ต่างประเทศ
                  </button>
                  <div id="tourlist" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <section>
                        @foreach($continent as $all_continent)
                        <h1>{{$all_continent->continent_name}}</h1>
                        @foreach($all_continent->subcat as $subcat)
                        <a href="/category/{{$subcat->_id}}">{{$subcat->country_name}}</a>
                        @endforeach
                        @endforeach
                     </section>
                  </div>
               </div>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="#">สินค้าและบริการอื่น</a>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/article">บทความ</a>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/how-to-pay">การชำระเงิน</a>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/aboutus">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/gallery">ภาพประทับใจ</a>
            </li>
            <li class="nav-item mr-3 py-2">
               <a class="nav-link" href="/contactus">ติดต่อเรา</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Mobile -->

<!-- Desktop -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-lg-block">
   <div class="container">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-3">
               <a class="nav-link" href="/">หน้าหลัก</a>
            </li>
            <li class="nav-item mr-3 d-none d-lg-block">
               <div class="dropdown tempCountry">
                  <a href="#" class="nav-link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ทัวร์ต่างประเทศ
                  </a>
                  <div class="dropdown-menu dropdown-nav" aria-labelledby="dropdownMenu2">
                     @foreach($continent as $all_continent)
                     <div class="row px-3">
                        <div class="col-12">
                           <span class="dropdown-item mb-3">{{$all_continent->continent_name}}</span>
                        </div>
                        @foreach($all_continent->subcat as $subcat)
                        <div class="col-3">
                           <a class="dropdown-item cat-link navCountry" href="/category/{{$subcat->_id}}">
                              <img src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">
                              <span>{{$subcat->country_name}}</span>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <hr>
                     @endforeach
                  </div>
               </div>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="#">สินค้าและบริการอื่น</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/article">บทความ</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/how-to-pay">การชำระเงิน</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/aboutus">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/gallery">ภาพประทับใจ</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/contactus">ติดต่อเรา</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Desktop -->

<!-- End Navbar -->