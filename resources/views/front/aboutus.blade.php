@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/header10.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>our story</p>
  </div>
</div>
@stop

@section('content')
<section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-3 order-2 order-md-1 border-left product_list">
                <p class="border-bottom pt-4"><a href="index.html">home</a></p>
                <p class="border-bottom"><a href="تعرف علينا.html">our story</a></p>
                <p class="border-bottom"><a href="قائمة المنتجات.html">our menu</a></p>
                <p class="border-bottom"><a href="مختارات الحفلات.html">Party selection</a></p>
                <p class="border-bottom"><a href="المناسبات الخاصة.html">special ocasions</a></p>
                <p class="border-bottom"><a href="فروعنا.html">stores locations </a></p>
                <p class="border-bottom"><a href="اختيار الشيف الشهري.html">Chef’s Pick of the Month</a></p>
                <p class="border-bottom"><a href="شارك في الاستبيان.html">Our Survey</a></p>
                <p class="border-bottom"><a href="اتصل بنا.html">contact us </a></p>
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
@stop
