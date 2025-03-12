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
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <?= session_start(); ?>
    <?= include "partials/header.php"; ?>

    <!-- Header Section Starts -->

    
        <!-- Nav Bar [Home , Featured ...etc]-->
        
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

    <!-- login form -->

    

    <!-- Home Section Starts -->

    <section class="home" id="home">

        <div class="row">

            <!-- Chnage discarded As Original image was found -->
            <div class="content"> <!--style="margin-bottom: 1dvh;"-->
                <h3> 
                    <?php

                        if(isset($_SESSION['user']))
                        { 
                            echo"Hi, ".$_SESSION['user']; 
                        } 
                        else
                        {
                            echo"Hi, User";
                        }
                    ?>
                            
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis blanditiis sint facilis, iusto nemo
                    soluta facere rerum error incidunt voluptatem.</p>

                <a href="#" class="btn">shop Now</a>
            </div>

            <div class="swiper books-slider">

                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="images/book2.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/book3.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/book2.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/book3.jpg" alt=""></a>

                    <a href="#" class="swiper-slide"><img src="images/book3.jpg" alt=""></a>

                    <a href="#" class="swiper-slide"><img src="images/book2.jpg" alt=""></a>

                </div>
                <!-- Shelf img tag should be Here -->

                <img src="images/stand.png" alt="" class="stand">
            </div>

        </div>

    </section>

    <!-- home Section Ends -->


    <!-- icons section Starts -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>Free Shipping</h3>
                <p>order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>Secure Payment</h3>
                <p>100 Secure Payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Easy Returns</h3>
                <p>10 Days Returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 Support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- Icon Section Ends -->

    <!-- featured Section Starts -->

    <section class="featured" id="featured">

        <h1 class="heading">
            <span>
                Featured Books
            </span>
        </h1>
        <div class=" swiper featured-slider">

            <div class="swiper-wrapper">

                <!-- 1st Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span> </div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 2nd Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 3rd Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 4th Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span> </div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 5th Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span> </div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 6th Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 7th Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>

                <!-- 8th Book view -->
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>

                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-eye"></a>

                    </div>

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- featured Section Ends -->



    <!-- Newsletter Section Starts -->

    <section class="newsletter">

        <form action="">

            <h3>subscribe for latest updates</h3>

            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">

        </form>
    </section>

    <!-- Newsletter Section Ends -->




    <!-- Arrivals section Starts -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>New Arrivals</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <!-- 1st Book of Arrivals Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                    </div>
                </a>

                <!-- 2nd Book of Arrivals Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 3rd Book In Arriavl Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book3.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 4th Book -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book1.webp" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 5th Book -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book3.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>


            </div>

        </div>

        <!-- Seprate 5 Books -->

        <div class="swiper arrivals-slider arrivals-slider-adjust"> <!-- Change for bottom overflow -->

            <div class="swiper-wrapper">

                <!-- 6th Book of Arrivals Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                    </div>
                </a>

                <!-- 7th Book of Arrivals Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 8th Book In Arriavl Section -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book3.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 9th Book -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book1.webp" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <!-- 10th Book -->

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="images/book3.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>new arrivals</h3>

                        <div class="price">$15.99 <span>$20.99</span></div>

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- Arrivals Section Ends -->

    <!-- Deal Section Starts -->

    <section class="deal">

        <div class="content">
            <h3>Deal of The Day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsa aliquam doloribus, ipsam odio
                non dicta magni sit rem adipisci?</p>

            <a href="#" class="btn">Shop Now</a>

        </div>

        <div class="image">
            <img src="images/deal-img.jpg" alt="">
        </div>

    </section>

    <!-- Deal Section Ends -->


    <!-- Reviews Section Starts -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>Client's Reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <!-- 1st Review -->

                <div class="swiper-slide box">

                    <img src="images/pic-11.png" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- 2nd review block -->
                <div class="swiper-slide box">

                    <img src="images/pic-12.jpg" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- 3rd review block -->
                <div class="swiper-slide box">

                    <img src="images/yaa.jpg" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- 4th review block -->
                <div class="swiper-slide box">

                    <img src="images/pic-11.png" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- 5th review block -->
                <div class="swiper-slide box">

                    <img src="images/pic-12.jpg" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- 6th review block -->
                <div class="swiper-slide box">

                    <img src="images/pic-12.jpg" alt="">
                    <h3>john deo</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum at pariatur nobis
                        voluptate ipsa, corrupti sit tempora magni dolores!</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Reviews Section Ends -->

    <!-- Blogs Section Starts -->
    <section class="blogs" id="blogs">

        <h1 class="heading">
            <span>
                Our Blogs
            </span>
        </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <!-- 1st Blog -->
                <div class="swiper-slide box">

                    <div class="image">
                        <img src="images/blog-01.webp" alt="">
                    </div>

                    <div class="content">
                        <h3>
                            blog title goes here
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, neque?</p>

                        <a href="#" class="btn">read more</a>
                    </div>

                </div>

                <!-- 2nd  Blog -->

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="images/blog-02.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>
                            blog title goes here
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, neque?</p>

                        <a href="#" class="btn">read more</a>
                    </div>

                </div>

                <!-- 3rd  Blog -->

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="images/blog-03.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>
                            blog title goes here
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, neque?</p>

                        <a href="#" class="btn">read more</a>
                    </div>

                </div>

                <!-- 4th  Blog -->

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="images/blog-04.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>
                            blog title goes here
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, neque?</p>

                        <a href="#" class="btn">read more</a>
                    </div>

                </div>

                <!-- 5th Blog -->

                <div class="swiper-slide box">

                    <div class="image">
                        <img src="images/blog-02.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>
                            blog title goes here
                        </h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, neque?</p>

                        <a href="#" class="btn">read more</a>
                    </div>

                </div>

               
            </div>



        </div>
    </section>
    <!-- Blogs Section Ends -->


    <!-- Footer Section Starts -->
        <?= include "partials/footer.php" ?>
    <!-- Footer Section Ends -->

    <!-- Loder -->

    <div class="loader-container">
        <img src="images/loder-img.gif" alt="">
    </div>


    <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="js/home.js"></script>
    <script src="js/login.js"></script>

</body>

</html>