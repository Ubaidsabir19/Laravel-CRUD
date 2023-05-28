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
        <div class = "row justify-center-center mt-2">
            <div class= "col-sm-8">
                <div class = "card mt-3 p-3">
                 <form method = "POST" action = "/products/store" enctype = "multipart/form-data">
                    @csrf
                    <div class = "form-group">
                     <label>Name</label>             
                     <input type = "text" name = "name" class = "form-control"/>
                    </div>
                    <br>
                    <div class = "form-group">
                     <label>Description</label>                  
                     <textarea type = "text" name = "description"  rows = "4" class = "form-control"></textarea>
                    </div>
                    <br>
                    <div class = "form-group">
                     <label>Image</label>
                     <input type = "file" name = "image" class = "form-control"/>
                    </div>
                    <br>
                    <button type = "submit" class = "btn btn-dark">Submit</button>
                 </form>
               </div>
            </div>
        </div>
     </div>
</body>
</html>