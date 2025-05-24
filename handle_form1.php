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
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

if (isset($_REQUEST['gender'])) {
    $gender = $_REQUEST['gender'];
} 
else {
    $gender = NULL;
}

echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
    <pre>$comments</pre>
    <p>We will reply at <em>$email</em></p><br><p><strong>Good day ";

if ($gender == 'M') {
    echo "Sir.</strong></p>";
}
elseif ($gender == 'F') {
    echo "Ma'am.</strong></p>";
}
else {
    echo "...Lol you forgot to pick one of teh two genders.</strong></p>";
}

?>
</body>
</html>