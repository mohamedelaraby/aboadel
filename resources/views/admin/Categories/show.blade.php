@extends('admin.layouts.master')

@section('page')
{{__('admin.category_detials')}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="content">

                <div class="row">
                {{-- <a href="product/create/{{$category->id}}" class="btn btn-sm btn-info btn-fill">{{__('admin.add_product')}}</a> --}}
                {!! link_to_route('admin.category.create_product', __('admin.add_product'), $category->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}

                    <div class="col-md-12">
                        <div class="card">

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach ($category->products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                                <td>{{$product->name_ar}}</td>
                                                <td>{{$product->name_en}}</td>
                                                <td>{{$product->price}}</td>
                                                <td><img src="{{URL::asset('Uploads/categories') .'/' .$product->category_id .'/' . $product->image}}" alt="" class="img-thumbnail"
                                                         style="width: 50px"></td>
                                                <td>
                        
                                                    {!! Form::open(['action' => ['Manage\Product\ProductController@destroy',$product->id], 'method' => 'POST']) !!}
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

            </div>
        </div>
    </div>
</div>
@endsection
