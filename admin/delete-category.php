<?php
require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // FOR LATER
    // update category_id of post the belong to this category to id of uncatgorized category




    // delete the category
    $query = "DELETE FROM categories WHERE id=$id limit 1";
    $result = mysqli_query($connection, $query);
    $_SESSION['delete-category-success'] = "Category deleted successfully";
}
header('location: ' . ROOT_URl . 'admin/manage-categories.php');
die();
