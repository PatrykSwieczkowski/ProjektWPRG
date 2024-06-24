<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody w wybranym przedziale cenowym</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="scrollable">
<header>
    <div class="nav-container">
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="about.html">O nas</a></li>
                <li><a href="features.html">Funkcje i korzyści</a></li>
                <li><a href="testimonials.html">Opinie</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="gallery.html">Galeria</a></li>
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
                'price' => 85730
            ],
            [
                'img' => 'images/car4.jpg',
                'name' => 'Honda HR-V 1.6 i-DTEC Executive',
                'details' => '2016 - 188 626 km - Diesel - 120 KM - 1 597 cm3',
                'price' => 59900
            ],
            [
                'img' => 'images/car5.jpg',
                'name' => 'Dacia Duster 1.2 TCe Laureate 4x4',
                'details' => '2015 - 45 659 km - Benzyna - 125 KM - 1 197 cm3',
                'price' => 28900
            ],
            [
                'img' => 'images/car6.jpg',
                'name' => 'Volkswagen Touran',
                'details' => '2013 - 210 000 km - Benzyna - 367 KM - 2996 cm3',
                'price' => 38900
            ],
            [
                'img' => 'images/car7.jpg',
                'name' => 'Ford Mondeo 2.0',
                'details' => '2019 - 104 000 km - Benzyna - 180 KM - 2919 cm3',
                'price' => 68900
            ],
            [
                'img' => 'images/car8.jpg',
                'name' => 'Nissan Patrol Gr 4.5',
                'details' => '2015 - 141 251 km - Benzyna - 200 KM - 4479 cm3',
                'price' => 78900
            ],
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

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>Kontakt</h4>
            <p>Telefon: +48 589 873 d46</p>
            <p>Email: kontakt@przyklad.com</p>
        </div>
        <div class="footer-section">
            <h4>Media społecznościowe</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Mapa witryny</h4>
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="about.html">O nas</a></li>
                <li><a href="features.html">Funkcje i korzyści</a></li>
                <li><a href="testimonials.html">Opinie</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Informacje prawne</h4>
            <ul>
                <li><a href="#">Polityka prywatności</a></li>
                <li><a href="#">Warunki użytkowania</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Car Listing. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>
</body>
</html>
