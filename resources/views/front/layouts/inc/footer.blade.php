<footer>
    <div class="container py-5">
      <div class="row m-auto justify-content-center">
        <div class="col-md links">
          <h5> {{trans('front.select-page')}}</h5>
        <p><a href="{{route('home')}}"> {{trans('front.home')}}</a></p>
        <p><a href="{{route('front.about_us')}}">{{trans('front.story')}}</a></p>
          <p><a href="{{route('front.stores')}}">{{trans('front.store')}}</a></p>
          <p><a href="{{route('front.chef')}}">{{trans('front.chef')}}</a></p>
          <p><a href="{{route('front.share-form')}}">{{trans('front.survey')}}</a></p>
          <p><a href="{{route('front.contact')}}">{{trans('front.contact')}}</a></p>
        </div>
        <div class="col-md links">
          <h5>{{trans('front.menu')}}</h5>

          @foreach (categories() as $category)
              <p>
            <a href="{{url('category/products'). '/' .$category->id}}">
                {{$category->name}}
            </a>
        </p>
          @endforeach
        </div>
        <div class="col-md info">
          <h5>{{trans('front.contact-info')}}</h5>
          <p>Tel: +02 01005767101 </p>
          <p>Tel: +02 01021264337 </p>
        <a href="{{route('front.category')}}"><button class="mb-2">{{trans('front.read-more')}}</button></a>
        </div>
        <div class="col-md">
          <h5>{{trans('front.follow')}}</h5>
          <div class="row m-auto justify-content-center pt-3">
          <div class="circle hvr-shrink"><a href="https://www.facebook.com/AboAdelPatisserie/"><i class="fab fa-facebook-f"></i></a></div>
          <div class="circle hvr-shrink"> <a href="https://twitter.com/aboadelpasrty"><i class="fab fa-twitter"></i></a></div>
          <div class="circle hvr-shrink"><a href=https://www.instagram.com/aboadelpastry/?igshid=6y1791ekf05e"><i class="fab fa-instagram"></i></a></div>
          </div>
          <div class="droid">
            <p><img class="img-fluid mt-4 mb-1" src="{{URL::asset('images/ndroid.png')}}" alt="droid"></p>
            <p><img class="img-fluid mb-2" src="{{URL::asset('images/app-store.png')}}" alt="droid"></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--last start-->
  <div class="last">
    <div class="container py-4">
      <div class="row">
        <p class="ml-3">{{trans('front.copyrights')}} &COPY;
            <script>document.write(new Date().getFullYear())</script>
        </p>
        <a class="rounded mr-3 pt-2 hvr-sweep-to-right" href="#">^</a>
      </div>
    </div>
  </div>
