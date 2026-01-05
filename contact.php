<?php
$page_css = "./css/contactUs.css";
include 'partials/header.php';
?>

<?php
// Contact information data
$contact_methods = [
    [
        'icon'    => '🏠', // You can replace these with FontAwesome or SVG tags
        'title'   => 'VISIT US',
        'desc'    => 'Find our physical location and visit us during working hours for assistance and inquiries.',
        'detail'  => 'Bankura Sammilani College, Computer Science dept. W.B, India'
    ],
    [
        'icon'    => '📞',
        'title'   => 'CALL US',
        'desc'    => 'Reach out to our support team by phone for immediate help or to ask questions.',
        'detail'  => '+91 7076179184'
    ],
    [
        'icon'    => '✉️',
        'title'   => 'CONTACT US',
        'desc'    => 'Send us an email for detailed inquiries, feedback, or any information you need assistance with.',
        'detail'  => 'noreply@creativenova.com'
    ]
];
?>


    <section class="empty_page">
        <!-- <h1>Contact Page</h1> -->
         <header class="hero">
        <div class="overlay">
            <h1>Contact Us</h1>
            <div class="dots">......</div>
            <p>Need an expert? You are more than welcome to leave your contact info and we will be in touch shortly</p>
        </div>
    </header>

    <section class="info-container">
        <?php foreach ($contact_methods as $method): ?>
            <div class="info-card">
                <div class="icon"><?php echo $method['icon']; ?></div>
                <h3><?php echo $method['title']; ?></h3>
                <p class="description"><?php echo $method['desc']; ?></p>
                <p class="detail"><?php echo $method['detail']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>
    </section>


<?php
include 'partials/footer.php';
?>
