<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearIT - Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
    
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">WearIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">WearIT</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/product') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Log In</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Slider 3.jpg') }}" class="d-block w-100" alt="..." height="900px">
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ url('/product') }}"><button class="btn btn-primary" type="submit">Shop Now</button></a><br><br>
                    <p>"Discover Style Redefined - Elevate Your Wardrobe with WearIT's Trendiest Collection!"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Slider 2.jpg') }}" class="d-block w-100" alt="..." height="900px">
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ url('/product') }}"><button class="btn btn-primary" type="submit">Shop Now</button></a><br><br>
                    <p>"Discover Style Redefined - Elevate Your Wardrobe with WearIT's Trendiest Collection!"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Slider 1.jpg') }}" class="d-block w-100" alt="..." height="900px">
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ url('/product') }}"><button class="btn btn-primary" type="submit">Shop Now</button></a><br><br>
                    <p>"Discover Style Redefined - Elevate Your Wardrobe with WearIT's Trendiest Collection!"</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Featured Products -->
    <section class="container my-5">
        <h2 class="text-center">Featured Products</h2>
        <div class="row" id="featured-products">

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/Ft product 1.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Black Hoodie</h5>
                        <p class="card-text">$24.99</p>
                        <a href="{{ url('/product') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/Ft product 2.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Textured T-shirt</h5>
                        <p class="card-text">$14.99</p>
                        <a href="{{ url('/product') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/Ft product 3.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Ripped Jeans</h5>
                        <p class="card-text">$29.99</p>
                        <a href="{{ url('/product') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-dark text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h1>WearIT</h1>

                    <p>
                        WearIT is a modern, trendsetting e-commerce brand dedicated to bringing you the latest in
                        stylish, comfortable, and affordable clothing. Our mission is to make fashion accessible for
                        everyone, with a carefully curated selection of apparel that blends quality with contemporary
                        designs. From casual everyday wear to chic statement pieces, WearIT caters to all your wardrobe
                        needs, offering a wide range of products for every style preference and occasion.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0" id="footer-links">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="{{ url('/') }}" class="text-white" id="link">Home</a>
                        </li> <br>
                        <li>
                            <a href="{{ url('/product') }}" class="text-white" id="link">Products</a>
                        </li> <br>
                        <li>
                            <a href="{{ url('/contact') }}" class="text-white" id="link">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="text-center p-3 bg-dark" id="copy" style="background-color: black;">
            <div class="col-md-17 text-center">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/1742a6fc29.js" crossorigin="anonymous"></script>

</body>

</html>