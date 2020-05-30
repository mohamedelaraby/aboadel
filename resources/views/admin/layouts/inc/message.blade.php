  {{-- Show errors --}}
  @if($errors->any())
  @foreach ($errors->all() as $error )
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @endforeach
  @endif 


{{-- check for session success --}}
@if(session()->has('msg'))
  <div  class="alert alert-success">
    {{session()->get('msg')}}
  </div>
@endif
