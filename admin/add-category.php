<?php
require 'partials/header.php';
?>


<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Category</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URl ?>admin/add-category-logic.php" method="post">
            <input type="text" name="title" placeholder="Title">
            <textarea rows="4" name="description" placeholder="Description"></textarea>
            <button type="submit" name="submit" class="btn">Add Category</button>
        </form>
    </div>
</section>

<?php
require '../partials/footer.php';
?>