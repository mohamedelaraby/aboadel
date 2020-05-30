@include('admin.layouts.inc.message')

{{--  home image --}}
<div class="form-group {{$errors->has('home_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.home_image')) !!}
    {!! Form::file('home_image',['class' => 'form-control border-input', 'id' => 'home_image']) !!}
    <div id="home-output"></div>
    <span class="text-danger">{{$errors->has('home_image') ? $errors->first('home_image') : ''}}</span>
</div>

{{--  category image --}}
<div class="form-group {{$errors->has('category_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.category_image')) !!}
    {!! Form::file('category_image',['class' => 'form-control border-input', 'id' => 'category_image']) !!}
    <div id="category-output"></div>
    <span class="text-danger">{{$errors->has('category_image') ? $errors->first('category_image') : ''}}</span>
</div>

{{--  chef image --}}
<div class="form-group {{$errors->has('chef_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.chef_image')) !!}
    {!! Form::file('chef_image',['class' => 'form-control border-input', 'id' => 'chef_image']) !!}
    <div id="chef-output"></div>
    <span class="text-danger">{{$errors->has('chef_image') ? $errors->first('chef_image') : ''}}</span>
</div>

{{--  party_image --}}
<div class="form-group {{$errors->has('party_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.party_image')) !!}
    {!! Form::file('party_image',['class' => 'form-control border-input', 'id' => 'party_image']) !!}
    <div id="party-output"></div>
    <span class="text-danger">{{$errors->has('party_image') ? $errors->first('party_image') : ''}}</span>
</div>

{{--  branches_image --}}
<div class="form-group {{$errors->has('branches_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.branches_image')) !!}
    {!! Form::file('branches_image',['class' => 'form-control border-input', 'id' => 'branches_image']) !!}
    <div id="branches-output"></div>
    <span class="text-danger">{{$errors->has('branches_image') ? $errors->first('branches_image') : ''}}</span>
</div>

{{--  occassion_image --}}
<div class="form-group {{$errors->has('occassion_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_image')) !!}
    {!! Form::file('occassion_image',['class' => 'form-control border-input', 'id' => 'occassion_image']) !!}
    <div id="occassion-output"></div>
    <span class="text-danger">{{$errors->has('occassion_image') ? $errors->first('occassion_image') : ''}}</span>
</div>


{{--  aboutus_image --}}
<div class="form-group {{$errors->has('aboutus_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.aboutus_image')) !!}
    {!! Form::file('aboutus_image',['class' => 'form-control border-input', 'id' => 'aboutus_image']) !!}
    <div id="aboutus-output"></div>
    <span class="text-danger">{{$errors->has('aboutus_image') ? $errors->first('aboutus_image') : ''}}</span>
</div>

{{--  contactus_image --}}
<div class="form-group {{$errors->has('contactus_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.contactus_image')) !!}
    {!! Form::file('contactus_image',['class' => 'form-control border-input', 'id' => 'contactus_image']) !!}
    <div id="contactus-output"></div>
    <span class="text-danger">{{$errors->has('contactus_image') ? $errors->first('contactus_image') : ''}}</span>
</div>

{{--  shareform_image --}}
<div class="form-group {{$errors->has('shareform_image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.shareform_image')) !!}
    {!! Form::file('shareform_image',['class' => 'form-control border-input', 'id' => 'shareform_image']) !!}
    <div id="shareform-output"></div>
    <span class="text-danger">{{$errors->has('shareform_image') ? $errors->first('shareform_image') : ''}}</span>
</div>
