@extends('admin.layouts.master')

@section('page-title')
{{__('admin.view_products')}}
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')
            <div class="header">
            <h4 class="title">{{__('admin.all_products')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{__('admin.product_id')}}</th>
                        <th>{{__('admin.product_name_ar')}}</th>
                        <th>{{__('admin.product_name_en')}}</th>
                        <th>{{__('admin.product_price')}}</th>
                        <th>{{__('admin.product_image')}}</th>
                        <th>{{__('admin.product_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
          
                    <tr>
                    <td>{{$product->id}}</td>
                        <td>{{$product->name_ar}}</td>
                        <td>{{$product->name_en}}</td>
                        <td>{{$product->price}}</td>

                        <td><img src="{{url('Uploads/categories') .'/' . $product->id . '/' . $product->image}}" alt="" class="img-thumbnail"
                                 style="width: 50px"></td>
                        <td>

                                    {!! Form::open(['action' => ['Manage\ProductController@destroy',$product->id], 'method' => 'POST']) !!}
                                         {!! Form::token() !!}

                                        {{Form::button(
                                            '<span class="fa ti-trash"></span>',
                                            ['type'=> 'submit',
                                            'class' => 'btn btn-sm btn-danger',
                                            'onclick'=>' return confirm("Are you sure to delete this product")'])}}

                                    {!! link_to_route('admin.product.edit', '', $product->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                                    {!! link_to_route('admin.product.show','', $product->id ,['class'=>'btn btn-sm btn-primary ti-view-list-alt']) !!}
                                    
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
@endsection


