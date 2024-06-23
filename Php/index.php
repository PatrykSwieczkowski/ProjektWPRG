<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Używane samochody na sprzedaż</title>
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
        <h1>Benzyna, diesel, elektryczne - mamy wszystko</h1>
        <p>Używane samochody na sprzedaż</p>
    </div>
    <div class="form-container">
        <h2>Zainteresowany? Wypełnij formularz i otrzymasz nasze najnowsze oferty</h2>
        <form action="cars.php" method="GET">
            <div class="form-group">
                <label for="name">Twoje imię</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Twój email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="price-range">Przedział cenowy</label>
                <select id="price-range" name="price-range" required>
                    <option value="0-20000">0 - 20 000 PLN</option>
                    <option value="20000-40000">20 000 - 40 000 PLN</option>
                    <option value="40000-60000">40 000 - 60 000 PLN</option>
                    <option value="60000-80000">60 000 - 80 000 PLN</option>
                    <option value="80000-100000">80 000 - 100 000 PLN</option>
                </select>
            </div>
            <button type="submit">Wyślij</button>
        </form>

    </div>
</section>
</body>
</html>
