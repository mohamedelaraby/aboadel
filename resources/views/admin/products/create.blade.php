@extends('admin.layouts.master')

@section('page title')
{{__('admin.add_product')}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="content">

                {{-- Add product form --}}
               {!! Form::open(['route' => 'admin.product.store', 'method'=>'PUT', 'files'=>true]) !!}
               {!! Form::token() !!}
               {!! Form::hidden('_method', 'POST') !!}
               {!! Form::hidden('category_id', $category_id) !!}
                    <div class="row">
                        <div class="col-md-12">

                            {{-- Add product form --}}
                            @include('admin.products.form')

                        </div>

                    </div>
                    <div class="form-group">
                        {!! Form::submit(__('admin.add_product'), ['class' => 'btn btn-info btn-fill btn-wd' ]) !!}
                    </div>
                    <div class="clearfix"></div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
