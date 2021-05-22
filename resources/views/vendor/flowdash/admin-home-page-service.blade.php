@extends("flowdash::layouts.{$layout}", [
  'title' => 'Add Service',
  'breadcrumb' => [[
    'title' => 'Home Page Services'
  ]],
  'new_button_label' => 'Add',
  'new_button_slug' => 'add-service',
])

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>

  <div class="container">
  <h2>Services</h2>
         
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($data as $key => $value)

      <tr>
        <td>{{$value->title}}</td>
        <td>{{$value->description}}</td>
        <td>
		<ul class="list-inline m-0">
          
            <li class="list-inline-item">
                <a href="{{url('edit-admin-home-service/'.$value->id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
            </li>
            <li class="list-inline-item">
               <a href="{{url('delete-admin-home-service/'.$value->id)}}"> <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
            </li>
        </ul>
        </td>
      </tr>
    	@endforeach
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $('#myTable').DataTable( {
    responsive: true
} );
</script>
@endsection