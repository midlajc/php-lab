<!-- 
Author : Mubashir Angathil
Date : 25-02-2022
Time : 12:25 AM
Program : java script to form validation 
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <center>
        <section class="">

            <h1>Personal Details</h1>
            <div id="alert" style="margin: 1rem;width: 400px;padding: .5rem;">
            </div>
            <form action="" id="form" method="post">
                <input type="text" placeholder="Enter your name...." id="firstName" max="15" autofocus required><br><br>
                <input type="email" placeholder="email@gmail.com" id="email" required><br><br>
                <input type="tel" id="phone" placeholder="Enter your phone number" required><br><br>
                <input type="password" id="pass_one" placeholder="Enter your password...." required><br><br>
                <input type="password" id="pass_two" placeholder="Confirm your password..." required><br><br>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit" id="submit">
            </form>
        </section>
    </center>
    <script>
        let form = document.getElementById('form')
        form.onsubmit = (e) => {
            event.preventDefault();
            let html = ""
            let err = [];
            let password = document.getElementById('pass_one')
            let password2 = document.getElementById('pass_two')
            if(password.value.length<8){
                err.push('password must require minimum 8 characters')
            }
            if (password.value != password2.value) {
                err.push("Password Mismatches");
            }
            let phone = document.getElementById('phone')
            if(phone.value.length != 10)
                err.push('mobile number must be 10 digit');
            
            for(x in err){
                html+=`<div class="alert alert-danger">${err[x]}</div>`
            }
            document.getElementById('alert').innerHTML=html
        }
    </script>
</body>

</html>