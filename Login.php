<!DOCTYPE html>

<html lang="en">

<head>

    <title>Login - AirCar</title>

    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>



        input[type ="email"]:focus, input[type = "password"]:focus
        {
            width: 320px;
            border-color: #0f7a86;
            background: #d4e6e6;
        }

        input[type ="email"], input[type = "password"]
        {
            border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align:center;
            border: 2px solid black;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            border-radius: 24px;
            transition: 0.25s;
        }




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

        <a href="Login.php" class="active">Login</a>
        <a href="Register.php" >Register</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>


<section id="homepage" align="center">

    <div id="LoginOptions" align="center">
        <div>
            <h2>LOGIN</h2>

        </div>
        <div>

            <form>

                <input type="email" id="email" name="email" placeholder="Email">
                <input type="password" id="password" name="password" placeholder="Password">

                <input type="submit" class="button small" value="Login">

            </form>
        </div>
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

