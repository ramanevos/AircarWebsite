<!DOCTYPE html>

<html lang="en">

<head>

    <title>Payment - AirCar</title>

    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @media screen and (max-width: 700px) {
            .navigation a:not(:first-child) {
                display: none;
            }

            .navigation a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 700px) {
            .navigation {
                position: relative;
            }

            .navigation .icon {
                position: absolute;
                right: 0;
                top: 0;
                color: black;
                font-size: 30px;
            }

            .navigation.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            #homepage h3 {
                font-size: 25px
            }

            #welcome {
                width: 100%;
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
        <a href="Your-cars.php" >Your Cars</a>
        <a href="Cars-rented.php" class="active">Cars You're Renting</a>
        <a href="Login.php"><!--logged out home page address-->Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<section id="homepage" align="center">

    <div id="PaymentOptions" align="center">
        <div>
            <h5>Make payment</h5>
            Cardholder name: <input type="name" id="name" name="name"><br>
            Card number: <input type="cardID" id="cardID" name="cardID"><br>
            Card valid date: <input type="date" id="validDate" name="validDate"><br>
            CVV/CVC: <input type="cvc" id="cvc" name="cvc" maxlength="3""><br>

            <input type=" submit" id="Submit" class="button small" value="Make payment">
        </div>

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
