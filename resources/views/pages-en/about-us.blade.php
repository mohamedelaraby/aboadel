<!DOCTYPE html>

<html lang="en" >

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

             {{Html::style(asset('css/hover-min.css'))}}

             {{Html::style(asset('css/media.css'))}}

             {{Html::style(asset('css/aos.css'))}}

             {{Html::style(asset('css/jquery.fancybox.min.css'))}}



             {{Html::style(asset('en/css/style.css'))}}

        

    </head>

    <body>

      <div class="loader"><img src="{{asset('images/loader.gif')}}" alt="Loader"/></div>

      <!--upper nav-->

      <section class="uppernav">

        <div class="container pt-1">

          <div class="row">

          <p class="mr-2">Choose language:</p>


          <a href="{{route('ar.contact.about')}}">العربية</a>

            <p class="px-2">|</p>

            <a href="#">English</a>

          </div>

        </div>

      </section>  

    <!--nav start-->

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">

          <a class="navbar-brand" href="{{route('en.home')}}">

            <img class="img-fluid" src="{{asset('images/logo.png')}}" width="120" height="30" alt="logo">

        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto text-center">

                <li class="nav-item active">

                  <a class="nav-link" href="{{route('en.contact.about')}}">Our Story<br><span style="font-size: .6rem; color: #fff;">Some info Our Story</span><span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="{{route('en.pages.category')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    OUR MENU<br><span style="font-size: .6rem; color: #fff;">Products variety</span> 

                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @foreach ($categories as $category)

                    <a class="dropdown-item" 

                    href="{{url('en/category/products/'). '/' .$category->id}}">

                    {{$category->name_en}}

                  </a>

                 

                

                

                @endforeach

                  </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{route('en.pages.parties_chosen')}}">PARTY SELECTION<br><span style="font-size: .6rem; color: #fff;">Some items for your party</span></a>

                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="{{route('en.pages.special_occassions')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                      SPECIAL OCCASSIONS<br><span style="font-size: .6rem; color: #fff;">Products for Special ocasions</span> 

                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                      @foreach ($occassions as $occassion)

                          

                      <a class="dropdown-item" href="{{url('en/occassions/products'). '/' .$occassion->id}}">

                          {{$occassion->name_en}}

                      </a>



                      @endforeach

                  </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{route('en.contact.branch')}}"> STORES LOCATIONS<br><span style="font-size: .6rem; color: #fff;">Find Our Branches Locations</span></a>

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

 <header class="header_image">

  @foreach ($header_cover as $cover )          

  <img class="img-fluid" src="{{url('Uploads/header/aboutus_page') . '/' . $cover->aboutus_image}}" alt="header">

<div class="container">

    <div class="header-content">

      <p> Our Story</p>

    </div>

  </div>

  @endforeach

</header>

<!--products-->

<section class="products">

    <div class="container py-4">

        <div class="row justify-content-center m-auto">

            <div class="col-md-3 order-2 order-md-1 border-left product_list">

                <p class="border-bottom pt-4"><a href="{{route('en.home')}}">home<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href=" {{route('en.contact.about')}}">Our Story<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.pages.category')}}">our menu<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.pages.parties_chosen')}}">Party selection<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.pages.special_occassions')}}">special ocasions<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.contact.branch')}}">stores locations <span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.pages.chef_chosen')}}">Chef’s Pick of the Month<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.pages.share_form')}} ">Our Survey<span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

                <p class="border-bottom"><a href="{{route('en.contact.contact_us')}} ">contact us <span style="float: right;font-size: .7rem;"><i class="fas fa-greater-than"></i></span></a></p>

            </div>

            <div class="col-md order-1 order-md-2 about_us mt-4">

                <h5 style="color: #CB913F;" class="p-3">history</h5>

                <div class="container">

                  <p style="font-size: .9rem;" class="border p-3 text-muted">We started in 2004. Our goal was to provide for the market's needs of Kahk, Biscuits, Petfor and western, both on holidays and ...

                    Morning. In 2014 was the opening of the first of our branches in the Demoh way dikirnis El Mansoura we started in the production of sweets eastern

                     and Western the quality characteristic and suitable price.

                    

                     In 2015, It was the opening of our branch.

                    The main or so-called "Factory branch" is the mini-domes / dikirnis al-Mansoura road .

                     We started going into other areas like baked goods and chocolate with different kinds of sweets . 2017 our 

                    The opening of our branch was the third victory of the victories In minayt Elnasssar . 

                    In 2018, we began a full-scale development with a new logo for the Halwani Abu Adal foundation that summarizes all of our goals: "Sweet a good day.""

                    

                    The development plan covered all parts of the system, beginning with individuals, factories and branches, in order to maintain the required quality .

                     In 2019, he was our last branch in demchelte, in the city of dikirnis.

                    

                </div>

                <h5 style="color: #CB913F;" class="p-3">our Vision</h5>

                <div class="container">

                  <p style="font-size: .9rem;" class="border p-3 text-muted">

                    to be one of the top candy manufacturers in the Egyptian market with constant quality and price maintenance.

                    

                    With all our love, our story goes on with you and you, and our top priority at the Halwani Abu Adel Foundation will be to achieve our motto, "Sweet a good day.""</p>

                </div>

            </div>

                

        </div>

    </div>

</section>

      <!--footer-->

    <!--footer-->

    <footer>

      <div class="container py-5">

        <div class="row m-auto justify-content-center">

          <div class="col-md links">

            <h5> select a page</h5>

            <p><a href="{{route('en.home')}}"> home</a></p>

            <p><a href="{{route('en.contact.about')}}">Our Story</a></p>

            <p><a href="{{route('en.contact.branch')}}">stores Locations</a></p>

            <p><a href="{{route('en.pages.chef_chosen')}}">Chef’s Pick of the Month</a></p>

            <p><a href="{{route('en.pages.share_form')}} ">Our Survey</a></p>

            <p><a href="{{route('en.contact.contact_us')}}">contact us</a></p>

          </div>

          <div class="col-md links">

            <h5>our menu</h5>

            @foreach ($categories as $category)

            <p>

            <a href="{{url('en/category/products/'). '/' .$category->id}}">

              {{$category->name_en}}

            </a>

            </p>

            @endforeach

          </div>

          <div class="col-md info">

            <h5 class="my-3">contact info</h5>

            <p>Tel: +02 01005767101 </p>

            <p>Tel: +02 01021264337 </p>

         

            <a href="{{route('en.contact.about')}}"><button class="mb-2">المزيد..</button></a>

          </div>

          <div class="col-md">

            <h5>follow us</h5>

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

          <p class="ml-3">all rights reserved. ©</p>

          <a class="ml-auto rounded mr-3 pt-2 hvr-sweep-to-right" href="#">^</a>

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