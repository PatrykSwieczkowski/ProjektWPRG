<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Używane samochody na sprzedaż</title>
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
                <li><a href="contact.php">Galeria</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>

    </section>

    <section id="contact" class="contact">
        <div class="contact-container">
            <h2>Formularz kontaktowy</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $surname = htmlspecialchars($_POST['surname']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $message = htmlspecialchars($_POST['message']);

                $to = 's31413@pjwstk.edu.pl';
                $subject = 'Nowa wiadomość z formularza kontaktowego';
                $headers = 'From: ' . $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $body = "Imię: $name\nNazwisko: $surname\nEmail: $email\nNumer telefonu: $phone\nWiadomość:\n$message";

                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Dziękujemy za wiadomość, $name. Skontaktujemy się z Tobą wkrótce.</p>";
                } else {
                    echo "<p>Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.</p>";
                }
            } else {
                ?>
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Imię</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">Nazwisko</label>
                        <input type="text" id="surname" name="surname" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adres email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Numer telefonu (opcjonalnie)</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="message">Wiadomość</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit">Wyślij</button>
                </form>
                <?php
            }
            ?>
        </div>
    </section>
</main>

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
