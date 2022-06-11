<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>


<div class="container mt-5">
<form action="{{ url('update/'.$data->id) }}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $data->name }}" id="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="{{ $data->email }}" name="email" id="email" placeholder="email">
  </div>
  
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" value="{{ $data->phone }}" id="phone" placeholder="Phone">
  </div>
  
    <div class="form-group">
    <label for="pwd">password</label>
    <input type="password" class="form-control" name="password" value="{{ $data->password }}" id="pwd" placeholder="Password">
  </div>
  
   <div class="form-group">
    <label for="pwd">Image</label>
<input type="file" class="form-control" name="image" id="pwd" placeholder="Password"><img class="mt-4" width="100px" src="{{ url('public/assets/'.$data->image) }}">
  </div>
  <input type="hidden" name="h-file" value="{{ $data->image }}">
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>