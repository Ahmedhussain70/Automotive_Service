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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">User Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($user as $users)
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->phone_number}}</td>
      <td>{{$users->address}}</td>
      <td><form action="{{ url('/update', $users->id) }}" method="post">    
        @csrf
        @method('PUT')
        <select class="form-select" name="userType" aria-label="select example" >
                  <option selected disabled>{{$users->userType}}</option>
                  <option value="Admin">Admin</option>
                  <option value="Engineer">Engineer</option>
                  <option value="Technical">Technical</option>
                  <option value="User">User</option>
              </select></td>
      <td>
          <input class="btn btn-info" type="submit" value="Update">
        </form>
      <a class="btn btn-Danger" href="delete/{{$users->id}}">Delete</a></td>
      
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
                    url:"searchUser",
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