@include('../componantes/navadmin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
  <h2>asdasdadsa</h2>

  <div class="container">
  <div class="form-group">
                        <h4>Type by id, title and description!</h4>
                        <input type="text" name="search" id="search" placeholder="Enter search" class="form-control" onfocus="this.value=''">
                    </div>
                    
                </div>

                <div id="search_list"></civ>
                
  <table class="table">
    <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Product</th>
      <th scope="col">Date</th>
      <th scope="col">budget</th>
    </tr>
  </thead>
  @foreach ($allSales as $Transaction)
  <tbody class="table-group-divider">
    <tr>
      <td>{{$Transaction->name}}</td>
      <td>{{$Transaction->proName}}</td>
      <td>{{$Transaction->pur_date}}</td>
      <td>{{$Transaction->budget}}</td>
      <td>
    </tr>
  </div>
  </tbody>
  @endforeach
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});              
            $(document).ready(function(){
             $('#search').on('keyup',function(){
                 var query= $(this).val();
                 $.ajax({
                    url:"searchSales",
                    type:"GET",
                    data:{'searchSales':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
             });
             //end of ajax call
            });
            });
        </script>
</body>

</html>