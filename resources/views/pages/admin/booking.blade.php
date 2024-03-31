@include('../componantes/navadmin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service Date</th>
      <th scope="col">Service Time</th>
      <th scope="col">Service Type</th>
      <th scope="col">Car Model</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($booking as $book)
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">{{$book->bookingID}}</th>
      <td>{{$book->bookingName}}</td>
      <td>{{$book->phone}}</td>
      <td>{{$book->service_Date}}</td>
      <td>{{$book->service_Time}}</td>
      <td>{{$book->service_type}}</td>
      <td>{{$book->car_model}}</td>
      
      <td>
          <input class="btn btn-info" type="submit" value="Accept">
        </form>
      <a class="btn btn-Danger" href="delete/{{$book->id}}">Reject</a></td>
      
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
                    url:"search",
                    type:"GET",
                    data:{'search':query},
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