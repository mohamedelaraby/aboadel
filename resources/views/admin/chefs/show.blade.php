@extends('admin.layouts.master')
@section('page')
{{trans('admin.chef_details')}}
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
                                        <th>{{trans('admin.chef_id')}}</th>
                                        <td>{{$chef->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.chef_name_ar')}}</th>
                                            <td>{{$chef->name_ar}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.chef_name_en')}}</th>
                                            <td>{{$chef->name_en}}</td>
                                        </tr>


                                        <tr>
                                            <th>{{trans('admin.chef_price')}}</th>
                                            <td>{{$chef->price}}</td>
                                        </tr>

                                        <tr>
                                            <th> {{trans('admin.add_chef_time')}}</th>
                                            <td>{{$chef->created_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.update_chef_time')}}</th>
                                            <td>{{$chef->updated_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.chef_image')}}</th>
                                            <td><img src="{{URL::asset('Uploads/chefs'). '/' . $chef->image}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
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
