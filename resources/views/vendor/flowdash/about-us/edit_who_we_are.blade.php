@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Who We Are',
  'breadcrumb' => [[
    'title' => 'Edit Who We Are'
  ]],
])

@section('content')

<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('update-who-we-are')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="hidden" name="id" value="{{$data->id}}">

    <textarea class="form-control rounded-0" name="content" required="required" id="exampleFormControlTextarea2" rows="3">{{$data->content}}</textarea>
 
  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection