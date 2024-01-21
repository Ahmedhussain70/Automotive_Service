<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&family=Syne:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>CAREX</title>
</head>
<body>
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
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav sidebar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle {{ request()->is('/') ? 'active' : ''}}" href="#home">Home </a>
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
                </ul>
                <div class="navbar-right">
                    <div class="wrap">
                        <div class="icon"> <i class="carex-phone-call"></i> </div>
                        <div class="text">
                            <p>Need help?</p>
                            <h5><a href="tel:8551004444">855 100 4444</a></h5>
                        </div>
                    </div>
                </div>
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