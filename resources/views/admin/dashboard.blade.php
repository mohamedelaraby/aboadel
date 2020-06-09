@extends('admin.layouts.master')

{{-- [ Page title] --}}
@section('page-title')
    {{trans('admin.dashboard')}}
@endsection

{{-- [ Page Content ] --}}
@section('content')
<div class="row">

    @include('admin.layouts.inc.message')

    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-archive"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>{{trans('admin.products')}}</p>
                            {{$product->count()}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                    <a href="{{route('admin.product.index')}}"></a> <i class="ti-panel"></i> {{trans('admin.details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>{{trans('admin.category')}}</p>
                          {{$category->count()}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                        <i class="ti-panel"></i>{{trans('admin.details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>{{trans('admin.parties_chosen')}}</p>
                          {{$party->count()}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                        <i class="ti-panel"></i>
                        {{trans('admin.details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">

                            <i class="fa fa-cutlery" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>{{trans('admin.special_occassions')}}</p>
                          {{$occassion->count()}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                        <i class="ti-panel">
                        </i>{{trans('admin.details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>{{trans('admin.chef_chosen')}}</p>
                          {{$chef->count()}}
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr/>
                    <div class="stats">
                        <i class="ti-panel"></i>{{trans('admin.details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
