<?php
include('include/header.php');
?>
    <main>
        <section>
		<center><h2>Get in Touch</h2>
		</center>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
			
		</section>
    </main>
    
<?php
include('include/footer.php');
?>