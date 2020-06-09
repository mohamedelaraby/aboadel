<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img class="img-fluid" src="{{URL::asset('images/logoen.png')}}" width="130" height="30" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('front.about_us')}}">{{trans('admin.story')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OUR MENU<br><span style="font-size: .6rem; color: #fff;">Products variety</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                @foreach (categories() as $category)

                <a class="dropdown-item"

                href="{{url('category/products'). '/' .$category->id}}">

                {{$category->name}}

              </a>
                @endforeach

              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('front.party')}} ">PARTY SELECTION<br><span style="font-size: .6rem; color: #fff;">Some items for your party</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  SPECIAL OCASIONS<br><span style="font-size: .6rem; color: #fff;">Products for Special ocasions</span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach (occassions() as $occassion)
                    <a class="dropdown-item" href="{{url('occassion/product'). '/' .$occassion->id}}">
                        {{$occassion->name}}
                     </a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('front.stores')}} "> STORES LOCATIONS<br><span style="font-size: .6rem; color: #fff;">Find Our Branches Locations</span></a>
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
