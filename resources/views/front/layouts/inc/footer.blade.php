<footer>
    <div class="container py-5">
      <div class="row m-auto justify-content-center">
        <div class="col-md links">
          <h5> select a page</h5>
        <p><a href="{{route('home')}}"> home</a></p>
        <p><a href="{{route('front.about_us')}}">our story</a></p>
          <p><a href="{{route('front.stores')}}">stores Locations</a></p>
          <p><a href="{{route('front.chef')}}">Chef’s Pick of the Month</a></p>
          <p><a href="{{route('front.share-form')}}">Our Survey</a></p>
          <p><a href="{{route('front.contact')}}">contact us</a></p>
        </div>
        <div class="col-md links">
          <h5>our menu</h5>

          <p>
            @foreach (categories() as $category)
            <a href="{{url('category/products'). '/' .$category->id}}">
                {{$category->name_ar}}
            </a>
          @endforeach
        </p>
        </div>
        <div class="col-md info">
          <h5>contact info</h5>
          <p>Tel: +02 01005767101 </p>
          <p>Tel: +02 01021264337 </p>
        <a href="{{route('front.category')}}"><button class="mb-2">read more..</button></a>
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
        <p class="ml-3">all rights reserved. &COPY;
            <script>document.write(new Date().getFullYear())</script>
        </p>
        <a class="rounded mr-3 pt-2 hvr-sweep-to-right" href="#">^</a>
      </div>
    </div>
  </div>
