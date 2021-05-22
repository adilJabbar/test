@extends("flowdash::layouts.{$layout}", [
  'title' => 'Home Page Services',
  'breadcrumb' => [[
    'title' => 'Home Page Services'
  ]],
  'new_button_label' => 'Add',
  'new_button_slug' => 'add-service',
])

@section('content')
<div class="{{ $containerClass ?? 'container' }} page__container">
  
</div>
@endsection