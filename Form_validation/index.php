
<!-- Authour : Mubashir Angathil
Date    : 25-02-2022
Time    : 12:25 AM
Program : java script to form validation -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Detailes</title>
</head>

<body>
    <center>
        <section class="section">

            <h1>Personal Details</h1>
            <form action="" method="post" onsubmit="validation()">
                <input type="text" placeholder="Enter your name...." id="Firstname" max="15" autofocus required><br><br>
                <input type="email" placeholder="email@gmail.com" id="email" required><br><br>
                <input type="tel" id="phone" placeholder="Enter your phone number" max="10" required><br><br>
                <input type="password" id="pass_one" placeholder="Enter your password...." max="10" required><br><br>
                <input type="password" id="pass_two" placeholder="Confirm your password..." max="10" required><br><br>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit" id="submit">
            </form>
        </section>
    </center>
    <script src="validate.js"></script>
</body>

</html>
