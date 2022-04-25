<!DOCTYPE html>

<html lang="en">

<head>

    <title>AirCar</title>

    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>





        @media screen and (max-width: 700px) {
            .navigation a:not(:first-child) {display: none;}
            .navigation a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 700px) {
            .navigation {position: relative;}
            .navigation .icon {
                position: absolute;
                right: 0;
                top: 0;
                color:black;
                font-size:30px;
            }
            .navigation.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            #homepage h3{
                font-size:25px
            }
            #welcome{
                width:100%;
                font-size: 17px;
                margin-bottom: 10px;
            }
            #WelcomeOptions {
                background: #ffffff;
                margin: auto;
                text-align: center;
                width: 90%;
                float: none;
            }



        }

    </style>
</head>
<body>

<script>
    function myFunction() {
        var x = document.getElementById("mynavigation");
        if (x.className === "navigation") {
            x.className += " responsive";
        } else {
            x.className = "navigation";
        }
    }
</script>
<div id="header">
    <div class="navigation" id="mynavigation">
        <a href="Index.php" id="logo" ><img src="images/logoo.png" style="width: 35%; margin: 0"> <!--logged in homepage--></a>
        <a href="Index.php" ><!--logged in homepage-->Home</a>
        <a href="View-Cars.php"  >Browse Cars to Rent</a>
        <a href="Your-cars.php" class="active">Your Cars</a>
        <a href="Cars-rented.php">Cars You're Renting</a>
        <a href="Login.php"><!--logged out home page address-->Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>



<section id="homepage" align="center">

    <div id="welcome" align="center" style = "padding: 3em 2.5em;">
        <div>
            <h3>ADD CAR</h3>
        </div>
        <?php
        if (isset( $_POST['submit'])){

            //retrieve the form data by using the element's name attributes value as key

            echo '<h2>Thank you for Submitting!</h2>';
            echo '<h4> We will review this information and get back to you within 24 hours!<br>Your car information is as follows:</h4>';

            $make = $_POST['make'];
            $model = $_POST['model'];
            $year = $_POST['year'];
            $color = $_POST['color'];
            $gear = $_POST['gear'];
            $fuel = $_POST['fuel'];
            $price = $_POST['price'];
            $seat = $_POST['seat'];
            $door = $_POST['door'];
            $value = $_POST['market-value'];

            echo("Name: " . $year . ' ' . $make .' '.$model . "<br>");
            echo("Colour: " . $color . "<br>");

            if($gear == "manual")
            {
                echo("Gear Box: Manual" . "<br>");
            }
            else if ($gear == "automatic")
            {
                echo("Gear Box: Automatic" . "<br>" );
            }

            echo("Fuel Type: " . $fuel . "<br>");
            echo("Price/hour: £ " . $price . "<br>");
            echo("Number of Seats:" . $seat . "<br>");
            echo("Number of Doors: " . $door . "<br>");
            echo("Value: £ " . $value . "<br>");

        }
        ?>
    </div>
</section>


<!-- Footer -->
<div id="footer">
    <div class="container">
        <section class="links">
            <div class="row">
                <div class="footer">
                    <h3>FULL ADDRESS</h3>
                    <hr>
                    <p>
                        Derby<br>
                        DE1 9PF
                    </p>
                </div>

                <div class="footer">
                    <h3>ABOUT</h3>
                    <hr>
                    <ul>
                        <li><a href="Feedback.php">Feedback</a></li>
                        <li><a href="T&C.php">Site Policy</a></li>


                    </ul>
                </div>

                <section class="footer">
                    <h3>CONTACT DETAILS</h3>
                    <hr>
                    <p><img src="images/emailicon.png" alt="email" width="8%">
                        AirCar@gmail.com</p>
                    <p><img src="images/phoneicon.png" alt="phone" width="8%"> 01332 292803</p>

                </section>

                <section class="footer">
                    <h3>CONNECT</h3>
                    <hr>
                    <p><img src="images/fbicon.png" alt="fb" width="8%">
                        Facebook</p>
                    <p><img src="images/instaicon.png" alt="insta" width="8%"> Instagram</p>

                </section>


            </div>
        </section>

    </div>
</div>

</body>
</html>
