<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="describtion" content="Abu Adel">
        <meta name="keywords" content="Abu Adel"> 
        <meta name="author" content="Abu Adel">
        <title>Abu Adel</title>
        <link rel="icon" href="images/fav.png">
        <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/hover-min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/media.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/en.css')}}">
    </head>
    <body>
      <div class="loader"><img src="images/loader.gif" alt="Loader"/></div>
     <!--upper nav-->
     <section class="uppernav">
       <div class="container pt-1">
         <div class="row">
           <p class="pr-1">choose language :</p>
           <a href="#">english</a>
           <p class="px-2">|</p>
           <a href="#">العربية</a>
         </div>
       </div>
     </section> 
    <!--nav start-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img class="img-fluid" src="images/logoen.png" width="130" height="30" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item active">
                  <a class="nav-link" href="تعرف علينا.html">Our Story<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="قائمة المنتجات.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    OUR MENU<br><span style="font-size: .6rem; color: #fff;">Products variety</span> 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="التورت.html">cakes</a>
                    <a class="dropdown-item" href="الجاتوه.html">gateaux</a>
                    <a class="dropdown-item" href="تورت الأيس كريم.html">ice cream cakes</a>
                    <a class="dropdown-item" href="الشرقي.html">oriental sweets</a>
                    <a class="dropdown-item" href="مخبوزات طازجة.html">bakery</a>
                    <a class="dropdown-item" href="الشوكولاته.html">Chocolate Products</a>
                    <a class="dropdown-item" href="الغربي.html">western</a>
                    <a class="dropdown-item" href="بتي فور وسابليه.html">petit fours & sables</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="مختارات الحفلات.html">PARTY SELECTION<br><span style="font-size: .6rem; color: #fff;">Some items for your party</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="المناسبات الخاصة.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SPECIAL OCASIONS<br><span style="font-size: .6rem; color: #fff;">Products for Special ocasions</span> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="أعياد الميلاد.html">birthday & personalised cakes</a>
                      <a class="dropdown-item" href="تورت الأطفال.html">kids cakes</a>
                      <a class="dropdown-item" href="تورت الأرقام والحروف.html">letters & numbers cakes</a>
                      <a class="dropdown-item" href="تورت الزفاف والخطوبة.html">wedding & engagement cakes</a>
                      <a class="dropdown-item" href="تورت الحنة.html">henna cakes</a>
                      <a class="dropdown-item" href="تورت السبوع.html">baby shower cakes</a>
                      <a class="dropdown-item" href="تورت تيشرتات الفرق.html">teams t-shirts cakes</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="فروعنا.html"> STORES LOCATIONS<br><span style="font-size: .6rem; color: #fff;">Find Our Branches Locations</span></a>
                </li>
              </ul>
              <form>
                <div class="social d-none d-md-block">
                  <a alt="fff" href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a>
                  </div>
                <div class="row ml-1">
                  <input type="search" placeholder="search" aria-label="Search">
                  <button class="hvr-sweep-to-right m-0" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>
        </div>
      </nav>
      <!--header start-->
      <header>
        <img class="img-fluid" src="images/header.jpg" alt="header">
      </header>
      <!--gallery start-->
      <section class="gallery">
        <div class="container py-4">
          <div class="row">
            <div class="col-md-3" data-aos="fade-up">
              <div class="firstgal">
              <a href="التورت.html"><img class="img-fluid mb-3 hvr-backward mt-3" src="{{url('images/تورتة رويال موس شيكولاتة مع موس وايت.jpg')}}" alt="g"><h5 class="pb-2">cakes</h5></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--chef-->
      <section class="chef py-4">
        <div class="container py-5 text-center">
          <a href="اختيار الشيف الشهري.html"><button class="hvr-wobble-bottom">Chef’s pick <br>of th month</button></a>
        </div>
      </section>
      <!--store-->
      <section class="store">
        <div class="container py-5">
          <div class="row m-auto justify-content-center text-center">
            <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
              <div class="firstgal">
                <a href="اتصل بنا.html"><img class="img-fluid hvr-grow" src="images/بسبوسة قشطة.jpg" alt="store"></a>
              </div>
              <h4 class="pt-2">Contact Us Now</h4>
            </div>
            <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
              <div class="firstgal">
                <a href="شارك في الاستبيان.html"><img class="img-fluid hvr-grow" src="images/بيتفور شكولاتة مشكل.jpg" alt="store"></a>
              </div>
              <h4 class="pt-2">Take Our Survey Now</h4>
            </div>
            <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
              <div class="firstgal">
                <a href="فروعنا.html"><img class="img-fluid hvr-grow" src="images/تورتة موس فستق.jpg" alt="store"></a>
              </div>
              <h4 class="pt-2">our stores</h4>
            </div>
          </div>
        </div>
      </section>
      <!--form-->
      <section class="form">
        <div class="container py-5">
          <div class="row justify-content-center m-auto">
            <div class="col-md mb-3">
              <iframe  height="270" src="https://www.youtube.com/embed/JqGDdU5_QmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div style="overflow: hidden;" class="col-md">
              <form class="py-4" data-aos="fade-right">
                <h3 style="color: #CB913F;">News letter</h3>
                <input class="py-1" type="text" placeholder="your name">
                <input class="my-3 py-1" type="email" placeholder="email address"><br>
                <input class="sub py-1 mt-1 rounded" type="submit" value="sign in">
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--footer-->
      <footer>
        <div class="container py-5">
          <div class="row m-auto justify-content-center">
            <div class="col-md links">
              <h5> select a page</h5>
              <p><a href="index.html"> home</a></p>
              <p><a href="تعرف علينا.html">our story</a></p>
              <p><a href="فروعنا.html">stores Locations</a></p>
              <p><a href="اختيار الشيف الشهري.html">Chef’s Pick of the Month</a></p>
              <p><a href="شارك في الاستبيان.html">Our Survey</a></p>
              <p><a href="اتصل بنا.html">contact us</a></p>
            </div>
            <div class="col-md links">
              <h5>our menu</h5>
              <p><a href="التورت.html">cakes</a></p>
            </div>
            <div class="col-md info">
              <h5>contact info</h5>
              <p>Tel: +02 01005767101 </p>
              <p>Tel: +02 01021264337 </p>
              <a href="قائمة المنتجات.html"><button class="mb-2">read more..</button></a>
            </div>
            <div class="col-md">
              <h5>follow us</h5>
              <div class="row m-auto justify-content-center pt-3">
              <div class="circle hvr-shrink"><a href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a></div>
              <div class="circle hvr-shrink"> <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a></div>
              <div class="circle hvr-shrink"><a href=https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a></div>                
              </div>
              <div class="droid">
                <p><img class="img-fluid mt-4 mb-1" src="images/ndroid.png" alt="droid"></p>
                <p><img class="img-fluid mb-2" src="images/app-store.png" alt="droid"></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--last start-->
      <div class="last">
        <div class="container py-4">
          <div class="row">
            <p class="ml-3">all rights reserved. ©</p>
            <a class="rounded mr-3 pt-2 hvr-sweep-to-right" href="#">^</a>
          </div>
        </div>
      </div>
    <body>
        <!--scripts-->
        <script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{URL::asset('js/popper.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        <script src="{{URL::asset('js/aos.js')}}"></script>
        <script>AOS.init();</script>
        <!--scripts-->
    </body>
</html>