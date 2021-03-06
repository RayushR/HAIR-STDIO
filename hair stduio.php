<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ Hair Studio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>

<body>
    <section id="banner">
        <img src="./logo.png" class="logo">
        <div class="banner-text">
            <h1 id="text">Hair Studio</h1>
            <p id="text2">Style Your Hair Is style Your Life</p>
            <div class="banner-btn">
                <a href="#footer"><samp></samp>Find Out</a>
                <a href="#footer"><samp></samp>Find More</a>
            </div>
        </div>
    </section>
    <div id="sidenav">
        <nav>
            <ul>
                <li><a href="#banner">HOME</a></li>
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#Service">SERVICES</a></li>
                <li><a href="#testimonial">TESTIMONIALS</a></li>
                <li><a href="#form">CONTACT US</a></li>
                <li><a href="#footer">MEET US</a></li>
            </ul>
        </nav>
    </div>
    <div id="menubtn">
        <img src="./menu.png" id="menu">
    </div>

    <!-- Features -->
    <section id="features">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="feature">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, edit sapie eleifend ligula.
                        </p>
                    </div>
                </div>
                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, edit sapie eleifend ligula.
                        </p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>Donec eget ultricies sapi. Sed porttitor, mauris ater lob facilisis, edit sapie eleifend ligula.
                        </p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="./barber-man.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Service -->
    <section id="Service">
        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="./pic-1.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>this i test under description of barber foundation this is test under description of barber foundation.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./pic-2.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Beard Trim</h3>
                    <hr>
                    <p>this i test under description of barber foundation this is test under description of barber foundation.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./pic-3.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Cut</h3>
                    <hr>
                    <p>this i test under description of barber foundation this is test under description of barber foundation.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./pic-4.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Dry Shapoo</h3>
                    <hr>
                    <p>this i test under description of barber foundation this is test under description of barber foundation.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->
    <section id="testimonial">
        <div class="title-text">
            <p>TESTIMONIALS</p>
            <h1>What Client Says</h1>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img-1.jpg" alt="">
                    <div class="user-info">
                        <h4>KEN NORMAN <i class="fa fa-twitter"></i></h4>
                        <small>@kennorman</small>
                    </div>
                </div>
                <p>Donec eget ultricies sapi. sed porttitor,mauris ater lob facilisis,edit sapie eleifend ligula.
                    Donec eget ultricies sapi. Donec eget ultriciesn sapi. Sed porttitor,mauris ater lob facilisis,edit sapie eleifend ligula.
                    Donec eget ultricies sapi.
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img-2.jpg" alt="">
                    <div class="user-info">
                        <h4>Liara Karian <i class="fa fa-twitter"></i></h4>
                        <small>@liarakarian</small>
                    </div>
                </div>
                <p>Donec eget ultricies sapi. sed porttitor,mauris ater lob facilisis,edit sapie eleifend ligula.
                    Donec eget ultricies sapi.
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img-3.jpg" alt="">
                    <div class="user-info">
                        <h4>Ricky Danial <i class="fa fa-twitter"></i></h4>
                        <small>@rickydanial</small>
                    </div>
                </div>
                <p> Donec eget ultricies sapi. sed porttitor,mauris ater lob facilisis,edit sapie eleifend ligula.
                    Donec eget ultricies sapi. Donec eget ultriciesn sapi. Sed porttitor,mauris ater lob facilisis,edit sapie eleifend ligula.
                    Donec eget ultricies sapi.
                </p>
            </div>
        </div>
    </section>



    <section id="form">
        <img src="./logo.png" class="logo">

        <div id="sidenav">
            <nav>
                <ul>
                    <li><a href="#banner">HOME</a></li>
                    <li><a href="#features">FEATURES</a></li>
                    <li><a href="#Service">SERVICES</a></li>
                    <li><a href="#testimonial">TESTIMONIALS</a></li>
                    <li><a href="#footer">MEET US</a></li>
                    <li><a href="./form.html">Account</a></li>
                </ul>
            </nav>
        </div>

        <form>

            <h1 style=" font-family: sans-serif;
            color: rgb(248, 247, 247);" class="text-warning text-center pt-5 "> Registration Page</h1>

            <label>

                <input style=" font-family: sans-serif;
            color: #000;" type="text" class="input" name="email" placeholder="e-mail" />


            </label>



            <label>

                <input style=" font-family: sans-serif;
            color: #000;" type="text" class="input" name="text" placeholder="phone no." />

                <div class="line-box">

                    <div class="line"></div>

                </div>

            </label>
            <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
            <textarea rows="7" cols="0" name="message" placeholder="message " required></textarea>


            <!-- <a href="./hair stduio.html"><button type="submit">submit</button></a> -->
            <a href="./hair stduio.html"><button type="submit">submit</button></a>

        </form>

        </div>
        </form>

        <!-- footer -->
        <section id="footer">
            <img src="./footer-img.png" alt="" class="footer-img">
            <div class="title-text">
                <p>CONTACT</p>
                <h1>Visit Shop Today</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                    <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 8am to 11pm</p>
                </div>
                <div class="footer-right">
                    <h1>Get In Touch</h1>
                    <p>#30 abc Colony, xyz City IN<i class="fa fa-map-marker"></i></p>
                    <p>aysuh123@website.com<i class="fa fa-paper-plane"></i></p>
                    <p>+01 1234567890<i class="fa fa-phone"></i></p>
                </div>
            </div>
            <div class="social-link">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/accounts/login/"> <i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/"> <i class="fa fa-youtube-play"></i></a>
                <a href="https://web.whatsapp.com/"> <i class="fa fa-whatsapp"></i></a>
                <hr>
                <p>#Dvlpr@yush"</p>
            </div>
        </section>
        <script>
            var menubtn = document.getElementById("menubtn")
            var sidenav = document.getElementById("sidenav")
            var menu = document.getElementById("menu")
            sidenav.style.right = "-250px";
            menubtn.onclick = function() {
                if (sidenav.style.right == "-250px") {
                    sidenav.style.right = "0";
                    menu.src = "./close.png";
                } else {
                    sidenav.style.right = "-250px";
                    menu.src = "./menu.png";
                }
            }
            var scroll = new SmoothScroll('a[href*="#"]', {
                speed: 300
            });
        </script>

</body>

</html>