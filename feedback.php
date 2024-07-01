<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kihoro Safaris - Feedback</title>
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

    <section class="feedback">
        <h2>Feedback</h2>
        <p>We value your feedback! Please share your thoughts with us.</p>
        <form action="submit_feedback.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="Phone No">Mobile No:</label>
            <input type="text" id="Phone No" name="Phone No" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="3" required></textarea><br><br>
          
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Kihoro Safaris. All rights reserved.</p>
    </footer>
</body>
</html>