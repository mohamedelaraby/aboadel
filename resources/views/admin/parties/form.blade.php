@include('admin.layouts.inc.message')


{{--  party name in arabic--}}
<div class="form-group {{$errors->has('name_ar') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.party_name_ar')) !!}
    {!! Form::text('name_ar', $party->name_ar , ['class' => 'form-control border-input', 'placeholder' => __('admin.party_name_ar')]) !!}
<span class="text-danger">{{$errors->has('name_ar') ? $errors->first('name_ar') : ''}}</span>
</div>
{{--  party name in arabic--}}
<div class="form-group {{$errors->has('name_en') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.party_name_en')) !!}
    {!! Form::text('name_en', $party->name_en, ['class' => 'form-control border-input', 'placeholder' => __('admin.party_name_en')]) !!}
    <span class="text-danger">{{$errors->has('name_en') ? $errors->first('name_en') : ''}}</span>
</div>

{{--  party Price --}}
<div class="form-group {{$errors->has('price') ? 'has-error': ''}}">
    {!! Form::label(__('admin.party_price')) !!}
    {!! Form::text('price',$party->price, ['class' => 'form-control border-input', 'placeholder' => '$500']) !!}
<span class="text-danger"> {{$errors->has('price') ? $errors->first('price') : ''}}</span>
</div>

{{--  party image --}}
<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.party_image')) !!}
    {!! Form::file('image',['class' => 'form-control border-input', 'id' => 'image']) !!}
    
    <div id="thumb-output"></div>
    <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
    
</div>
