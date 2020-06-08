@include('admin.layouts.inc.message')

 {{--  occassion_product name in arabic--}}
<div class="form-group {{$errors->has('name_ar') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_product_name_ar')) !!}
    {!! Form::text('name_ar', old('name_ar') ?? $occassion_product->name_ar, ['class' => 'form-control border-input', 'placeholder' => __('admin.tart_cake')]) !!}
<span class="text-danger">{{$errors->has('name_ar') ? $errors->first('name_ar') : ''}}</span>
</div>
{{--  occassion_product name in arabic--}}
<div class="form-group {{$errors->has('name_en') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_product_name_en')) !!}
    {!! Form::text('name_en', old('name_en') ?? $occassion_product->name_en, ['class' => 'form-control border-input', 'placeholder' => 'Tart']) !!}
<span class="text-danger">{{$errors->has('name_en') ? $errors->first('name_en') : ''}}</span>
</div>

{{--  occassion_product Price --}}
<div class="form-group {{$errors->has('price') ? 'has-error': ''}}" >
    {!! Form::label(__('admin.occassion_product_price')) !!}
    {!! Form::text('price', old('price') ?? $occassion_product->price, ['class' => 'form-control border-input', 'placeholder' => '200 $']) !!}
<span class="text-danger"> {{$errors->has('price') ? $errors->first('price') : ''}}</span>
</div>


{{--  occassion_product image --}}
<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}" >
    {!! Form::label(__('admin.occassion_product_image')) !!}
    {!! Form::file('image' ,['class' => 'form-control border-input', 'id' => 'image']) !!}

    <div id="thumb-output"></div>
    <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
</div>
