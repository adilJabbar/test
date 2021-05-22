@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Service',
  'breadcrumb' => [[
    'title' => 'Edit Home Page Services'
  ]],
])

@section('content')

<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('home-page-service-update')}}">
  	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" value="{{$data->title}}" name="title" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrition</label>
   <textarea class="form-control rounded-0" name="description" required="required" id="exampleFormControlTextarea2" rows="3">{{$data->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection