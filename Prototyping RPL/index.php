<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prototype Web Marketing Product</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="headings">
    <nav>
        <a href="#" class="logo">Louis' hotels</a>
        <ul class="nav-links">
            <li><a href="#headings" class="feature">Home</a></li>
            <li><a href="#features" class="feature">Features</a></li>
            <li><a href="#about" class="about">About</a></li>
            <li><a href="#contact" class="contact">Contact</a></li>
            <li><a href="#book" class="book">Book</a></li>
        </ul>
    </nav>



    <div class="carousel">
        <img src="img/right.png" alt="" class="nextBut">
        <div class="carousel_trackContainer">
            <ul class="carousel_track">
                <li class="carousel_slide current-slide">
                    <img class="carousel_image" src="img/title.jpg" alt="">
                </li>
                <li class="carousel_slide">
                    <img class="carousel_image" src="img/title2.jpg" alt="">
                </li>
                <li class="carousel_slide">
                    <img class="carousel_image" src="img/title3.jpg" alt="">
                </li>
            </ul>
        </div>
        <img src="img/left.png" alt="" class="prevBut">
    </div>
</section>



<section id="features">
    <div class="container">
        <div class="row">
            <h1>Features and Facility</h1>
            <a href="pool.html">
                <div class="col-4">
                    <img src="img/pool.jpg" alt="">
                    <h3>Elegant and Comfortable Pool</h3>
                    <p>We provide great comfort and impressived experience , enjoy our mind-blowing swimming pool, sun-bathing and great service which will make you feel like in heaven</p>
                </div>
            </a>
            <a href="food.html">
                <div class="col-4">
                    <img src="img/food.jpg" alt="">
                    <h3>Variative and Delicious Culinary</h3>
                    <p>Enjoy the delicious cuisine cooked by our international graded chef , great taste, no doubt, feel the pleasure. come and join us in our gala dinner.</p>
                </div>
            </a>
            <a href="spa.html">
                <div class="col-4">
                    <img src="img/spa.jpg" alt="">
                    <h3>Spa and Massage</h3>
                    <p>relax your body, and also enjoy great experience of sauna bathing with your own customied temprature. massaged by professionals and extra other services.</p>
                </div>
            </a>
        </div>
    </div>
</section>



<section id="book">
    <div class="container">
        <div class="row">
            <div class="col-6 wrapper">
                <form action="" class="contact-form">
                    <input type="text" id="FirstName" class="input" placeholder="First Name">
                    <br>
                    <input type="text" id="LastName" class="input" placeholder="Last name">
                    <br>
                    <input type="email" id="email" class="input" placeholder="Email">
                    <br>
                    <input type="date" id="date" class="input" placeholder="Check-in Date">
                    <br>
                    <input type="text" id="jlhKmr" class="input" placeholder="Number of rooms">
                    <button type="submit">Book Now</button>
                </form>
            </div>
            <div class="col-6">
                <form action="" class="contact-form">
                    <textarea name="" id="" cols="30" rows="14" placeholder="Send us Feedback" class="input"></textarea>
                    <br>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="about">
    <div class="container">
        <h1>About Us</h1>
        <div class="row">
            <div class="col-6">
                <img src="img/profile.jpg" alt="">
            </div>
            <div class="col-6">
                <ul class="achieve">
                    <li>We have been operating for more than 20 years</li>
                    <li>Serving more than 300.000 customers</li>
                    <li>We have more than 300 branches all over the world</li>
                    <li>We still keep trying to improve our service and be better.</li>
                    <li>Our goal is to make customers feel like heaven.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul class="achieve2">
                    <li>We have been operating for more than 20 years</li>
                    <li>Serving more than 300.000 customers</li>
                    <li>We have more than 300 branches all over the world</li>
                    <li>We still keep trying to improve our service and be better.</li>
                    <li>Our goal is to make customers feel like heaven.</li>
                </ul>
            </div>
            <div class="col-6">
                <img src="img/profile2.jpg" alt="" class="second">
            </div>
        </div>
    </div>
</section>


<section id="contact">
    <a href="https://www.facebook.com/"><img src="img/facebook.png" alt=""></a>
    <a href="https://twitter.com/explore"><img src="img/twitter.png" alt=""></a>
    <a href="https://www.instagram.com/louis_aldorio"><img src="img/instagram.png" alt=""></a>
    <a href="mailto:louisaldorio@gmail.com"><img src="img/email.png" alt=""></a>
    <p>Copyright &copy; Louis Aldorio 2020</p>
</section>


<script src="script.js"></script>
</body>
</html>
