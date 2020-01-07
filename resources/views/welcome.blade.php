<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mobile Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">Mobile Shop</div>
                <ul>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Mobile Shop</h1>
                    <p>Largest Online Mobile Shop in Bangladesh</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Sign Up</a>
                        <a href="#" class="button button-white">Announcements</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/smartphone-laravel.png" alt="hero image">
                </div>
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Available Products</h1>

                <p class="section-description text-center">Latest mobile phones at the most affordable price...</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>


                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/smartphone.png" alt="product"></a>
                        <a href="#"><div class="product-name">smartphone</div></a>
                        <div class="product-price">$99.99</div>
                    </div>
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart"></i> by Shahriar Rahi</div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>
