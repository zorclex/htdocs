<?php # Script 17.1 - header.html
// Indicate the encoding:
header('Content-Type: text/html; charset=UTF-8');

// Start the session:
session_start();
$_SESSION['user_id']=3;

// For logging out:
//$_SESSION = [];

// Need the database connection:
require('mysqli_connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo 'Paperwolf Forum'; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: left;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Paperwolf Forum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
<?php // Display links:

// Default links:
echo '<li><a href="index.php">' . 'home' . '</a></li>
<li><a href="forum.php">' . 'forum_home' . '</a></li>';

// Display links based upon login status:
if (isset($_SESSION['user_id'])) {

    // If this is the forum page, add a link for posting new threads:
    if (basename($_SERVER['PHP_SELF']) == 'forum.php') {
        echo '<li><a href="post.php">' . 'new_thread' . '</a></li>';
    }

    // Add the logout link:
    echo '<li><a href="logout.php">' . 'logout' . '</a></li>';

} else {

    // Register and login links:
    echo '<li><a href="register.php">' . 'register' . '</a></li>
    <li><a href="login.php">' . 'login' . '</a></li>';
}

// Retrieve all the languages...
echo '<li class="dropdown"><a href="forum.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $words['language'] . ' <span class="caret"></span></a>
<ul class="dropdown-menu">';

?>
                </ul></li>
            </ul>
        </div><!-- navbar -->
    </div><!-- container -->
</nav>

<div class="container">
    <div class="starter-template">
    
    
    
    
    