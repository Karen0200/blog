<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
        @if($errors->any())
<div class = "alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="email" name="email" class="form-control"></input>
        </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" id="password" name="password" class="form-control"></input>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" id="address" name="description" class="form-control"></input>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
