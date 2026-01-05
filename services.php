<?php
$page_css = "./css/service.css";
include 'partials/header.php';
?>

<?php
// Define the services data
$services = [
    [
        'title' => 'Free Access for All',
        'image' => './assets/free-access.webp', // Replace with your image path
        'icon'  => '🚰',
        'desc'  => 'Enjoy full access to our services at no cost—making it easy and affordable for everyone'
    ],
    [
        'title' => 'User-Friendly Interface',
        'image' => './assets/user-Friendly.jpg',
        'icon'  => '🛠️',
        'desc'  => 'TNavigate effortlessly with an intuitive, clean design tailored for users of all skill levels.'
    ],
    [
        'title' => 'Customizable Options',
        'image' => './assets/coustomizable.jpg',
        'icon'  => '🛁',
        'desc'  => 'Personalize your experience with flexible features that adapt to your unique needs.'
    ],
    [
        'title' => '24/7 Support',
        'image' => './assets/support.webp',
        'icon'  => '🏠',
        'desc'  => 'Get help anytime you need it with our responsive customer support team.'
    ],
    [
        'title' => 'Secure and Safe',
        'image' => './assets/safe-secure.jpg',
        'icon'  => '🚰',
        'desc'  => 'Your data is protected with industry-standard encryption and privacy protocols.'
    ],
    [
        'title' => 'Fast Performance',
        'image' => './assets/fast-performance.jpg',
        'icon'  => '🌡️',
        'desc'  => 'Enjoy quick load times and a smooth user experience, no matter your device.'
    ]
];
?>


    <section class="empty_page">
        <!-- <h1>Services Page</h1> -->
         <section class="services-section">
        <header class="section-header">
            <h1>Our Services</h1>
        </header>

        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="card-image" style="background-image: url('<?php echo $service['image']; ?>');">
                        <!-- <div class="icon-badge"><?php echo $service['icon']; ?></div> -->
                    </div>
                    <div class="card-content">
                        <h3><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['desc']; ?></p>
                        <!-- <a href="#" class="view-link">View Service</a> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    </section>


<?php
include 'partials/footer.php';
?>