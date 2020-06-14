@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
@foreach ($home_cover as $cover )
<img   class="img-fluid" src="{{URL::asset('Uploads/header/shareform_page') . '/' . $cover->shareform_image}}" alt="header">
@endforeach
<div class="container">
  <div class="header_content text-center px-3">
    <p>{{trans('front.survey')}} </p>
  </div>
</div>
@stop

@section('content')
<section class="products query">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
          <div class="col-md-3 order-2 order-md-1 border-left product_list">

        <p class="border-bottom pt-4"><a href="{{route('home')}}"></a></p>
        <p class="border-bottom"><a href="{{route('front.about_us')}}"> {{trans('front.about')}} </a></p>
        <p class="border-bottom"><a href="{{route('front.category')}}"> {{trans('front.menu')}} </a></p>
        <p class="border-bottom"><a href="{{route('front.party')}}">{{trans('front.party-selection')}} </a></p>
        <p class="border-bottom"><a href="{{route('front.occassion')}}">{{trans('front.special-occassions')}} </a></p>
        <p class="border-bottom"><a href="{{route('front.stores')}}">{{trans('front.store')}} </a></p>
        <p class="border-bottom"><a href="{{route('front.chef')}} ">{{trans('front.chef')}} </a></p>
        <p class="border-bottom"><a href=" {{route('front.share-form')}} "> {{trans('front.survey')}} </a></p>
        <p class="border-bottom"><a href=" {{route('front.contact')}} ">{{trans('front.contact')}} </a></p>

          </div>
            <div class="col-md order-1 order-md-2 query">
                <form style="font-size: .7rem;">
                  <h5 style="color: #CB913F;">{{trans('front.survey-form')}}</h5>
                  <p>1.{{trans('front.first-question')}}</p>
                  <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                  <p>2.{{trans('front.second-question')}}</p>
                  <input type="checkbox">
                  <label>{{trans('front.cake')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.verrnines')}}  </label>
                  <input type="checkbox">
                  <label>{{trans('front.bakery')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.party')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.oriental')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.chocolate')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.donot-try')}}</label>
                  <p>{{trans('front.other-choice')}}</p>
                  <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                  <p>3. {{trans('front.third-question')}}</p>
                  <input type="checkbox">
                  <label> {{trans('front.lemon')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.macaroons')}} </label>
                  <input type="checkbox">
                  <label> {{trans('front.carrot')}}</label>
                  <input type="checkbox">
                  <label> {{trans('front.bread')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.donuts')}} </label>
                  <input type="checkbox">
                  <label>{{trans('front.cupcake')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.donot-try')}}</label>
                  <p>{{trans('front.other-choice')}}</p>
                  <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>

                  <p>4. {{trans('front.fourth-question')}}</p>
                  <input type="checkbox">
                  <label>{{trans('front.everyday')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.few-week')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.on-occassions')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.never')}}</label>
                  <input type="checkbox">

                  <p>5. {{trans('front.fifth-question')}}</p>
                  <input type="checkbox">
                  <label>{{trans('front.excellent')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.good')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.poor')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.donot-know')}}</label>
                  <input type="checkbox">

                  <p>6. {{trans('front.sixth-question')}}</p>
                  <input type="checkbox">
                  <label>{{trans('front.excellent')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.good')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.poor')}}</label>
                  <input type="checkbox">
                  <label>{{trans('front.donot-know')}}</label>
                  <input type="checkbox">

                <p class="pt-2">1. {{trans('front.name')}}</p>
                  <input class="py-2" style="width: 100%;" type="text">
                  <p class="pt-2">2. {{trans('front.phone')}}</p>
                  <input class="py-2" style="width: 100%;" type="tel">
                  <p class="pt-2">3. {{trans('front.email')}}</p>
                  <input class="py-2" style="width: 100%;" type="email">
                  <p class="pt-2">4. {{trans('front.residence')}}</p>
                  <input class="py-2" style="width: 100%;" type="text">
                  <input class="subbtn my-2 rounded" type="submit" value="{{trans('front.send')}}">
                </form>
            </div>
        </div>
    </div>
</section>
@stop
