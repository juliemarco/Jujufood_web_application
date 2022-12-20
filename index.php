<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for title img / favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/logo/logo.png">
    <title>juju food point</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
    .section {
        padding: 20px;
        text-align: center;
        font-style: italic;
    }
    </style>
</head>

<body>

    <div class="topnav" id="top_nav">
        <a class="btn active" href="#home">Home</a>
        <a class="btn" href="#About">About</a>
        <a class="btn" href="#Services">Services</a>
        <a class="btn" href="#Products">Products</a>
        <a class="btn" href="#Contact">Contact</a>
    </div>
    <div>
        <img src="img/hero-image.jpg" width="100%" height="700px" id="home">
        <div class="centered">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome<br> Juju Food Point</div>
        <div class="centeredimg"><img src="img/logo/logo.png" width="700px" height="500px"></div>
    </div>


    <div class="section" id="About">
        <p style="font-size: 40px;color:#890F0D;">About Us</p>
        <div style="padding: 0px 50px 18px 50px;">
            Juju food has been involved in the hospitality industry for a long time
            ago.
            The owner of Juju food is welcoming smile and cheeky nature leaves for her customers with a feeling of
            warmth and laughter.
            Our team is loyal and commited and without our amazing chefs and our floor staff,we simply would not have
            achieved the success
            but we expect to be one of the best Tanzanian restaurant.
        </div>
        <div>
            <img src="img/f2.jpg">
        </div>
    </div>


    <div class="section" id="Services">
        <p style="font-size: 40px;text-align:center;">Service</p>
        <div class="service">
            <table align="center" width="80%" border="0">

                <tr>
                    <td class="pad">
                        self-service
                    </td>
                    <td class="pad">Food delivery

                    </td>
                </tr>

                <tr>
                    <td class="pad">
                        Dine-in and take away
                    </td>
                    <td class="pad">
                        we produce delicious recipes
                    </td>
                </tr>

                <tr>
                    <td class="pad">receive orders for reservation

                    </td>
                    <td class="pad">
                        we cater for your party needs
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <div class="row">
        <div class="section" id="Products">
            <p style="font-size: 40px;">Products</p>
            <p>Our Top Rated Dishes</p>
            <div class="column">
                <div class="container">
                    <img src="img/pilau.jpg" alt="food picture" class="image">
                    <div class="overlay">
                        <i class="icon">Pilau</i>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="container">
                    <img src="img/ugali.jpg" alt="food picture" class="image">
                    <div class="overlay">
                        <i class="icon">Ugali</i>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="container">
                    <img src="img/fd1 (2).jpg" alt="food picture" class="image">
                    <div class="overlay">
                        <i class="icon">brunch buffet</i>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="container">
                    <img src="img/fd1 (3).jpg" alt="food picture" class="image">
                    <div class="overlay">
                        <i class="icon">Octopus Fried Rice</i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="column">
            <div class="container">
                <img src="img/fd1 (5).jpg" alt="food picture" class="image">
                <div class="overlay">
                    <i class="icon">Grilled Beef Skewers</i>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="container">
                <img src="img/fd1 (4).jpg" alt="food picture" class="image">
                <div class="overlay">
                    <i class="icon">Lunch Buffet</i>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="container">
                <img src="img/fd1 (1).jpg" alt="food picture" class="image">
                <div class="overlay">
                    <i class="icon">BreakFast</i>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="container">
                <img src="img/fd1 (8).jpg" alt="food picture" class="image">
                <div class="overlay">
                    <i class="icon">Bites</i>
                </div>
            </div>
        </div>
    </div>



    <div class="section" style="padding-top:15px;" id="Contact">
        <span style="font-size: 40px;">Contact</span><br>
        <span style="font-size: 20px;">We serve make our Best</span>
        <div class="contactform">
            <div class="contact">
                <form action="pro.php" method="POST">
                    <input type="text" name="name" placeholder="Full name"><br>

                    <input type="email" name="email" placeholder="email"><br>

                    <input type="text" name="phone" placeholder=" phone numaber"><br>

                    <input type="text" name="location" placeholder="current location"><br>

                    <textarea cols="24" rows="5" name="question">Ask Us anything</textarea>

                    <div style="float: right;">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("top_nav");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    </script>
</body>

</html>