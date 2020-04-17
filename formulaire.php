<!DOCTYPE html>
<html>
<head>
	<title> super site</title>
	  <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>sign up </h1>
<p>

<form method="post" action="sign_up.php">
	<label for="Firstname">Firstname <em>*</em></label> : <input type="text" name="Firstname" id="Firstname" autofocus required /><br>
	<br>
    <label for="Lastname">Lastname <em>*</em></label> :  <input type="text" name="Lastname" id="Lastname" required/><br>
    <br>
    <label for="Username">Username </em></label> : <input type="text" name="Username"id="Username"/><br>
    <br>
    <label for="Email">Email <em>*</em></label> :  <input type="email" name="Email" id="Email" required/><br>
    <br>
    <label for="Password">Password <em>*</em></label> :  <input type="password" name="Password" id="Password" required /><br>
    <br>
    <label for="confirm">Confirm password <em>*</em></label> :  <input type="password" name="Confirm" id="Confirm" required /><br >
    <br>
    <label for="Birthdate">Birthdate </em></label> :  <input type="date" name="Birthdate" id="Birthdate" /><br >
    <br>
    <input type="submit" value="register"></form><br>
    <p>Already have an account?<a href ="sign in.php"> sign in</a> <br><br>
    <em>*</em> : Required fields
    </p>
</form> 

</p>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=Users;charset=utf8', 'pmauser', 'alpine');
?>
</body>
</html>
