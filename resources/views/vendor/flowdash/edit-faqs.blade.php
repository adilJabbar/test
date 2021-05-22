@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Faq',
  'breadcrumb' => [[
    'title' => 'Edit Faq'
  ]],
])

@section('content')

<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('update-faqs')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Question</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" value="{{$data->question}}" name="question" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Question">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Answer</label>
   <textarea class="form-control rounded-0" name="answer" required="required" id="exampleFormControlTextarea2" rows="3">{{$data->answer}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection