<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody - Używane samochody na sprzedaż</title>
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
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="about.html">O nas</a></li>
                <li><a href="features.html">Funkcje i korzyści</a></li>
                <li><a href="testimonials.html">Opinie</a></li>
                <li><a href="contact.php">Kontakt</a></li>
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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $priceRange = htmlspecialchars($_POST['price-range']);

        echo "<h2>Dziękujemy, $name. Oto nasze oferty samochodów w przedziale cenowym: ";

        if ($priceRange == 'low') {
            echo "0 - 20 000 PLN</h2>";
            echo "<div class='car-item'>
                        <img src='images/car1.jpg' alt='Samochód A'>
                        <div class='car-details'>
                            <h3>Mercedes-Benz CLK</h3>
                            <p>2002 | 236 000 km | Benzyna | 197 KM | 2 295 cm3</p>
                            <p class='price'>19 450 PLN</p>
                        </div>
                      </div>";
            echo "<div class='car-item'>
                        <img src='images/car2.jpg' alt='Samochód B'>
                        <div class='car-details'>
                            <h3>Dacia Duster 1.2 TCe Laureate 4x4</h3>
                            <p>2015 | 45 659 km | Benzyna | 125 KM | 1 197 cm3</p>
                            <p class='price'>18 900 PLN</p>
                        </div>
                      </div>";
        } elseif ($priceRange == 'medium') {
            echo "20 001 - 50 000 PLN</h2>";
            echo "<div class='car-item'>
                        <img src='images/car3.jpg' alt='Samochód C'>
                        <div class='car-details'>
                            <h3>Ford Focus</h3>
                            <p>2018 | 60 000 km | Diesel | 150 KM | 1 995 cm3</p>
                            <p class='price'>30 000 PLN</p>
                        </div>
                      </div>";
            echo "<div class='car-item'>
                        <img src='images/car4.jpg' alt='Samochód D'>
                        <div class='car-details'>
                            <h3>Volkswagen Passat</h3>
                            <p>2017 | 80 000 km | Benzyna | 180 KM | 1 984 cm3</p>
                            <p class='price'>45 000 PLN</p>
                        </div>
                      </div>";
        } elseif ($priceRange == 'high') {
            echo "50 001+ PLN</h2>";
           
            echo "<div class='car-item'>
                        <img src='images/car6.jpg' alt='Samochód F'>
                        <div class='car-details'>
                            <h3>Mercedes-Benz Klasa C</h3>
                            <p>2022 | 28 000 km | Benzyna | 204 KM | 1 496 cm3</p>
                            <p class='price'>185 730 PLN</p>
                        </div>
                      </div>";
        }
    } else {
        echo "<h2>Niepoprawne dane. Proszę wrócić do formularza i spróbować ponownie.</h2>";
    }
    ?>
</section>
</body>
</html>
