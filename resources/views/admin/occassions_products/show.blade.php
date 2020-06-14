@extends('admin.layouts.master')

@section('page')
{{trans('admin.occassion_products_details')}}
@stop

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
                                        <th>{{trans('admin.occassion_product_id')}}</th>
                                        <td>{{$occassion_product->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.occassion_product_name_ar')}}</th>
                                            <td>{{$occassion_product->name_ar}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.occassion_product_name_en')}}</th>
                                            <td>{{$occassion_product->name_en}}</td>
                                        </tr>


                                        <tr>
                                            <th>{{trans('admin.occassion_product_price')}}</th>
                                            <td>{{$occassion_product->price}}</td>
                                        </tr>

                                        <tr>
                                            <th> {{trans('admin.add_occassion_product')}}</th>
                                            <td>{{$occassion_product->created_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.update_occassion_product')}}</th>
                                            <td>{{$occassion_product->updated_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.occassion_product_image')}}</th>
                                            <td><img src="{{URL::asset('Uploads/occassions'). '/'. $occassion_product->occassion_id . '/' . $occassion_product->image}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
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
@stop
