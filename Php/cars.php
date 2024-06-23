<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody w wybranym przedziale cenowym</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="nav-container">
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="about.html">O nas</a></li>
                <li><a href="features.html">Funkcje i korzyści</a></li>
                <li><a href="testimonials.html">Opinie</a></li>
                <li><a href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Samochody w wybranym przedziale cenowym</h1>
    </div>
</section>

<section class="car-list">
    <div class="grid-container">
        <?php
        $cars = [
            [
                'img' => 'images/car1.jpg',
                'name' => 'Mercedes-Benz CLK',
                'details' => '2002 - 236 000 km - Benzyna - 197 KM - 2 295 cm3',
                'price' => 19450
            ],
            [
                'img' => 'images/car2.jpg',
                'name' => 'Dacia Duster 1.2 TCe Laureate 4x4',
                'details' => '2015 - 45 659 km - Benzyna - 125 KM - 1 197 cm3',
                'price' => 18900
            ],
            [
                'img' => 'images/car3.jpg',
                'name' => 'Mercedes-Benz Klasa C',
                'details' => '2022 - 28 000 km - Benzyna - 204 KM - 1 496 cm3',
                'price' => 185730
            ],
            [
                'img' => 'images/car4.jpg',
                'name' => 'Honda HR-V 1.6 i-DTEC Executive',
                'details' => '2016 - 188 626 km - Diesel - 120 KM - 1 597 cm3',
                'price' => 59900
            ]
        ];

        $name = $_GET['name'];
        $email = $_GET['email'];
        $priceRange = $_GET['price-range'];

        list($minPrice, $maxPrice) = explode('-', $priceRange);

        foreach ($cars as $car) {
            if ($car['price'] >= $minPrice && $car['price'] <= $maxPrice) {
                echo '<div class="grid-item">';
                echo '<img src="' . $car['img'] . '" alt="' . $car['name'] . '">';
                echo '<h3>' . $car['name'] . '</h3>';
                echo '<p>' . $car['details'] . '</p>';
                echo '<p class="price">' . number_format($car['price'], 0, ',', ' ') . ' PLN</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</section>
</body>
</html>
