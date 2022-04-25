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
        <form action = "AddCar_result.php" method = "post" >

            <label for = "make" >Make:&nbsp</label>
            <input type="text" name="make" id="make" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "model">Model:&nbsp</label>
            <input type="text" name="model" id="model" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "year">Year:&nbsp</label>
            <input type="number" name="year" id="year" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "color">Colour:&nbsp</label>
            <input list="Color" name="color" id="color" required="required" style = "height:30px; width: 200px; "/> <br> <br>
            <datalist id="Color">
                <option value="Black">
                <option value="Grey">
                <option value="Green">
                <option value="Dark Blue">
                <option value="Yellow">
                <option value="Red">
                <option value="Cream">
                <option value="Dark Grey">
            </datalist>

            <input type="radio" id="automatic" name="gear" value="automatic" required="required" >
            <label for="automatic" style = "width: 50px">Automatic</label><br>

            <input type="radio" id="manual" name="gear" value="manual" >
            <label for="manual" style = "width: 50px">Manual</label><br> <br>

            <label for = "fuel">Fuel Type:&nbsp</label>
            <input list="Fuel" name="fuel" id="fuel" required="required" style = "height:30px; width: 200px; "/> <br> <br>
            <datalist id="Fuel">
                <option value="Petrol">
                <option value="Diesel">
                <option value="Eletric">
                <option value="Hybrid">
            </datalist>

            <label for = "price">Price/hour(£):&nbsp</label>
            <input type="number" name="price" id="price" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "seat">Seat Nº:&nbsp</label>
            <input type="number" name="seat" id="seat" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "door">Door Nº:&nbsp</label>
            <input type="number" name="door" id="door" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "market-value">Value(£):&nbsp</label>
            <input type="number" name="market-value" id="market-value" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <input type="submit" name="submit" class="button small" onclick="" value="Submit">

        </form>
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
