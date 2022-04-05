
        function validation() {
            // name validation
            var label = document.getElementById("nameLabel");
            var labele = document.getElementById("emailLabel");
            var name = document.getElementById("Firstname");
            var submit = document.getElementById("submit");
            var mail = document.getElementById("email");
            var pass = document.getElementById("pass_one");
            var pass2 = document.getElementById("pass_two");
            var len = name.value.length;

            if (len > 5) {
                alert("Max length 15!!");
                submit.type = "button";
                name.style.background = "red";
                label.style.color = "red";
                label.innerText = "*Error"
                submit.style.backgroundColor = "red";
            } else {
                submit.type = "submit";
                name.style.background = "white";
                label.innerText = ""
                submit.style.backgroundColor = "green";
            }
            // email validation
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                alert("You have entered an invalid email address!");
                labele.style.color = "red";
                labele.style.innerText = "*Error";
            }
            if (pass.value === pass2.value && pass.value.length === pass2.value.length) {
                alert(pass.value, pass2.value);
            } else {
                pass2.style.background = "red";
                submit.type = "button";
                name.style.background = "red";
            }

        }
    