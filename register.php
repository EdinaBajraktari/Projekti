<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register">
    <div class="title">RegisterForm </div>
    <div id="Formulari">
        <form action="#">
            <div class="user-details">
        <h1>Ketu mund te regjistroheni</h1>
        <p>Jepni te dhenat e juaja te sakta</p>
        <form>
        <ul>
        <li><label>Name:</label></li>
        <li><input type="text" id="name" size="40" /></li>
        <li><label>Username:</label></li>
        <li><input type="text" id="emri" size="15" /></li>
        <li><label>Password:</label></li>
        <li><input type="password" id="pass" size="15" /></li>
        <li><label>Email:</label></li>
        <li><input type="text" id="adresaEmailit" size="40" /></li>
        <li><label for="country">Country:</label></li>
        <li><select name="country">
            <option selected="" value="Default">(Please select a country)</option>
        <option value="AF">Australia</option>
        <option value="AL">Albanian</option>
        <option value="RKS">Kosovo</option>
        <option value="AS">Russia</option>
        <option value="AD">USA</option>
        </select></li>
        <li><label id="gender">Gender:</label></li>
        <li><input type="radio" name="msex" value="Male" /><span>Male</span></li>
         <li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>
        <li><input type="submit" value="Regjistrohu" id="submit" /></li>
        </ul>
        </form>
            </div>
            </form>
        </div>
    </div>

        <script>
        var nameRegex=/[a-zA-z\s]+$/;
        if(!nameRegex.test(name)){
            altert("Ju lutem shkruani nje emer valid");
            return false;
        }

        var UsernameRegex=/[^a-z\s]+$/;
        if(!Username.test(Username)){
            altert("Ju lutem shkruani nje Username valid");
            return false;
        }
        if(password.length<7){
            alert("password duhet te jete mbi 7 karaktere");
            return false;
        }
        var emailRegex=/^[^\s@]+@[^\s@]+\.[*\s@]+$/;
        if(!emailRegex.test(email)){
            altert("Ju lutem shkruani nje Username valid");
            return false;
        }
        var countryRegex;
        if(ucountry.value == "Default"){
            alert("Zgjidhni vendin tuaj");
            ucountry.focus();
            return false;
        }
        else
        {
            return true;
        }
        var GenderRegex;
        if(umgender.checked){
            x++;
        }if(ufgender.checked){
            x++;
        }
        if(x==0){
            altert("Zgjidhni Male/Female");
            umgender.focus();
            return false;
        }
        else{
            alert("Form Successfully Submitted");
            window.location.reload()
            return true;
        }


     </script>
    </div>
</body>
</html>