<!DOCTYPE html>

<html lang="ar" >

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="describtion" content="Abu Adel">

        <meta name="keywords" content="Abu Adel"> 

        <meta name="author" content="....">

        <title>Abu Adel</title>



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

           <a href="{{route('en.pages.parties_chosen')}}">english</a>

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

        <img  class="img-fluid" src="{{url('Uploads/header/party_page') . '/' . $cover->party_image}}" alt="header">

        <div class="container">

          <div class="header-content text-center">

            <p> مختارات الحفلات</hp>

          </div>

        </div>

        @endforeach

      </header>      <!--products-->

      <section class="products">

          <div class="container py-4 text-right">

              <div class="row justify-content-center m-auto">

                  <div class="col-md-3 order-2 order-md-1 border-left product_list">

                      <p class="border-bottom pt-4"><a href="{{route('ar.home')}}">الصفحة الرئيسية <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                  <p class="border-bottom"><a href="{{route('ar.contact.about')}}"> حكايتنا <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                  <p class="border-bottom"><a href="{{route('ar.pages.category')}}">  قائمة المنتجات <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                      <p class="border-bottom"><a href="{{route('ar.pages.parties_chosen')}}">مختارات الحفلات <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                  <p class="border-bottom"><a href="{{route('ar.pages.special_occassions')}}">المناسبات الخاصة <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                  <p class="border-bottom"><a href="{{route('ar.contact.branch')}}">فروعنا <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                      <p class="border-bottom"><a href="{{route('ar.pages.chef_chosen')}} ">اختيار الشيف الشهري <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                      <p class="border-bottom"><a href=" {{route('ar.pages.share_form')}} "> شارك في الاستبيان <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                      <p class="border-bottom"><a href=" {{route('ar.contact.contact_us')}} ">اتصل بنا <span style="float: left;font-size: .7rem;"><i class="fas fa-less-than"></i></span></a></p>

                  </div>

                  <div class="col-md order-1 order-md-2 products_gallery">

                    <div class="row text-center pt-4">

                      @foreach ($parties as $party )

          

                      <div class="col-md-4">

                        <div style="overflow: hidden;border: solid 1px #D69942;">

                        <a href="{{ asset('Uploads/parties/'. $party->image)}}"  

                        data-caption=" <h5>{{$party->name_ar}}</h5>{{$party->price}} جنيه "

                          data-fancybox="gallery">



                         

                            <img class="img-fluid hvr-grow" src="{{ asset('Uploads/parties/'. $party->image)}}" alt="products">

                          </a>

                        </div>

                        <h5 class="py-2"> {{$party->name_ar}} </h5>

                        <p>{{$party->price}} جنيه</p>

                      </div>

                

                      @endforeach

                   

                     

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