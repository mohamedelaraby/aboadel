@extends('admin.layouts.master')

@section('page')
{{trans('admin.view_occassion_products')}}
@stop

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')
            <div class="header">
            <h4 class="title">{{trans('admin.all_occassion_products')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{trans('admin.occassion_product_id')}}</th>
                        <th>{{trans('admin.occassion_product_name_ar')}}</th>
                        <th>{{trans('admin.occassion_product_name_en')}}</th>
                        <th>{{trans('admin.occassion_product_price')}}</th>
                        <th>{{trans('admin.occassion_product_image')}}</th>
                        <th>{{trans('admin.occassion_product_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($occassion_products as $product)

                    <tr>
                    <td>{{$product->id}}</td>
                        <td>{{$product->name_ar}}</td>
                        <td>{{$product->name_en}}</td>
                        <td>{{$product->price}}</td>

                        <td><img src="{{URL::asset('Uploads/occassions') .'/' . $product->id . '/' . $product->image}}" alt="" class="img-thumbnail"
                                 style="width: 50px"></td>
                        <td>

                                    {!! Form::open(['action' => ['Manage\Occassion\OccassionProductController@destroy',$product->id], 'method' => 'POST']) !!}
                                         {!! Form::token() !!}

                                        {{Form::button(
                                            '<span class="fa ti-trash"></span>',
                                            ['type'=> 'submit',
                                            'class' => 'btn btn-sm btn-danger',
                                            'onclick'=>' return confirm("Are you sure to delete this occassion_product")'])}}

                                    {!! link_to_route('admin.occassion_product.edit', '', $product->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                                    {!! link_to_route('admin.occassion_product.show','', $product->id ,['class'=>'btn btn-sm btn-primary ti-view-list-alt']) !!}

                                    {!! Form::close() !!}

                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@stop


