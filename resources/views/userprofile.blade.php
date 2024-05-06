@include('../componantes/navbar')
@include('../componantes/loading')
@if(Session::has('success'))
        <div id="alertt" class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Document</title>
    <style>
  input,
  textarea,
  select {
  width: 75%;
  /* float: right; */
  height: 36px;
  margin-top: 5px;
  /* text-align: right; */
  text-indent: 5px;
  font-size: 12.6pt;
  border-radius: 5px;
  border: solid 1px #D3D3D3;
  -webkit-transition: 1s; /* Safari */
  transition: 1s;
}
input,textarea[type=text]:hover{
  box-shadow: 0 0 5pt 0.5pt #5D87FF;
}
input,textarea[type=text]:focus {
  box-shadow: 0 0 0pt 1pt #D3D3D3;
  outline-width: 0px;
}

.fa-solid{
  font-size: 40px
}
      /* .tire-input{
        width:61% !important;
      } */
    </style>
</head>
<body style="margin-bottom: 1rem;">
    <div class="container mx-auto mt-4">
      <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100" style="margin-top: 80px !important">
          <div class="card-body">
      <form action="{{ url('/updateProfile1') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="">Personal information</h2>
      <p class="text-black">Notce This Page Is Using By Administrator</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="Name" class="block text-sm font-medium leading-6 mt-2 col-12">Name</label>
          <div class="mt-2">
            <div class="">
              <input type="text" name="name" id="Name"  class="" placeholder="" value="{{$user->name}}" style="height: 8px; box-shadow: 0 0 0pt 1pt #D3D3D3;">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
            <label for="price" class="block text-sm font-medium leading-6 mt-2 col-12">Email</label>
            <div class="mt-2">
              <input id="price" placeholder="Enter the email" name="email" type="text" class="tire-input" value="{{$user->email}}" style="height: 8px; box-shadow: 0 0 0pt 1pt #D3D3D3;">
            </div>
          </div>


        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 mt-2 col-12">Password</label>
          <div class="mt-2">
            <input id="about" placeholder="Enter your password" name="password"  style="width:169vh; box-shadow: 0 0 0pt 1pt #D3D3D3;">
          </div>
        </div>
    </div>

  <div class="mt-5 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
    </div>
    </div>
    </div>
    </div>  
</body>
</html>