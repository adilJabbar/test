@extends("flowdash::layouts.{$layout}", [
  'title' => 'Add Service',
  'breadcrumb' => [[
    'title' => 'Home Page Services'
  ]],
  'new_button_label' => 'Add',
  'new_button_slug' => 'add-service',
])

@section('content')
<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('home-page-service')}}">
  	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrition</label>
   <textarea class="form-control rounded-0" name="description" required="required" id="exampleFormControlTextarea2" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection