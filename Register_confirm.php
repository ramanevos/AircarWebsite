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

        <a href="Login.php" >Login</a>
        <a href="Register.php" class="active" >Register</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>


<section id="homepage" align="center">

    <div id="welcome" align="center" style = "padding: 3em 2.5em;">
        <div>
            <h2>REGISTRATION</h2>

        </div>
        <?php
        if (isset( $_POST['submit'])){

            //retrieve the form data by using the element's name attributes value as key

            echo '<h2>Thank you for Submitting!</h2>';
            echo '<h3>Your information is as follows:</h3>';

            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $dateofbirth = $_POST['dateOfBirth'];
            $sex = $_POST['gender'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $username = $_POST['user_name'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            echo("Name: " . $firstname .' '.$lastname . "<br>");
            echo("Date of Birth:  " . $dateofbirth . "<br>");

            if($sex == "male")
            {
                echo("Sex: Male" . "<br>");
            }
            else if ($sex == "female")
            {
                echo("Sex: Female" . "<br>" );
            }
            else if ($sex == "other")
            {
                echo("Sex: Other" . "<br>");
            }

            echo("Phone: " . $phone . "<br>");
            echo("Email:" . $email . "<br>");
            echo("Username: " . $username . "<br><br>");

            if(isset($_POST['checkbox'])){
                echo("You want to receive e-mails");
            }
            else {
                echo("You dont want to receive e-mails");
            }


        }
        ?>
    </div>
</section>


<!-- teo -->



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
                    <h3>EXPLORE</h3>
                    <hr>
                    <ul>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Find a car</a></li>
                        <li><a href="gallery.html">Rent your car</a></li>

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


