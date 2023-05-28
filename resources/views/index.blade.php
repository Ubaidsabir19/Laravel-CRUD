<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset= "utf-8">
        <meta name = "viewport" content = "width = device-width , initial-scale = 1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Products</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="/">Products</a>
      </li>
    </ul>
  </div>
</nav>

     <div class = "container" >
        <div class = "text-right">
            <a href = "products/create" class = "btn btn-dark mt-2">New Product</a>
        </div>
        <h1>Products</h1>
     </div>
<div class = "mt-2 p-5">       
  <table class="table table-bordered bg-gray">
    <thead>
      <tr>
        <th>#</th>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <td>{{ $loop -> index }}</td>
        <td>{{ $product -> id }}</td>
        <td>{{ $product -> name }}</td>
        <td>{{ $product -> description }}</td>
        <td>
                <img src = "products/{{ $product -> image }} " class = "rounded-circle" width = "30" , Height = "30"/>
        </td>
        <td>
                <a href = "products/{{ $product->id }}/edit" class = "btn btn-dark btn-sm">Edit</a>
                <a href = "products/{{ $product->id }}/delete"class = "btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>