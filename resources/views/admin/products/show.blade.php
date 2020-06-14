@extends('admin.layouts.master')

@section('page title')
{{__('admin.products_details')}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="content">

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>

                                        <tr>
                                        <th>{{__('admin.product_id')}}</th>
                                        <td>{{$product->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{__('admin.product_name_ar')}}</th>
                                            <td>{{$product->name_ar}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{__('admin.product_name_en')}}</th>
                                            <td>{{$product->name_en}}</td>
                                        </tr>


                                        <tr>
                                            <th>{{__('admin.product_price')}}</th>
                                            <td>{{$product->price}}</td>
                                        </tr>

                                        <tr>
                                            <th> {{__('admin.add_product')}}</th>
                                            <td>{{$product->created_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{__('admin.update_product')}}</th>
                                            <td>{{$product->updated_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{__('admin.product_image')}}</th>
                                            <td><img src="{{URL::asset('Uploads/categories'). '/'. $product->category_id . '/' . $product->image}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
