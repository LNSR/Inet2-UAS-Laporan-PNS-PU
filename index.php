<?php
require("include/koneksi.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" name="user" id="user"></br></br>
            <label>Password: </label>
            <input type="password" name="pass" id="pass"></br></br>
            <input type="submit" name="submit" value="login" id="button"/>
        </form>
    </div>
    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length=="") {
                alert("username and password tidak boleh kosong!");
                return false
            }
            else{
                if(user.length=="") {
                alert("username tidak boleh kosong!");
                return false
                }
                if(pass.length=="") {
                alert("password tidak boleh kosong!");
                return false
                }
            }
    </script>
</body>
</html>