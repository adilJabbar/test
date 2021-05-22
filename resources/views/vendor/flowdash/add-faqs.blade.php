@extends("flowdash::layouts.{$layout}", [
  'title' => 'Add Faq',
  'breadcrumb' => [[
    'title' => 'Home Page Services'
  ]],
])

@section('content')
<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('add-faqs')}}">
  	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Question</label>
    <input type="text" class="form-control" name="question" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Question">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Answer</label>
   <textarea class="form-control rounded-0" name="answer" required="required" id="exampleFormControlTextarea2" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection