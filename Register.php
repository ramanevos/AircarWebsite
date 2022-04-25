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
        <form action = "Register_confirm.php" method = "post" >

            <label for = "first_name" >First Name:&nbsp</label>
            <input type="text" name="first_name" id="first_name" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "last_name">Last Name:&nbsp</label>
            <input type="text" name="last_name" id="last_name" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "age">Date of Birth:&nbsp</label>
            <input type = "date" name="dateOfBirth" id="age" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "registration" style = "width: 120px">Sex:&nbsp</label>
            <input type="radio" id="male" name="gender" value="male" required="required" >
            <label for="male" style = "width: 10px">M</label>

            <input type="radio" id="female" name="gender" value="female" style = "width: 20px">
            <label for="female" style = "width: 10px">F</label>

            <input type="radio" id="other" name="gender" value="other" style = "width: 20px">
            <label for="other" style = "width: 50px">Other</label><br> <br>

            <label for = "phone">Telephone:&nbsp</label>
            <input type="number" name="phone" id="phone" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "email">E-mail:&nbsp</label>
            <input type="email" name="email" id="email" required="required" style = "height:30px; width: 200px; "/> <br> <br>

            <label for = "user_name">Username:&nbsp</label>
            <input type="text" name="user_name" id="user_name" required="required" style = "height:30px; width: 200px; " /> <br> <br>

            <label for = "password">Password:&nbsp</label>
            <input type="password" name="password" id="password" required="required" style = "height:30px; width: 200px; " /> <br> <br>

            <label for = "confirm_password">Confirm:&nbsp</label>
            <input type="password" name="confirm_password" id="confirm_password" required="required"  onchange='check_pass()' style = "height:30px; width: 200px; " /> <br> <br>

            <script>
                function check_pass()
                {
                    if (document.getElementById('password').value == document.getElementById('confirm_password').value)
                    {
                        document.getElementById('submit').disabled = false;
                    }
                    else
                    {
                        document.getElementById('submit').disabled = true;
                        window.alert("Passwords don't match");
                        const input = document.getElementById("password");
                        input.value = ""
                        const input2 = document.getElementById("confirm_password");
                        input2.value = ""

                    }
                }
            </script>

            <input type="checkbox" name="checkbox" id="checkbox" value=""/>
            <label for = "check_box" style = "width:250px; text-align: center">Would you like to receive marketing from us?&nbsp</label> <br><br>

            <input type="submit" name="submit" class="button small" onclick="" value="Submit">

        </form>
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

