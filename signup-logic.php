<?php
require 'config/database.php';

// get signup form data if signup button was clicked 
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    //validate input values
    if(!$firstname) {
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif(!$lastname) {
        $_SESSION['signup'] = "Please enter your Last Name";

    } elseif(!$username) {
        $_SESSION['signup'] = "Please enter your username";

    } elseif(!$email) {
        $_SESSION['signup'] = "Please enter a valid email";

    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Please should be 8+ characters";

    } elseif(!$avatar['name']) {
        $_SESSION['signup'] = "Please add avatar";

    } else {
        // check if password  don't match 
        if($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = 'Passwords do not match';
        }else {
            // hash password 
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // check if username or email already exist in database
            $user_check_query = "SELECT * from users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);

            if(mysqli_num_rows($user_check_result) > 0 ) {
                $_SESSION['signup'] = "Username or Email already exist";
            } else {
                // WORK ON AVATAR
                // rename avatar
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // make sure file is an image 
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    // make sure image is not too large (1mb+)
                    if($avatar['size'] < 100000) {
                        // upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

                    }else {
                        $_SESSION['signup'] = "File size is too big. Should be less than 1mb ";
                    }
                } else {
                    $_SESSION['signup'] = 'File should be png, jpg, or jpeg';
                }
            }
        }
    } 

    //redirect back to signup page if there was any problem
    if(isset($_SESSION['signup'])) {
        // pass from data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URl . 'signup.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO users SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email', password = '$hashed_password', avatar = '$avatar_name', is_admin = 0";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)) {
            // redirect to login page with success page
            $_SESSION['signup-success'] = "Registration successful. Please log in";
            header('location: ' . ROOT_URl . 'signin.php');
            die();
        }
    }

    // var_dump($avatar);

} else {
    // if button wasn't clicked, bounce baack to signup page 
    header('location : ' . ROOT_URl . 'signup.php');
    die();
}