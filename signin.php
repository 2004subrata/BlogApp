<?php
require 'config/constants.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Nova : The Blog Website</title>

    <!-- custom css  -->
    <link rel="stylesheet" href="./css/style.css">

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


<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign In</h2>
        <?php if(isset($_SESSION['signup-success'])) : ?>
            <div class="alert_message success">
                <p>
                    <?= $_SESSION['signup-succecc']; 
                    unset($_SESSION['signup-success']) 
                    ?>
                </p>
            </div>
        
        <?php endif ?>
        <form action="<?= ROOT_URl ?>signin-logic.php" method="post">
            <input type="text" name="username_email" placeholder="Username or Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have account ? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>

</body>
</html>