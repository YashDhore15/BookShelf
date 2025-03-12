<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <!-- Swiper JS USE SWIPER form CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="/Bookshelf/css/home.css">
</head>

<body>

    <!-- Header Section Starts -->

    <header class="header">

        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book">BookShelf</i></a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here..." id="search-box">

                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="/Bookshelf/views/cart.php" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
        </div>

        <!-- Nav Bar [Home , Featured ...etc]-->
        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">Featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">blogs</a>
            </nav>
        </div>


    </header>
    <!-- Header Section Ends -->

    <!-- Bottom Navbar -->


    <!-- if The Web-site is viewed in small tabs or
on mobile phone nav-bar will be at bottom -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-newspaper"></a> <!-- change in logo looks better than original -->
    </nav>

    <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="/Bookshelf/js/home.js"></script>
    <script src="/Bookshelf/js/login.js"></script>

</body>