@extends('admin.layouts.master')

@section('page')
{{trans('admin.occassion')}}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')
            <a href="{{route('admin.occassion.create')}}" class="btn btn-info btn-fill m-5">{{trans('admin.add_occassion')}}</a>
        <div class="header">
                <h4 class="title">{{trans('admin.all_occassions')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{trans('admin.occassion_id')}}</th>
                        <th>{{trans('admin.occassion_name_ar')}}</th>
                        <th>{{trans('admin.occassion_name_en')}}</th>
                        <th>{{trans('admin.occassion_image')}}</th>
                        <th>{{trans('admin.occassion_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($occassions as $occassion)
                        <tr>
                            <td>{{$occassion->id}}</td>
                        <td> {{$occassion->name_ar}}</td>
                            <td>{{$occassion->name_en}}</td>
                            <td>
                            <img src="{{URL::asset('Uploads/occassions') .'/cover_image/' . $occassion->image}}"
                                alt="{{$occassion->image}}" class="img-thumbnail"
                                style="width: 50px">
                            </td>
                        <td>
                                    {!! Form::open(['action' => ['Manage\Occassion\OccassionController@destroy', $occassion->id ] , 'method' => 'POST' ]) !!}
                                         {!! Form::token() !!}

                                        {{Form::button(
                                            '<span class="fa ti-trash"></span>',
                                            ['type'=> 'submit',
                                            'class' => 'btn btn-sm btn-danger',
                                            'onclick'=>' return confirm("Are you sure to delete this occassion")'])}}

                        {!! link_to_route('admin.occassion.edit', '', $occassion->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                        {!! link_to_route('admin.occassion.show', '', $occassion->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}
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


