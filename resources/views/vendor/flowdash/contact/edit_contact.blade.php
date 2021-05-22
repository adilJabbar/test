@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Service',
  'breadcrumb' => [[
    'title' => 'Edit Home Page Services'
  ]],
])

@section('content')

<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('update-contact')}}">
  	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" value="{{$data->address}}" name="address" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
 
  </div>  
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" value="{{$data->phone}}" name="phone" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" value="{{$data->email}}" name="email" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>




  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection