@extends('admin.layouts.master')

@section('page title')
    {{__('admin.product_edit')}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="content">

                {{-- Add product form --}}
               {!! Form::open(['action' => ['Manage\ChefController@update',$chef->id], 'method'=>'PUT', 'files'=>true]) !!}
               {!! Form::token() !!}
               {!! Form::hidden('_method', 'POST') !!}
                    <div class="row">
                        <div class="col-md-12">

                            {{-- Add product form --}}
                            @include('admin.chefs.form')

                        </div>

                    </div>
                    <div class="form-group">
                        {!! Form::submit(__('admin.update_product'), ['class' => 'btn btn-info btn-fill btn-wd' ]) !!}
                    </div>
                    <div class="clearfix"></div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
