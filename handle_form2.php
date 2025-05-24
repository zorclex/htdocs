<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media="all">
	.error {
		font-weight: bold;
		color: #C00;
	}
	</style>
</head>
<body>
<?php # Script 2.4 - handle_form.php #3

// Validate the name:
if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo '<p class="error">You forgot to enter your name!</p>';
}

// Validate the email:
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}

// Validate the comments:
if (!empty($_REQUEST['password'])) {
	$password = $_REQUEST['password'];
} else {
    $password = NULL;
	echo '<p class="error">You forgot to enter your passsword!</p>';
}


// If everything is OK, print the message:
if ($name && $email && $password) {

	echo "<p>Thank you, <strong>$name</strong>, your password is:</p>
	<pre>$password</pre>
    <p> don't forget it
	<p>We will reply to you at <em>$email</em>.</p>\n";

} else { // Missing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';
}

?>
<p>Return to the forum <a href="index2.php">Enter the Forum</a>.</p>


</body>
</html>