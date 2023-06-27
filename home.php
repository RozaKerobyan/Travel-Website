<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/img1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel arround of the world</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/img2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/img3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make your tour worthwile</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
    </div>

    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <img src="images/icon1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images/icon3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images/icon5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="images/icon6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/img-home.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum earum aperiam impedit blanditiis, consectetur ipsam! Ad esse alias, architecto quo, neque iusto, sit est voluptate at possimus aperiam illum et.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/yerevan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Yerevan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ad?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/tbilisi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tbilisi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ad?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/moskva.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Moscow</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ad?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>  Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy police</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>  +995-555-555-555</a>
                <a href="#"> <i class="fas fa-phone"></i> +995-555-666-777</a>
                <a href="#"> <i class="fas fa-envelope"></i> tourismexample@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Akhalkalalki, Georgia</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>

        <div class="credit">Created by <span>Roza Kerobyan</span> | All right reserved</div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>