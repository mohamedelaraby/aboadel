 
      
      <div class="row">
          @foreach ($categories as $category )
              
          <div class="col-md-3" data-aos="fade-up">
            <div class="firstgal">
              <a href="{{url('en/category/products/'). '/' .$category->id}}"><img class="img-fluid mb-3 hvr-backward mt-3" src="{{ asset('Uploads/categories/cover_image/'. $category->image)}}" alt="g">
                <h5 class="pb-2">{{$category->name_en}}</h5>
              </a>
            </div>
          </div>
          @endforeach
      </div>
 