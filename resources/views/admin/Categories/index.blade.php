@extends('admin.layouts.master')

@section('page title')
{{__('admin.category')}}
@endsection

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')

            {{-- Add new category --}}
            
            <a href="{{route('admin.category.create')}}" class="btn btn-info btn-fill m-5">{{__('admin.add_category')}}</a>
        
        <div class="header">
                <h4 class="title">{{__('admin.all_categories')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                    <th>{{__('admin.category_id')}}</th>
                        <th>{{__('admin.category_name_ar')}}</th>
                        <th>{{__('admin.category_name_en')}}</th>
                        <th>{{__('admin.category_image')}}</th>
                        <th>{{__('admin.category_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                
                     
                        <tr>
                            <td>{{$category->id}}</td>
                        <td> {{$category->name_ar}}</td>
                            <td>{{$category->name_en}}</td>
                            <td>
                            <img src="/Uploads/categories/cover_image/{{$category->image}}"
                                alt="{{$category->image}}" class="img-thumbnail"
                                style="width: 50px">
                            </td>
                        <td>

                                    {!! Form::open(['action' => ['Manage\Category\CategoryController@destroy', $category->id ] , 'method' => 'POST' ]) !!}
                                         {!! Form::token() !!}

                                        {{Form::button(
                                            '<span class="fa ti-trash"></span>',
                                            ['type'=> 'submit',
                                            'class' => 'btn btn-sm btn-danger',
                                            'onclick'=>' return confirm("Are you sure to delete this category")'])}}

                        {!! link_to_route('admin.category.edit', '', $category->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}
                        {!! link_to_route('admin.category.show', '', $category->id ,['class'=>'btn btn-sm btn-pencil ti-view-list-alt']) !!}

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
@endsection


