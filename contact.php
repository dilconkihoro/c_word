<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kihoro Safaris - Contact</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <img src="images/photox.png" alt="kihoro logo">
        <h1>Welcome to Kihoro Safaris</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="destinations.html">Destinations</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="signup.html">Sign up</a></li>
                <li><a href="signin.html">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact">
        <h2>Contact Us</h2>
        <p>Have a question or need assistance? Get in touch with us!</p>
        <form action="submit_contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject"><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Kihoro Safaris. All rights reserved.</p>
    </footer>
</body>
</html>