<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    
    $resetToken = bin2hex(random_bytes(16));


    $resetLink = "https://yourdomain.com/reset-password.php?token=$resetToken";
    $emailContent = "Click the following link to reset your password: $resetLink";


    echo "Password reset link sent to your email!";
}
?>