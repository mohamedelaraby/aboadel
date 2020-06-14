@extends('admin.layouts.master')

@section('page')
{{trans('admin.party_details')}}
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
                                        <th>{{trans('admin.party_id')}}</th>
                                        <td>{{$party->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.party_name_ar')}}</th>
                                            <td>{{$party->name_ar}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.party_name_en')}}</th>
                                            <td>{{$party->name_en}}</td>
                                        </tr>


                                        <tr>
                                            <th>{{trans('admin.party_price')}}</th>
                                            <td>{{$party->price}}</td>
                                        </tr>

                                        <tr>
                                            <th> {{trans('admin.add_party_time')}}</th>
                                            <td>{{$party->created_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.update_party_time')}}</th>
                                            <td>{{$party->updated_at->diffForHumans()}}</td>
                                        </tr>

                                        <tr>
                                            <th>{{trans('admin.party_image')}}</th>
                                            <td><img src="{{URL::asset('Uploads/parties'). '/' . $party->image}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
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
