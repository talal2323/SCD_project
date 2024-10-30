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
                            <a class="nav-link active" aria-current="page" href="{{ url('/product') }}">Products</a>
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


    <!-- Products Section -->
    <section class="container my-5" style="margin-top: 80px;"> <br>

        <!-- Tabs for Men and Women Sections -->
        <ul class="nav nav-tabs" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="men-tab" data-bs-toggle="tab" data-bs-target="#men-section"
                    type="button" role="tab" aria-controls="men-section" aria-selected="true">Men</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="women-tab" data-bs-toggle="tab" data-bs-target="#women-section"
                    type="button" role="tab" aria-controls="women-section" aria-selected="false">Women</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="productTabsContent">
            <!-- Men Section with Accordion -->
            <div class="tab-pane fade show active" id="men-section" role="tabpanel" aria-labelledby="men-tab">
                <div class="accordion my-4" id="menAccordion">
                    <!-- Jackets Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="menJacketsHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#menJackets" aria-expanded="true" aria-controls="menJackets">
                                Jackets
                            </button>
                        </h2>

                        <div id="menJackets" class="accordion-collapse collapse show"
                            aria-labelledby="menJacketsHeading" data-bs-parent="#menAccordion">

                            <div class="accordion-body row" id="men-jackets">
                                <!-- Men's Jackets Products -->

                                <div class="col-md-4">

                                    <div class="card">
                                        <img src="{{ asset('images/Ft product 1.png') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Black Hoodie</h5>
                                            <p class="card-text">$24.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('Ft product 1.png', 'Black Hoodie', '$24.99', 'A comfortable and versatile black hoodie, perfect for layering and casual everyday wear.')">
                                                View Product
                                            </button>
                                        </div>

                                    </div>
                                    <br> <br>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/jacket product 1.jpg') }}" class="card-img-top" alt="Denim Black Jacket">
                                        <div class="card-body">
                                            <h5 class="card-title">Denim Black</h5>
                                            <p class="card-text">$39.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('jacket product 1.jpg', 'Denim Black', '$39.99', 'A stylish black denim jacket perfect for casual wear.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/jacket product 2.jpg') }}" class="card-img-top" alt="Denim Black Jacket">
                                        <div class="card-body">
                                            <h5 class="card-title">Basic Zip Up Gilet</h5>
                                            <p class="card-text">$34.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('jacket product 2.jpg', 'Basic Zip Up Gilet', '$34.99', 'Zip up style meets practicality with our Basic Zip Up Gilet. Made with durable polyester, this gilet is perfect for any outdoor adventure. Stay warm and stylish with this essential piece.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- T-Shirts Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="menTShirtsHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#menTShirts" aria-expanded="false" aria-controls="menTShirts">
                                T-Shirts
                            </button>
                        </h2>
                        <div id="menTShirts" class="accordion-collapse collapse" aria-labelledby="menTShirtsHeading"
                            data-bs-parent="#menAccordion">
                            <div class="accordion-body row" id="men-tshirts">
                                <!-- Men's T-Shirts Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/Ft product 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Textured T-shirt</h5>
                                            <p class="card-text">$14.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('Ft product 2.jpg', 'Textured T-shirt', '$14.99', 'Unleash your playful side with our textured T-shirt! Made from soft, breathable cotton, this regular fit shirt adds a unique twist to your wardrobe. Get ready to stand out with subtle texture and ultimate comfort.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/t-shirt product 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Color Blocking Knitted T-shirt</h5>
                                            <p class="card-text">$9.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('t-shirt product 1.jpg', 'Color Blocking Knitted T-shirt', '$9.99', 'Get ready to make a statement with our Color Blocking Knitted T-shirt! With its unique design, this tee will elevate any outfit. The soft knit material provides both comfort and style.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/t-shirt product 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Full Sleeve Graphic T-shirt</h5>
                                            <p class="card-text">$19.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('t-shirt product 2.jpg', 'Full Sleeve Graphic T-shirt', '$19.99', 'Be casually cool in our Full Sleeve Graphic T-shirt. This regular fit tee boasts a playful graphic design on comfy cotton fabric. Perfect for everyday wear, this tee is sure to add a touch of fun to your wardrobe. Get yours today!')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Jeans Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="menJeansHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#menJeans" aria-expanded="false" aria-controls="menJeans">
                                Jeans
                            </button>
                        </h2>
                        <div id="menJeans" class="accordion-collapse collapse" aria-labelledby="menJeansHeading"
                            data-bs-parent="#menAccordion">
                            <div class="accordion-body row" id="men-jeans">
                                <!-- Men's Jeans Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/Ft product 3.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Ripped Jeans</h5>
                                            <p class="card-text">$29.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('Ft product 3.jpg', 'Ripped Jeans', '$29.99', 'Trendy ripped jeans with a rugged look, designed for both style and comfort, perfect for casual outings.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/jeans product 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Faded Black Straight Fit Jeans</h5>
                                            <p class="card-text">$24.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('jeans product 1.jpg', 'Faded Black Straight Fit Jeans', '$24.99', 'These jeans are not just your basic black. With a faded black color and straight fit, they add a touch of edge to any outfit. Made of soft, comfortable cotton, youll never want to take them off.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/jeans product 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Loose Relaxed Jeans</h5>
                                            <p class="card-text">$32.00</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('jeans product 2.jpg', 'Loose Relaxed Jeans', '$32.00', 'These Loose Relaxed Jeans are like your favorite pair of sweatpants, but better! Made with soft and breathable cotton, they offer all-day comfort and a relaxed fit. Perfect for lounging or running errands.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>

                    <!-- Shoes Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="menShoesHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#menShoes" aria-expanded="false" aria-controls="menShoes">
                                Shoes
                            </button>
                        </h2>
                        <div id="menShoes" class="accordion-collapse collapse" aria-labelledby="menShoesHeading"
                            data-bs-parent="#menAccordion">
                            <div class="accordion-body row" id="men-shoes">
                                <!-- Men's Shoes Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/shoes product 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Chunky High Top Sneakers</h5>
                                            <p class="card-text">$44.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('shoes product 1.jpg', 'Chunky High Top Sneakers', '$44.99', 'Get ready to kick it in style with our Chunky High Top Sneakers! These shoes are more than just a funky fashion statement - they provide unbeatable comfort and support for all-day wear. Be prepared to be the talk of the town with these must-have kicks.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/shoes product 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Chunky Sole Contrast Trainers</h5>
                                            <p class="card-text">$39.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('shoes product 2.jpg', 'Chunky Sole Contrast Trainers', '$39.99', 'Step up your shoe game with our Chunky Sole Contrast Trainers! These statement sneakers feature a chunky sole for added comfort and style. Perfect for adding a pop of personality to any outfit. Get ready to turn heads and make a statement with these trendy trainers.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Women Section with Accordion -->
            <div class="tab-pane fade" id="women-section" role="tabpanel" aria-labelledby="women-tab">
                <div class="accordion my-4" id="womenAccordion">
                    <!-- Jackets Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="womenJacketsHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#womenJackets" aria-expanded="true" aria-controls="womenJackets">
                                Jackets
                            </button>
                        </h2>
                        <div id="womenJackets" class="accordion-collapse collapse show"
                            aria-labelledby="womenJacketsHeading" data-bs-parent="#womenAccordion">
                            <div class="accordion-body row" id="women-jackets">
                                <!-- Women's Jackets Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women jacket 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Denim Jacket</h5>
                                            <p class="card-text">$29.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women jacket 1.jpg', 'Denim Jacket', '$29.99', 'Classic denim jacket with a tailored fit, perfect for layering and adding a touch of style to any outfit.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women jacket 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Washed Out Cropped Denim Jacket</h5>
                                            <p class="card-text">$39.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women jacket 2.jpg', 'Washed Out Cropped Denim Jacket', '$39.99', 'Trendy washed-out cropped denim jacket with a relaxed fit and frayed hem, ideal for casual and chic looks.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>

                    <!-- T-Shirts Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="womenTShirtsHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#womenTShirts" aria-expanded="false" aria-controls="womenTShirts">
                                T-Shirts
                            </button>
                        </h2>
                        <div id="womenTShirts" class="accordion-collapse collapse" aria-labelledby="womenTShirtsHeading"
                            data-bs-parent="#womenAccordion">
                            <div class="accordion-body row" id="women-tshirts">
                                <!-- Women's T-Shirts Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women t-shirt 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Super Cropped High Neck</h5>
                                            <p class="card-text">$19.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women t-shirt 1.jpg', 'Super Cropped High Neck', '$19.99', 'Experience the ultimate comfort and style with our Super Cropped High Neck top. Made from a luxurious blend fabric, this top is designed to hug your curves and provide a flattering fit. Perfect for any occasion, this top is a must-have for any fashion-forward individual. Elevate your wardrobe with the Super Cropped High Neck top!')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women t-shirt 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Quarter Zipper Cropped Neck T-shirt</h5>
                                            <p class="card-text">$24.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women t-shirt 2.jpg', 'Quarter Zipper Cropped Neck T-shirt', '$24.99', 'Introducing our Quarter Zipper Cropped Mock Neck T-shirt - the perfect blend of comfort and style! Made with 95% cotton and 5% spandex for a slim fit. The quarter zipper adds a touch of unique flair to this mock neck design.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>

                    <!-- Jeans Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="womenJeansHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#womenJeans" aria-expanded="false" aria-controls="womenJeans">
                                Jeans
                            </button>
                        </h2>
                        <div id="womenJeans" class="accordion-collapse collapse" aria-labelledby="womenJeansHeading"
                            data-bs-parent="#womenAccordion">
                            <div class="accordion-body row" id="women-jeans">
                                <!-- Women's Jeans Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women jeans 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Cropped Basic Mini Flare Jeans</h5>
                                            <p class="card-text">$24.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women jeans 1.jpg', 'Cropped Basic Mini Flare Jeans', '$24.99', 'Upgrade your denim game with our Cropped Basic Mini Flare Jeans! Made with a perfect blend of 98% cotton and 2% spandex, these jeans provide both comfort and style. The mini flare cut adds a playful touch to any outfit. Perfect for those who dont take themselves too seriously!')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women jeans 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Basic Skinny Flare Jeans</h5>
                                            <p class="card-text">$19.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women jeans 2.jpg', 'Basic Skinny Flare Jeans', '$19.99', 'Get your basic skinny flare jeans now! Made with 98% cotton and 2% spandex, these jeans offer the perfect blend of comfort and style. Elevate your wardrobe with these versatile jeans that will hug your curves in all the right places. Perfect for any occasion.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women jeans 3.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Super Wide Leg Jeans</h5>
                                            <p class="card-text">$39.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women jeans 3.jpg', 'Super Wide Leg Jeans', '$39.99', 'Get ready to make a fashion statement with our Super Wide Leg Jeans! These trendy jeans are perfect for adding some flare to your wardrobe. With a wide leg design, youll stay comfortable and stylish all day long.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>

                    <!-- Shoes Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="womenShoesHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#womenShoes" aria-expanded="false" aria-controls="womenShoes">
                                Shoes
                            </button>
                        </h2>
                        <div id="womenShoes" class="accordion-collapse collapse" aria-labelledby="womenShoesHeading"
                            data-bs-parent="#womenAccordion">
                            <div class="accordion-body row" id="women-shoes">
                                <!-- Women's Shoes Products -->

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women shoes 1.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Sleek Chelsea Boots</h5>
                                            <p class="card-text">$59.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women shoes 1.jpg', 'Sleek Chelsea Boots', '$59.99', 'Elevate your style with our Sleek Chelsea Boots! These premium boots feature a modern and sophisticated design, perfect for any occasion. Slip into comfort and elevate your outfit with confidence. Step up your shoe game now!')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>

                                    <br><br>

                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ asset('images/women shoes 2.jpg') }}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Slip On Mules</h5>
                                            <p class="card-text">$39.99</p>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#productModal"
                                                onclick="openProductModal('women shoes 2.jpg', 'Slip On Mules', '$39.99', 'Elegant and comfortable slip-on mules, featuring a sleek design with a cushioned sole, perfect for effortless style and all-day wear.')">
                                                View Product
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <h5>No More Products...</h5>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Modal Template -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Placeholder for product image -->
                    <img id="productImage" src="" class="img-fluid" alt="Product Image">
                    <!-- Placeholder for product description -->
                    <p id="productDescription" class="mt-3"></p>
                    <!-- Placeholder for product price -->
                    <p id="productPrice"><strong>Price:</strong> </p>

                    <!-- Size Options -->
                    <div class="mb-3">
                        <label for="sizeSelect" class="form-label"><strong>Select Size:</strong></label>
                        <select class="form-select" id="sizeSelect">
                            <option value="S">Small (S)</option>
                            <option value="M">Medium (M)</option>
                            <option value="L">Large (L)</option>
                        </select>
                    </div>

                    <!-- Quantity Selector -->
                    <div class="mb-3">
                        <label for="quantityInput" class="form-label"><strong>Quantity:</strong></label>
                        <input type="number" class="form-control" id="quantityInput" value="1" min="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>


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