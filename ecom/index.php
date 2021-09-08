<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><img src="resources\logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="search-box">
                    <button class="btn-search"><i class="fas fa-search"></i>&#128269</button>
                    <input type="text" class="input-search" placeholder="Type to Search...">
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="#">&#9829 Wish list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&#128722 My cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sign in</a>
                        <a class="dropdown-item" href="#">Create Account</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Browse Catagories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mobile</a>
                        <a class="dropdown-item" href="#">Tablet</a>
                        <a class="dropdown-item" href="#">Laptop</a>
                        <a class="dropdown-item" href="#">Desktop</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mobiles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Vivo</a>
                        <a class="dropdown-item" href="#">Xiaomi</a>
                        <a class="dropdown-item" href="#">Oppo</a>
                        <a class="dropdown-item" href="#">Sony</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tablets
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Apple</a>
                        <a class="dropdown-item" href="#">Lenovo</a>
                        <a class="dropdown-item" href="#">Lava</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Showroom
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Apple</a>
                        <a class="dropdown-item" href="#">Lenovo</a>
                        <a class="dropdown-item" href="#">Lava</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact: +91 8765423980 <img src="https://i.ibb.co/N9P0K9H/239px-Whats-App-svg.png" width="20" height="20" /></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="c-wrapper">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="height: 40rem;">
                <div class="carousel-item active">
                    <img src="resources\carousel.jpg" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="resources\carousel2.jpg" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="resources\carousel3.jpg" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="resources\carousel4.jpg" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="resources\carousel5.jpg" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="resources\carousel6.jpg" alt="img">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <br><br><br><br><br>

    <div>
        <img src="resources\S2S3.jpg" alt="img">
    </div>

    <br><br><br><br><br>

    <div class="container">

        <h1>Our Products</h1>
        <p>The FHD+ 2340 x 1080 resolution enriches your viewing experience by delivering crisp visuals and sharper details. The high screen-to-body ratio results in a truly refined viewing experience.</p>
        <br><br><br><br><br>

        <h2 class="products">SMART PHONE</h2>
        <br>
        <div class="row">
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorM1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM1</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorM2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM2</h5>
                        <p class="card-text">Rs. 2,500</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorM3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorL1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorL1</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorY1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorY1</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorS2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS2</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorS3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <h2 class="products">PHONE ACCESSORIES</h2>
        <br>
        <div class="row">
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorA1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM1</h5>
                        <p class="card-text">Rs. 3,000</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorA2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM2</h5>
                        <p class="card-text">Rs. 2,500</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorA3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorM3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorA4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorL1</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorBH1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorY1</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorBS1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS2</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorBS2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorBT1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorBT2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorC10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorNK1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorNK2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorS2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorS3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorV04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorV19.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorV24.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorW04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorWE1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-0 py-sm-0">
                <div class="card">
                    <img src="resources\cellecorWE2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CellecorS3</h5>
                        <p class="card-text">price here</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            CELLECOR
                        </h6>
                        <p>
                            CELLECOR MOBILE , since its inception, has become one of the leading players to market affordable mobile phones in India under the brand “CELLECOR ®”. Cellecor ® has already sold more than 1 million handsets to Indian customers. Serving customers and giving them the utmost value for their money has been the main aim.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a class="text-white">Smart Phone</a>
                        </p>
                        <p>
                            <a class="text-white">Phone Accessories</a>
                        </p>
                        <p>
                            <a class="text-white">FEATURE PHONE</a>
                        </p>
                        <p>
                            <a class="text-white">FEATURE PHONE</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            SUPPORT
                        </h6>
                        <p>
                            <a class="text-white">About Us</a>
                        </p>
                        <p>
                            <a class="text-white">Service Centers</a>
                        </p>
                        <p>
                            <a class="text-white">Contact Us</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Address</h6>
                        <p><i class="fas fa-home mr-3"></i>&rArr; 407, 4th Floor , Crown Heights, Rohini Sector-10 Near Crowne Plaza Hotel, New Delhi-110085</p>
                        <p><i class="call"></i>&#9743; 1800 1214 704</p>
                        <p><i class="email"></i>&#9993; info@cellecor.in</p>
                        <p><i class="recycle"></i>&#9842; B-29016(1738)/(EPR)/19/WM-III Division</p>
                        <p><i class="service"></i>&#9881; Service hours : 10:00am to 06:00pm</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            Cellecor | © 2019 All copyrights reserved. Design by
                            <a class="text-white" href="#"> UE Developer</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->
    <!-- End of .container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>