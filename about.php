<?php
$page_css = "./css/about.css";
include 'partials/header.php';
?>

<?php
// Page Content Data
$sections = [
    [
        'id' => 'mission',
        'title' => 'OUR MISSION',
        'content' => [
            'At CREATIVENOVA, our mission is to provide users with an intuitive and seamless platform that empowers them to connect, share, and engage with meaningful content. We aim to create a space that fosters creativity, communication, and community-building.',
            'We are dedicated to continuous improvement, ensuring that our web app remains innovative, user-friendly, and responsive to the needs of our diverse audience. By staying committed to excellence, we strive to be the go-to platform for all your content-sharing and connection needs.'
        ]
    ],
    [
        'id' => 'vision',
        'title' => 'OUR VISION',
        'content' => [
            'Our vision is to become a leading platform where users can freely express themselves, share ideas, and connect with like-minded individuals. We aspire to create a global community driven by creativity and collaboration.',
            'We envision a future where our web app evolves with technology, offering even more innovative features that enhance user experience, foster connections, and contribute to meaningful digital interactions across the world.'
        ]
    ]
];

$team = [
    ['name' => 'Subrata Mahato', 'role' => 'CEO', 'img' => './assets/subrata-avatar.png'],
    ['name' => 'Debasish Mandi', 'role' => 'CTO', 'img' => './assets/Debasish-avatar.png'],
    ['name' => 'Bappa Bauri', 'role' => 'UX DESIGNER', 'img' => './assets/Bappa-avatar.jpeg'],
    ['name' => 'Somnath Paul', 'role' => 'ONLINE MARKETING', 'img' => './assets/somnath-avatar.png'],
    ['name' => 'Swapnadeep Maji', 'role' => 'ONLINE MARKETING', 'img' => './assets/swanadeep-avatar.jpg']
];
?>


    <section class="empty_page">
        <!-- <h1>About Page</h1> -->
         <header class="main-header">
        <h1>About us</h1>
    </header>

    <?php foreach ($sections as $section): ?>
    <section class="content-row <?= $section['id'] ?>">
        <div class="new-container">
            <div class="label"><h2><?= $section['title'] ?></h2></div>
            <div class="text-content">
                <?php foreach ($section['content'] as $p): ?>
                    <p><?= $p ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <section class="content-row values">
        <div class="new-container">
            <div class="label"><h2>OUR VALUES</h2></div>
            <div class="text-content">
                <ul>
                    <li>Integrity: Upholding honesty, transparency, and ethical behavior in all actions.</li>
                    <li>Innovation: Continuously striving for creative solutions and groundbreaking ideas</li>
                    <li>Community: Building a supportive, inclusive, and collaborative environment for everyone.</li>
                    <li>Excellence: Committing to high-quality experiences and constant improvement for users.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team-grid">
        <?php foreach ($team as $member): ?>
        <div class="member-card" style="background-image: url('<?= $member['img'] ?>');">
            <div class="member-info">
                <h3><?= $member['name'] ?></h3>
                <span><?= $member['role'] ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    </section>


<?php
include 'partials/footer.php';
?>