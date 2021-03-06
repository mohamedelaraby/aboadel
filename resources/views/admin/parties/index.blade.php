@extends('admin.layouts.master')

@section('page')
{{trans('admin.parties')}}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')
            <a href="{{route('admin.party.create')}}" class="btn btn-info btn-fill m-5">{{trans('admin.add_party')}}</a>

        <div class="header">
                <h4 class="title">{{trans('admin.all_parties')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{trans('admin.party_id')}}</th>
                        <th>{{trans('admin.party_name_ar')}}</th>
                        <th>{{trans('admin.party_name_en')}}</th>
                        <th>{{trans('admin.party_image')}}</th>
                        <th>{{trans('admin.party_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($parties as $party)
                        <tr>
                            <td>{{$party->id}}</td>
                        <td> {{$party->name_ar}}</td>
                            <td>{{$party->name_en}}</td>
                            <td>{{$party->price}}</td>
                            <td>
                            <img src="{{URL::asset('Uploads/parties') .'/' . $party->image}}"
                                alt="{{$party->image}}" class="img-thumbnail"
                                style="width: 50px">
                            </td>
                        <td>

                        {!! Form::open(['action' => ['Manage\Party\PartyController@destroy', $party->id ] , 'method' => 'POST' ]) !!}
                        {!! Form::token() !!}
                        {!!Form::button(
                                '<span class="fa ti-trash"></span>',
                                ['type'=> 'submit',
                                'class' => 'btn btn-sm btn-danger',
                                'onclick'=>' return confirm("Are you sure to delete this parties")'])!!}

                        {!! link_to_route('admin.party.edit', '', $party->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                        {!! link_to_route('admin.party.show', '', $party->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}
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


