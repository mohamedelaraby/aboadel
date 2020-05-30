@include('admin.layouts.inc.message')


{{--  occassion name in arabic--}}
<div class="form-group {{$errors->has('name_ar') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_name_ar')) !!}
    {!! Form::text('name_ar', $occassion->name_ar , ['class' => 'form-control border-input', 'placeholder' => __('admin.occassion_name_ar')]) !!}
<span class="text-danger">{{$errors->has('name_ar') ? $errors->first('name_ar') : ''}}</span>
</div>

{{--  occassion name in arabic--}}
<div class="form-group {{$errors->has('name_en') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_name_en')) !!}
    {!! Form::text('name_en', $occassion->name_en, ['class' => 'form-control border-input', 'placeholder' => __('admin.occassion_name_en')]) !!}
    <span class="text-danger">{{$errors->has('name_en') ? $errors->first('name_en') : ''}}</span>
</div>



{{--  occassion image --}}
<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_image')) !!}
    {!! Form::file('image',['class' => 'form-control border-input', 'id' => 'image']) !!}
    
    <div id="thumb-output"></div>
    <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
    
</div>
