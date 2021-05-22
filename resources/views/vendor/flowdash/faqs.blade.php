@extends("flowdash::layouts.{$layout}", [
  'title' => 'Add Faqs',
  'breadcrumb' => [[
    'title' => 'Faqs'
  ]],
  'new_button_label' => 'Add',
  'new_button_slug' => 'add-faqs',
])

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <div class="container">
  <h2>Faqs</h2>
         
  <table class="table">
    <thead>
      <tr>
        <th>Question</th>
        <th>Answer</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $key => $value)

      <tr>
        <td>{{$value->question}}</td>
        <td>{{$value->answer}}</td>
        <td>
    <ul class="list-inline m-0">
          
            <li class="list-inline-item">
                <a href="{{url('edit-faqs/'.$value->id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
            </li>
            <li class="list-inline-item">
               <a href="{{url('delete-faq/'.$value->id)}}"> <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
            </li>
        </ul>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection