<?php
require "config/database.php";

// fetch current user from database
if(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Nova : The Blog Website</title>

    <!-- custom css  -->
    <link rel="stylesheet" href="<?= ROOT_URl ?>css/style.css">

    <!-- ICONSCOUT CDN  -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">

     <!-- FONT AWESOME CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Google Fonts (Montserrat) -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URl ?>" class="nav_logo">Creative Nova</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URl ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URl ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URl ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URl ?>contact.php">Contact</a></li>
                <?php if(isset($_SESSION['user-id'])) : ?>
                    <li class="nav_profile">
                    
                        <div class="avatar">
                            <img src="<?= ROOT_URl . 'images/' . $avatar['avatar'] ?>" alt="">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URl ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URl ?>logout.php">Logout</a></li>
                        </ul>
                    
                </li>
                <?php else : ?>
                <li><a href="<?= ROOT_URl ?>signin.php">Signin</a></li>
                <?php endif ?>
            </ul>

            <button id="open_nav-btn" type="button"><i class="fa-solid fa-bars"></i></button>
            <button id="close_nav-btn" type="button"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>


<!-- ========== End of Nav ========== -->