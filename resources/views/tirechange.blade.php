@include('../componantes/loading')
@include('../componantes/navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Tire Change</title>
    <style>
        body{
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mt-24" style="width: 15rem;">
      <img class="card-img-top" style="height: 250px;" src="{{ asset('images/'.$product->image) }}">
      <div class="card-body">
        <h5 class="card-title">{{$product->proName}}</h5>
        <h6 class="card-text">{{$product->price}} L.E</h6>
        <p class="card-text">{{$product->description}}</p>
        <a href="#" class="btn btn-danger">Add to cart</a>
      </div>
    </div>
        </div>
    @endforeach
        </div>
    </div>
</body>
</html>