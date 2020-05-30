<!DOCTYPE html>

<html lang="ar" >

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="describtion" content="Abu Adel">

        <meta name="keywords" content="Abu Adel"> 

        <meta name="author" content="....">

        <title>Abu Adel |Store</title>



          {{-- Styles --}}

          {{Html::style(asset('images/fav.png'))}}

          {{Html::style(asset('css/all.min.css'))}}

          {{Html::style(asset('css/bootstrap.min.css'))}}

          {{Html::style(asset('css/bootstrap-rtl.css'))}}

          {{Html::style(asset('css/hover-min.css'))}}

          {{Html::style(asset('css/media.css'))}}

          {{Html::style(asset('css/aos.css'))}}

          {{Html::style(asset('css/jquery.fancybox.min.css'))}}

          {{Html::style(asset('css/style.css'))}}

    </head>

    <body>

    <div class="loader"><img src="{{asset('images/loader.gif')}}" alt="Loader"/></div>

     <!--upper nav-->

     <section class="uppernav">

       <div class="container pt-1">

         <div class="row">

           <p class="ml-2">إختر اللغة :</p>

           <a href="#">العربية</a>

           <p class="px-2">|</p>

           <a href="{{route('en.contact.branch')}}">english</a>

         </div>

       </div>

     </section> 

    <!--nav start-->

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">

        <a class="navbar-brand" href="{{route('ar.home')}}">

                <img class="img-fluid" src="{{asset('images/logo.png')}}" width="120" height="30" alt="logo">

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">

              <ul class="navbar-nav ml-auto mr-4 text-center">

                <li class="nav-item active">

                <a class="nav-link" href="{{route('ar.contact.about')}}">حكايتنا<br><span style="font-size: .6rem; color: #fff;">بعض المعلومات عنا</span><span class="sr-only">(current)</span></a>

                </li>



                {{-- Category Menu --}}

                <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="{{route('ar.pages.category')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    قائمة المنتجات<br><span style="font-size: .6rem; color: #fff;">مجموعة متنوعة</span> 

                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                      @foreach ($categories as $category)

                        <a class="dropdown-item" 

                        href="{{url('ar/category/products/'). '/' .$category->id}}">

                        {{$category->name_ar}}

                      </a>

                  

                    @endforeach



                  </div>

                </li>

                <li class="nav-item">

                <a class="nav-link" href="{{route('ar.pages.parties_chosen')}}">مختارات الحفلات <br><span style="font-size: .6rem; color: #fff;">بعض المنتجات للحفلات</span></a>

                </li>

                <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="{{route('ar.pages.special_occassions')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        المناسبات الخاصة<br><span style="font-size: .6rem; color: #fff;">منتجات للمناسبات الخاصة</span> 

                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach ($occassions as $occassion)

                            

                        <a class="dropdown-item" href="{{url('ar/occassions/products'). '/' .$occassion->id}}">

                            {{$occassion->name_ar}}

                        </a>

  

                        @endforeach

                    </div>

                </li>

                <li class="nav-item">

                <a class="nav-link" href="{{route('ar.contact.branch')}}">فروعنا<br><span style="font-size: .6rem; color: #fff;">أماكن الفروع</span></a>

                </li>

              </ul>

              <form>

                  <div class="social d-none d-md-block">

                     <a alt="fff" href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a>

                    <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a>

                   <a href="https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a>

                  </div>

                <input type="search" placeholder=" ادخل كلمة بحث" aria-label="Search">

                <button class="hvr-sweep-to-right" type="submit"><i class="fas fa-search"></i></button>

              </form>

            </div>

        </div>

      </nav>

      <!--header start-->

      <header class="header_image">

        @foreach ($header_cover as $cover )          

        <img  class="img-fluid" src="{{url('Uploads/header/branches_page') . '/' . $cover->branches_image}}" alt="header">

        <div class="container">

          <div class="header-content text-center">

            <p>  اماكن الفروع</hp>

          </div>

        </div>

        @endforeach

      </header>

            <div class="row m-auto">

                <div style="background: transparent;font-size: .9rem;" class="col-md border-left product_list text-center border-0">

                    <h4 class="py-3" style="color: #CB913F;">أماكن الفروع</h5>

                    <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الرئيسي القباب الصغري كوبري ابو عادل </h6>

                    <p> هاتف: 01005767101 / 01021264337</p>

                    <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الثاني  - دموه بجوار استوديو زووم</h6>

                    <p> هاتف: 01019000984</p>

                    <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع التالت منيه النصر شارع المحكمه</h6>

                    <p> هاتف: 01015998991</p>

                    <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الرابع ديمشلت امام موقف المنصوره</h6>

                    <p> هاتف: 01027184023</p>

                </div>

           </div>

          </div>

      </section>

      <!--footer-->

  <footer>

    <div class="container py-5">

      <div class="row m-auto justify-content-center text-right">

        <div class="col-md links">

          <h5>اختر الصفحة</h5>

          <p><a href="{{route('ar.home')}}">الصفحة الرئيسية</a></p>

          <p><a href="{{route('ar.contact.about')}}">حكايتنا</a></p>

          <p><a href="{{route('ar.contact.branch')}}">فروعنا</a></p>

          <p><a href="{{route('ar.pages.chef_chosen')}}">اختيار الشيف الشهري</a></p>

          <p><a href="{{route('ar.pages.share_form')}}">شارك في الاستبيان</a></p>

          <p><a href="{{route('ar.contact.contact_us')}}">اتصل بنا</a></p>

        </div>

        <div class="col-md links">

          <h5>قوائم الطعام</h5>

          @foreach ($categories as $category)

        <p>

        <a href="{{url('ar/category/products/'). '/' .$category->id}}">

          {{$category->name_ar}}

        </a>

        </p>

        @endforeach

        </div>

        <div class="col-md info">

  

            <h5 class="my-3">معلومات الاتصال</h5>

            <p>تليفون : 01005767101</p>

            <p>تليفون : 01021264337</p>

          <a href="{{route('ar.contact.about')}}"><button class="mb-2">المزيد..</button></a>

        </div>

        <div class="col-md">

          <h5>تابعنا</h5>

          <div class="row m-auto justify-content-center pt-3">

            <div class="circle hvr-shrink"><a href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a></div>

            <div class="circle hvr-shrink"> <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a></div>

            <div class="circle hvr-shrink"><a href=https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a></div>

          </div>

          <div class="droid">

            <img class="img-fluid mt-4 mb-1" src="{{asset('images/ndroid.png')}}" alt="droid">

            <img class="img-fluid mb-2" src="{{asset('images/app-store.png')}}" alt="droid">

          </div>

        </div>

      </div>

    </div>

  </footer>

  <!--last start-->

  <div class="last">

    <div class="container py-4">

      <div class="row">

        <a class="ml-auto rounded mr-3 pt-2 hvr-sweep-to-right" href="#">^</a>

        <p class="ml-3">© جميع الحقوق محفوظة.</p>

      </div>

    </div>

  </div>

    <body>

        <!--scripts--------------------------------------------------------->

        {{Html::script('js/jquery-3.3.1.slim.min.js')}}

        {{Html::script('js/popper.min.js')}}

        {{Html::script('js/bootstrap.min.js')}}

        {{Html::script('js/main.js')}}

        {{Html::script('js/jquery.fancybox.min.js')}}



        {{Html::script('js/aos.js')}}

      

        <script>AOS.init();</script>  

        

        <!--scripts------------------------------------------------------->

    </body>

</html>