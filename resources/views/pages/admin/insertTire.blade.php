@include('../componantes/navadmin')

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
  input,textarea {
  width: 75%;
  /* float: right; */
  height: 32px;
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
      /* .tire-input{
        width:61% !important;
      } */
    </style>
</head>
<body style="margin-bottom: 1rem">
    <div class="container mx-auto">

<form action="{{ url('/insert') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="">Add Tires</h2>
      <p class="text-black">Notce This Page Is Using By Administrator</p>

      <div class="col-span-full mt-5">
          <label for="cover-photo" class="">Add Photo</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload">
                  <input id="file-upload" name="image" type="file" style="border: unset !important;">
                </label>
                <!-- <p class="pl-1">or drag and drop</p> -->
              </div>
              <p class="mt-3 text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <input class="form-control" type="file" name="image"> -->
    
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="Name" class="block text-sm font-medium leading-6 text-white">Tire Name</label>
          <div class="mt-2">
            <div class="">
              <input type="text" name="proName" id="Name"  class="" placeholder="Enter the tire name">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
            <label for="price" class="block text-sm font-medium leading-6 text-white">Price</label>
            <div class="mt-2">
              <input id="price" placeholder="Enter the price" name="price" type="text" class="tire-input">
            </div>
          </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-white">Description</label>
          <div class="mt-2">
            <textarea id="about" placeholder="Enter the description" name="description"  style="width: 60rem; height: 80px !important; box-shadow: 0 0 0pt 1pt #D3D3D3;"></textarea>
          </div>
        </div>
    </div>
  <div class="mt-5 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>
    </div>
</body>
</html>