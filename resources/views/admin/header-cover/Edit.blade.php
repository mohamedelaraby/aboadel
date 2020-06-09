@extends('admin.layouts.master')

@section('page')
    {{trans('admin.update_cover')}}
@stop

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="content">

               {!! Form::open(['action' => ['Manage\Header\HeaderCoverController@update',$header->id], 'method'=>'PUT', 'files'=>true]) !!}
               {!! Form::token() !!}
               {!! Form::hidden('_method', 'POST') !!}
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.header-cover.form')
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit(trans('admin.update_cover'), ['class' => 'btn btn-info btn-fill btn-wd' ]) !!}
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
