@include('../componantes/navbar')
@include('../componantes/loading')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Tires</title>
    <style>
        body{
            margin-top: 150px;
        }

        .minus,
        .plus {
            flex: 0 0 auto;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            background: white;
            font-size: 24px;
            border: 1px solid lightgrey;
            cursor: pointer;
            -webkit-appearance: none;
            margin: 0 10px;
            text-decoration: none;
            padding-left: 12px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
        @if($product->category === "Tire")
    
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mt-24 mb-5" style="width: 15rem;">
      <img class="card-img-top" style="height: 250px !important;" src="{{ asset('images/'.$product->image) }}">
      <div class="card-body">
        <form action="{{ url('/order')}}" method="post">
            @csrf
            <h5 class="card-title">{{$product->proName}}</h5>
            <h6 class="card-text">{{$product->price}} L.E</h6>
            <a class="minus">-</a>
            <input class="range" type="range" name="qty" min="1" step="1" value="1" style="width: 63px;">
            <a class="plus">+</a>
            <output for="range" class="output">1</output>
            <p class="card-text">{{$product->description}}</p>
            @if (Auth::check())
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="btn btn-danger">
            @endif
            <input type="hidden" name="pro_id" value="{{$product->proID}}" class="btn btn-danger">
            <button type="submit" class="btn btn-danger">Add to cart</button>
        </form>
      </div>
    </div>
        </div>
        @endif
    @endforeach
        </div>
    </div>
    <script>
    

$(document).ready(function() {
  $(".minus").click(function(event) {
    var output = $(this).siblings(".output");
    var range = $(this).siblings(".range");
    var currentValue = parseInt(range.val(), 10);
    if (currentValue > 1) {
      range.val(currentValue - 1).change();
      output.text(range.val());
    }
  });

  $(".plus").click(function(event) {
    var output = $(this).siblings(".output");
    var range = $(this).siblings(".range");
    var currentValue = parseInt(range.val(), 10);
    range.val(currentValue + 1).change();
    output.text(range.val());
  });

  $(".range").on('input change', function(event) {
    $(this).siblings(".output").text($(event.currentTarget).val());
  });
});
</script>
</body>
</html>