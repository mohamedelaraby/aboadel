@extends('admin.layouts.master')

@section('page')
{{trans('admin.occassion_detials')}}
@stop

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            @include('admin.layouts.inc.message')
            <div class="content">

                <div class="row">
                {!! link_to_route('admin.occassion.create_product', trans('admin.add_product'), $occassion->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}

                    <div class="col-md-12">
                        <div class="card">

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach ($occassion->occassion_products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                                <td>{{$product->name_ar}}</td>
                                                <td>{{$product->name_en}}</td>
                                                <td>{{$product->price}}</td>
                                                <td><img src="{{url('Uploads/occassions') .'/' .$product->occassion_id .'/' . $product->image}}" alt="" class="img-thumbnail"
                                                         style="width: 50px"></td>
                                                <td>

                                                    {!! Form::open(['action' => ['Manage\Occassion\OccassionProductController@destroy',$product->id], 'method' => 'POST']) !!}
                                                                 {!! Form::token() !!}

                                                                {{Form::button(
                                                                    '<span class="fa ti-trash"></span>',
                                                                    ['type'=> 'submit',
                                                                    'class' => 'btn btn-sm btn-danger',
                                                                    'onclick'=>' return confirm("Are you sure to delete this product")'])}}

                                                {!! link_to_route('admin.occassion-product.edit', '', $product->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                                                {!! link_to_route('admin.occassion-product.show','', $product->id ,['class'=>'btn btn-sm btn-primary ti-view-list-alt']) !!}

                                                {!! Form::close() !!}

                                                </td>
                                            </tr>
                                            @endforeach



                                        {{-- <tr>
                                        <th>{{trans('admin.occassion_id')}}</th>
                                        <td>{{$occassion->id}}</td>
                                        </tr>

                                        <tr>
                                        <th><a href=" product/create/{{$occassion->id}} "></a>{{trans('admin.occassion_name_ar')}}</th>
                                            <td>{{$occassion->name_ar}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.occassion_name_en')}}</th>
                                            <td>{{$occassion->name_en}}</td>
                                        </tr>



                                        <tr>
                                            <th> {{trans('admin.add_occassion_time')}}</th>
                                            <td>{{$occassion->created_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.edit_occassion')}}</th>
                                            <td>{{$occassion->updated_at->diffForHumans()}}</td>
                                        </tr>


                                        <tr>
                                            <th>{{trans('admin.occassion_image')}}</th>
                                            <td><img src="{{url('Uploads/categories') . '/' . $occassion->image}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
                                        </tr> --}}

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
