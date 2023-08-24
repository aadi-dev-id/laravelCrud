<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecommerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/') }}">All Product</a></li>
      <li class="active"><a href="{{ route('new') }}">New Product</a></li>
    </ul>
  </div>
</nav>

  
<div class="container">
<form class="form-horizontal" action="{{url('add')}}" method="post">
  @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
      @error('title')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mrp">MRP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mrp" name="mrp" placeholder="Enter mrp">
      @error('mrp')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="Description">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="desc" id="Description" placeholder="Enter Description">
      @error('desc')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
