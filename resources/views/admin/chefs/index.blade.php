@extends('admin.layouts.master')

@section('page')
{{trans('admin.chef')}}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')
            <a href="{{route('admin.chef.create')}}" class="btn btn-info btn-fill m-5">{{trans('admin.add_chef')}}</a>
        <div class="header">
                <h4 class="title">{{trans('admin.all_chefs')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{trans('admin.chef_id')}}</th>
                        <th>{{trans('admin.chef_name_ar')}}</th>
                        <th>{{trans('admin.chef_name_en')}}</th>
                        <th>{{trans('admin.chef_image')}}</th>
                        <th>{{trans('admin.chef_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($chefs as $chef)
                        <tr>
                            <td>{{$chef->id}}</td>
                        <td> {{$chef->name_ar}}</td>
                            <td>{{$chef->name_en}}</td>
                            <td>{{$chef->price}}</td>
                            <td>
                            <img src="{{URL::asset('Uploads/chefs') .'/' . $chef->image}}"
                                alt="{{$chef->image}}" class="img-thumbnail"
                                style="width: 50px">
                            </td>
                        <td>
                                {!! Form::open(['action' => ['Manage\Chef\ChefController@destroy', $chef->id ] , 'method' => 'POST' ]) !!}
                                        {!! Form::token() !!}
                                    {{Form::button(
                                        '<span class="fa ti-trash"></span>',
                                        ['type'=> 'submit',
                                        'class' => 'btn btn-sm btn-danger',
                                        'onclick'=>' return confirm("Are you sure to delete this parties")'])}}
                        {!! link_to_route('admin.chef.edit', '', $chef->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                        {!! link_to_route('admin.chef.show', '', $chef->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}
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


