<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Fiddling 1</title>
    <style type="text/css">
    label{
        font-weight: bold;
        color: #300ACC;
        }
    </style>
</head>
<body>

<?php
// this is also a comment
# this is a comment too
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
echo "Hello Internet, <em>Welcome</em> to <strong>PAPERWOLF!</strong>";
echo "Please enter your username, email address, and the password for this account.";
?>

<form action="handle_form2.php" method="post">
    
    <fieldset><legend>Enter your information in the form below:</legend>
    
    <p><label>Name: <input type="text" name="name" size="20" maxlength="40"></label></p>
    
    <p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label></p>
    
    <p><label>Password: <input type="password" name="password" size="40" maxlength="36"></label></p>
        
    </fieldset>
	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
<html>
<!-- cabbage -->
