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
          <a href="{{route('ar.pages.share_form')}}">العربية</a>

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

  <img  class="img-fluid" src="{{url('Uploads/header/shareform_page') . '/' . $cover->shareform_image}}" alt="header">

<div class="container">

    <div class="header-content text-center px-3">

      <p>Take our Servey</p>

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

       

            <div class="col-md order-1 order-md-2 query">

              <form style="font-size: .7rem;">

                <h5 style="color: #CB913F;">Survey form</h5>

                <p>1. Where did you hear about Abu Adel Patisserie?</p>

                <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                <p>2. Which Abu Adel Patisserie products have you tried?</p>

                <input type="checkbox">

                <label>Cakes, Gateaux</label>

                <input type="checkbox">

                <label>Verrines  </label>

                <input type="checkbox">

                <label>Bakery Items (Croissants)</label>

                <input type="checkbox">

                <label>Party Selections</label>

                <input type="checkbox">

                <label>Oriental Sweets</label>

                <input type="checkbox">

                <label>Chocolates</label>

                <input type="checkbox">

                <label>I haven't tried any yet</label>

                <p>Other ( Please Specify)</p>

                <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                <p>3. Which flavours would you like to see next in our Range?</p>

                <input type="checkbox">

                <label> Lemon Pound CakeCake with Butter Frosting</label>

                <input type="checkbox">

                <label>macaroons </label>

                <input type="checkbox">

                <label> Carrot cake with cream cheese frosting</label>

                <input type="checkbox">

                <label> bread</label>

                <input type="checkbox">

                <label>donuts </label>

                <input type="checkbox">

                <label>cupcakes</label>

                <input type="checkbox">

                <label>I haven't tried any yet</label>

                <p>Other ( Please Specify)</p>

                <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                <p>4. How often do you shop at Abu Adel Patisserie?</p>

                <input type="checkbox">

                <label>everyday</label>

                <input type="checkbox">

                <label>a few times a week</label>

                <input type="checkbox">

                <label>On special occasions only</label>

                <input type="checkbox">

                <label>never</label>

                <input type="checkbox">

                <p>5. How would you rate our customer service in our stores?</p>

                <input type="checkbox">

                <label>excellent</label>

                <input type="checkbox">

                <label>good</label>

                <input type="checkbox">

                <label>poor</label>

                <input type="checkbox">

                <label>i don't know</label>

                <input type="checkbox">

                <p>6. How would you rate the variety in our stores?</p>

                <input type="checkbox">

                <label>excellent</label>

                <input type="checkbox">

                <label>good</label>

                <input type="checkbox">

                <label>poor</label>

                <input type="checkbox">

                <label>i don't know</label>

                <input type="checkbox">

                <p class="pt-2">1. Name: (used for the competition and newsletter).</p>

                <input class="py-2" style="width: 100%;" type="text">

                <p class="pt-2">2. Phone Number: (used to contact the winner only).</p>

                <input class="py-2" style="width: 100%;" type="tel">

                <p class="pt-2">3. Email address - used to contact you for the competition and newsletter feedback (if you opted yes) ONLY.</p>

                <input class="py-2" style="width: 100%;" type="email">

                <p class="pt-2">4. District of Residence (e.g. Nasr City, 6th of October, Heliopolis etc...).</p>

                <input class="py-2" style="width: 100%;" type="text">

                <input class="subbtn my-2 rounded" type="submit" value="send">

              </form>

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