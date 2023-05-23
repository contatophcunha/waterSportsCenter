<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.php" class="logo">Water Sports Center</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!-- booking section starts  -->

    <section class="booking">

        <h1 class="heading-title">Book your water sports!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Service:</span>
                    <input list="locationOptions" placeholder="Our Services" name="location">
                    <datalist id="locationOptions">
                        <option value="Jet-Ski">
                        <option value="Aquaslide">
                        <option value="O.V.N.I">
                        <option value="Double Kaiaks">
                        <option value="Pedal Sup">
                        <option value="Pedal Boat">
                        <option value="Cave Trips">

                    </datalist>
                </div>
                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="number of people" name="guests">
                </div>
                <div class="inputBox">
                    <span>Date :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Hour :</span>
                    <input type="time" name="hour">
                </div>
                <div class="inputBox">
                    <span>Message:</span>
                    <textarea name="message" rows="4" cols="50"></textarea>
                </div>
                <!-- <div class="inputBox">
               <span>Leaving :</span>
               <input type="date" name="leaving">
            </div> -->
            </div>

            <!-- <input type="submit" value="submit" class="btn" name="send"> -->
            <input type="submit" value="Submit" class="btn" name="send" onclick="showConfirmationMessage()">

        </form>

    </section>

    <!-- booking section ends -->

















    <!-- footer section starts  -->


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="tel:+351965527528"><i class="fas fa-phone"></i> +351-965-527-528</a>
                <a href="tel:+351965527528"><i class="fas fa-phone"></i> +351-965-527-528</a>
                <a href="https://mail.google.com/mail/?view=cm&to=watersportscenter@gmail.com" target="_blank"> <i
                        class="fas fa-envelope"></i> watersportscenter@gmail.com </a>
                <a href="https://encurtador.com.br/hmvxK" target="_blank">
                    <i class="fas fa-map"></i> Albufeira, Portugal - 8200
                </a>

            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/steulaliawatersports" target="_blank"> <i
                        class="fab fa-facebook-f"></i>
                    facebook </a>
                <!-- <a href="#"> <i class="fab fa-twitter"></i> twitter </a> -->
                <a href="https://www.instagram.com/wsportsantaeulalia/"><i class="fab fa-instagram"></i> Instagram</a>
                <!-- <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a> -->
            </div>

        </div>

    </section>


    <!-- footer section ends -->









    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>