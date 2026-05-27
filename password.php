<?php
require_once'./functions.php';

session_start();
$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password:</title>
</head>
<body>
 <h1>La tua password è: <?php echo $password ?></h1>
</body>
</html>