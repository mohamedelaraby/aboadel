@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/tarttt.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>Chef’s pick of th month</p>
  </div>
</div>
@stop

@section('content')
<section class="products query">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
          <div class="col-md-3 order-2 order-md-1 border-left product_list">
            <p class="border-bottom pt-4"><a href="التورت.html">cakes </a></p>
            <p class="border-bottom"><a href="تورت الأيس كريم.html">ice cream cakes </a></p>
            <p class="border-bottom"><a href="الجاتوه.html">gateaux </a></p>
            <p class="border-bottom"><a href="الشرقي.html">oriental sweets</a></p>
            <p class="border-bottom"><a href="مخبوزات طازجة.html">bakery </a></p>
            <p class="border-bottom"><a href="الشوكولاته.html">Chocolate products </a></p>
            <p class="border-bottom"><a href="بتي فور وسابليه.html">petit fours & sables </a></p>
            <p class="border-bottom"><a href="الغربي.html">western</a></p>
          </div>
            <div class="col-md order-1 order-md-2 query">
                <form style="font-size: .7rem;">
                  <h5 style="color: #CB913F;">Survey form</h5>
                  <p>1. Where did you hear about Sale Sucre Patisserie?</p>
                  <textarea style="width: 100%;" name="textarea" cols="30" rows="10"></textarea>
                  <p>2. Which Sale Sucre Patisserie products have you tried?</p>
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
                  <p>4. How often do you shop at Sale Sucre Patisserie?</p>
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
@stop
