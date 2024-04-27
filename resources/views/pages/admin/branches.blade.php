@include('../componantes/navadmin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Document</title>
<style>
    @keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

</style>
</head>
<body>
  <h2>asdasdadsa</h2>

  <div class="container">
  <div class="form-group">
                        <!-- <h4>Type by id, title and description!</h4>
                        <input type="text" name="search" id="search" placeholder="Enter search" class="form-control" onfocus="this.value=''">
                    </div>
                    
                </div>

                <div id="search_list"></civ> -->
                
                <div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mt-24 mb-5" style="width: 15rem; opacity: 0; animation: fadeIn 1s ease-out forwards;">
                <div class="card-body">
                    <h5 class="card-title">Cairo</h5>
                    <h6 class="card-text">Total Clients: {{ $Cairo }}</h6>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mt-24 mb-5" style="width: 15rem; opacity: 0; animation: fadeIn 1s ease-out forwards;">
                <div class="card-body">
                    <h5 class="card-title">Alex</h5>
                    <h6 class="card-text">Total Clients: {{ $Alex }}</h6>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mt-24 mb-5" style="width: 15rem; opacity: 0; animation: fadeIn 1s ease-out forwards;">
                <div class="card-body">
                    <h5 class="card-title">Sohag</h5>
                    <h6 class="card-text">Total Clients: {{ $Sohag }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>


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