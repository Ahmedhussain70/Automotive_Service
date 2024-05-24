<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/icon.png" type='image/x-icon'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&family=Syne:wght@400;500;600;700;800&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>CAREX</title>
    <style>

.account {
  display: flex;
  align-items: center;
}

.profile-pic {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: contain;
  border: 1px solid;
  border-color: red;
  background-color: black;
}

.account-name {
  margin-left: 10px;
  color: #fff;
}
    </style>
</head>
<body>
    <button id="btn-up" class="col-lg-12 col-12">
      <i class="fa-solid fa-arrow-up"></i>
    </button>
    <!-- Cursor -->
    <div class="cursor js-cursor"></div>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="/"> <img src="img/logo-light.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>CARE<span>X</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse menu" id="navbar">
                <ul class="navbar-nav sidebar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle {{ request()->is('#home') ? 'active' : ''}}" href="#home">Home </a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('#about') ? 'active' : ''}}" href="#about">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link"  role="button" href="#Services">Services</a>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link"  role="button" href="#Process" >Process</a>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link" role="button" href="#Team">Team</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#Our Blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contact">Contact</a></li>
                    {{-- <form action="{{ route('cart') }}" method="GET"> --}}
                        <li class="nav-item"><a class="nav-link" href="cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    {{-- </form> --}}
                    <li class="nav-item nav-link ms-5">
                      <div class="dark-light">
                         <i class='bx bx-moon moon'></i>
                         <i class='bx bx-sun sun'></i>
                     </div>
                  </li>
                    @if (Auth::check())
                    <div class="navbar" style="background-color: transparent;">
  <!-- Other navbar content -->
  <div class="account nav-item dropdown">
    <a href="javascript:void(0)" id="drop2"
                  aria-expanded="false">
                  <img src="/img/logo-light.png" alt="Profile" class="profile-pic">
                  <span class="account-name">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2" style="
    margin-top: 200px;
    width: 20px;">
                  <div class="message-body">
                    <a href="userProfile" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="fa-regular fa-user" style="font-size: 17px;margin-top: -12px;"></i>
                      <p class="mb-0 fs-3" style="
    font-size: 15px !important;
">My Profile</p>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-danger mx-3 mt-2 d-block">Logout</button>
                    </form>
                  </div>
                </div>
                </div>
                    @else
                    <li class="nav-item nav-link-1"><a class="nav-link ms-5" href="login"
                  ><i class="fa-regular fa-user user"></i></a></li> @endif
                </ul>
            </div>
        </div>
    </nav>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/jquery-migrate-3.4.1.min.js"></script>
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/jquery.isotope.v3.0.2.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scrollIt.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>
    <script src="/js/select2.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/before-after.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>
