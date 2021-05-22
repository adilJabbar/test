@extends("flowdash::layouts.{$layout}", [
  'title' => 'Edit Our Mission',
  'breadcrumb' => [[
    'title' => 'Edit Our Mission'
  ]],
])

@section('content')

<div class="{{ $containerClass ?? 'container' }} page__container">
  <form method="POST" action="{{url('update-our-mission')}}">
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