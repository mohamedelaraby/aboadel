@extends('admin.layouts.master')

@section('page title')
{{__('admin.parties')}}
@endsection

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            @include('admin.layouts.inc.message')

            {{-- Add new parties --}}
            
            <a href="{{route('admin.header.create')}}" class="btn btn-info btn-fill m-5">{{__('admin.add_header')}}</a>
        
        <div class="header">
                <h4 class="title">{{__('admin.all_headers')}}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{__('admin.header_id')}}</th>
                        <th>{{__('admin.home_image')}}</th>
                        <th>{{__('admin.category_image')}}</th>
                        <th>{{__('admin.chef_image')}}</th>
                        <th>{{__('admin.party_image')}}</th>
                        <th>{{__('admin.branches_image')}}</th>
                        <th>{{__('admin.occassions_image')}}</th>
                        <th>{{__('admin.aboutus_image')}}</th>
                        <th>{{__('admin.contactus_image')}}</th>
                        <th>{{__('admin.shareform_image')}}</th>
                        <th>{{__('admin.header_options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($headers as $header)
                    
                        <tr>

                        <td>{{$header->id}}</td>
                    
                        <td>
                        <img src="{{url('Uploads/header/home_page/') .'/' . $header->home_image}}"
                            alt="{{$header->home_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/category_page/') .'/' . $header->category_image}}"
                            alt="{{$header->category_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/chef_page/') .'/' . $header->chef_image}}"
                            alt="{{$header->chef_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/party_page/') .'/' . $header->party_image}}"
                            alt="{{$header->party_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/branches_page/') .'/' . $header->branches_image}}"
                            alt="{{$header->branches_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/occassions_page/') .'/' . $header->occassions_image}}"
                            alt="{{$header->occassions_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                         
                        <td>
                        <img src="{{url('Uploads/header/aboutus_page/') .'/' . $header->aboutus_image}}"
                            alt="{{$header->aboutus_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td> 

                        <td>
                        <img src="{{url('Uploads/header/contactus_page/') .'/' . $header->contactus_image}}"
                            alt="{{$header->contactus_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>
                        
                        <td>
                        <img src="{{url('Uploads/header/shareform_page/') .'/' . $header->shareform_image}}"
                            alt="{{$header->shareform_image}}" class="img-thumbnail"
                            style="width: 50px">
                        </td>

                        <td>

                                    {!! Form::open(['action' => ['Manage\Header\HeaderCoverController@destroy', $header->id ] , 'method' => 'POST' ]) !!}
                                         {!! Form::token() !!}

                                        {{Form::button(
                                            '<span class="fa ti-trash"></span>',
                                            ['type'=> 'submit',
                                            'class' => 'btn btn-sm btn-danger m-3',
                                            'onclick'=>' return confirm("Are you sure to delete this header")'])}}

                        {!! link_to_route('admin.header.edit', '', $header->id ,['class'=>'btn btn-sm btn-pencil ti-pencil-alt']) !!}

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


