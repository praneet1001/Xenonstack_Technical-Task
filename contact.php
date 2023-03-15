<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<header class="header">

<a href="#" class="logo">
    <img src="logo.png" alt="">
</a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="about.html">about</a>
    <a href="menu.html">menu</a>
    <a href="contact.php">contact</a>
    <a href="logout.php">logout</a>
</nav>
</header>
    <div class="container">
    <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $name = $_POST["name"];
           $message = $_POST["message"];
            require_once "database.php";
            $sql = "INSERT INTO contact (full_name,email,message)VALUES ('$name', '$email', '$message' )";
            $result = mysqli_query($conn, $sql);
        }
        ?>
      <form action="contact.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Message" name="message" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Submit" name="login" class="btn btn-primary">
        </div>
      </form>
    </div>
</body>
</html>