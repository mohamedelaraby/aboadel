<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img class="img-fluid" src="{{URL::asset('images/logoen.png')}}" width="130" height="30" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
            @if(app()->getLocale() == 'ar')
            <ul class="navbar-nav ml-auto text-center">
            @else
            <ul class="navbar-nav mr-auto text-center">
            @endif
            <li class="nav-item active">
            <a class="nav-link" href="{{route('front.about_us')}}">{{trans('front.story')}} <br>

                <span style="font-size: .6rem; color: #fff;">{{trans('front.story-details')}}</span>
            </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{trans('front.menu')}}<br>
                <span style="font-size: .6rem; color: #fff;">{{trans('front.menu-details')}}</span>
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
                <a class="nav-link" href="{{route('front.party')}} ">{{trans('front.party-selection')}}<br><span style="font-size: .6rem; color: #fff;">{{trans('front.party-details')}}</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{trans('front.special-occassions')}}<br>
                  <span style="font-size: .6rem; color: #fff;">{{trans('front.special-occassions-detials')}}</span>
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
                <a class="nav-link" href=" {{route('front.stores')}} "> {{trans('front.store')}}<br>
                    <span style="font-size: .6rem; color: #fff;">{{trans('front.store-locations')}}</span></a>
            </li>
          </ul>
          <form>
            <div class="social d-none d-md-block">
              <a alt="fff" href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a>
              </div>
            <div class="row ml-1">
              <input type="search" placeholder="{{trans('front.search')}}" aria-label="Search">
              <button class="hvr-sweep-to-right m-0" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
    </div>
  </nav>
