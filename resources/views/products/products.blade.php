<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecommerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">All Product</a></li>
      <li><a href="{{ route('new') }}">New Product</a></li>
    </ul>
  </div>
</nav>

  
<div class="container">
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Title</th>
        <th>Mrp</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @if(!empty($products))
        @foreach($products as $key=>$product)
            <tr>
                <td>{{++$key}}</td>
                <td>{{ $product['productName'] }}</td>
                <td>{{ $product['title'] }}</td>
                <td>{{ $product['mrp'] }}</td>
                <td>@if($product['status']==0)
                    <a href="{{url('status')}}/{{$product['id']}}/active" class="btn btn-warning">Deactive</a>
                    @else
                        <a href="{{url('status')}}/{{$product['id']}}/deactive" class="btn btn-success">Active</a>
                    @endif
                </td>
                <td><a href="{{url('status')}}/{{$product['id']}}/delete" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
  </table>
  </div>
</div>
</body>
</html>
