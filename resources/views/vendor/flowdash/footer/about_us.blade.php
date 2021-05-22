@extends("flowdash::layouts.{$layout}", [
  'title' => 'About Us',
  'breadcrumb' => [[
    'title' => 'About Us'
  ]],

])

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


  <div class="container">
  <h2>Faqs</h2>
         
  <table id="datatable" class="table">
    <thead>
      <tr>
        <th>Content</th>
        <th>action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($data as $key => $value)

      <tr>
        <td>{{$value->content}}</td>
        <td>
    <ul class="list-inline m-0">
            <li class="list-inline-item">
                <a href="{{url('edit-footer-about-us/'.$value->id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
            </li>
        </ul>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );
</script>

@endsection