
<?php 

require_once "./phpscript/checklog.php";

if (is_user_logged_in()){

    header("location: ./app/dashboard.php");

}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/getin.css">

    <title>LightFund - Login </title>
</head>
<body>


    <script>
        const form = document.querySelector("form");
            const inputs = form.elements;
            for (let i = 0; i < inputs.length; i++) {
                if (!inputs[i].value) {
                    alert("Tutti i campi sono obbligatori");
                    return;
                }
            }
    </script>


    <div class="half-screen-white"></div>


        <img id="logo1" src="../assets/img/logo2.png" alt="">


        <h2>enter your personal area</h2>



        <p id="text1">log in in a few seconds to be able to access our features as soon as possible! there is the possibility to visit a demo of a dashboard.</p>



    <form action="./phpscript/logincheck.php" method="POST">

        <input id="emaillogin" name="email" type="text" placeholder="Email Address" maxlength="40">
        <input id="pwdlogin" name="password" type="password" placeholder="password" maxlength="40">
        <input id="LoginBtn" type="submit" value="LOGIN">
    </form>

    <p id="fgtpwd">Forgot password?</p>

    <p id="noaccount" class="grey-class">Don't have account? <a href="./register.html" class="blue">Register Now</a></p>


    <p id="copyright">Copyright © LightFund 2023.</p>
    
</body>
</html>