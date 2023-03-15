<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    
</head>

<body>
    
<!-- header section starts  -->

<header class="header">
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="about.html">about</a>
        <a href="menu.html">menu</a>
        <a href="contact.php">contact</a>
        <a href="logout.php">logout</a>
    </nav>
</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">
    <img src="https://c1.wallpaperflare.com/preview/357/577/129/royal-enfield-bullet-bike-motorcycle.jpg" alt="">

    <div class="content">
        <h2>Made Like A Gun Goes Like A Bullet</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
    </div>

</section>

<!-- home section ends -->


<script src="script.js"></script>
 <script src="app.js"></script>

</body>

<!-- 
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body> -->
</html>