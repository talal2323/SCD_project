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
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/product') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/contact') }}">Contact Us</a>
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


    <!-- Contact Form Section -->
    <section class="container my-5"> <br>
        <h2>Contact Us</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div> <br>
            <button type="submit" class="btn btn-primary" onclick="initializeContactForm()">Submit</button>
        </form>
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

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>
                        <strong>Email:</strong> <a href="mailto:support@wearit.com" class="text-white"
                            id="email">support@wearit.com</a><br> <br>
                        <strong>Phone:</strong> +1 (555) 123-4567<br> <br>
                        <strong>Business Hours:</strong> Mon-Fri, 9 AM - 5 PM
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