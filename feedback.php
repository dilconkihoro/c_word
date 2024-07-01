<?php include_once("includes/header.php");?>

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