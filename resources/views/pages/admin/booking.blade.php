@include('../componantes/navadmin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Booking</title>

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
      <th scope="col">Email</th>
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
      <td>{{$book->email}}</td>
      <td>{{$book->phone}}</td>
      <td>{{$book->service_Date}}</td>
      <td>{{$book->service_Time}}</td>
      <td>{{$book->service_type}}</td>
      <td>{{$book->car_model}}</td>
      
      <td>
      <a href="#exampleModalToggle" data-id="{{$book->email}}" class="modelacc btn btn-primary" data-bs-toggle="modal"  role="button">
          Accept
        </a>

         <a class="modelrej btn btn-danger" data-id="{{$book->email}}">Reject</a>

          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered col-12">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Accept Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('/actionBooking')}}" method="post">
  <div class="container mb-3">
    <label for="exampleInputEmail1" class="form-label mt-2">Driver</label>
    <textarea name="Driver" type="text"  class="form-control" id="client" aria-describedby="emailHelp" Required></textarea>
    <div class="d-flex justify-content-between">
      <!-- <button type="submit" class="mt-3 btn btn-primary">Submit</button> -->
        <a id="mail" class="accep mt-3 btn btn-primary">Mail To</a>
    </div>
        </form>
      
    </tr>
    <script>
  $('.modelacc').on("click",function(){
    var ID=$(this).data('id');
    var subject = 'Booking Accept';
    $('#mail').on("click", function(){
      var client = $( "#client" ).val();
    // var driverNumber = $( "#driverNumber" ).val();
    // var car = $("#car" ).val();
    $('#mail').attr('href','mailto:'+ID+'?subject=' + subject + '&body=' + client);
  })
});

$('.modelrej').click(function(){
    var ID=$(this).data('id');
    var subject = 'Booking Rejected';
    var body = 'Your Booking Date Not Avalible Please Select Another Date';
    $('.modelrej').attr('href','mailto:'+ID+'?subject=' + subject +'&body=' + body);
});
</script>
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
                    url:"searchBooking",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
             });
            });
            });
        </script>
</body>

</html>