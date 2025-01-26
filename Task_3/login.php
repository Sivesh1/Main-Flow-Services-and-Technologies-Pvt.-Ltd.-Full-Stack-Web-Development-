<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_or_username = $_POST['email_or_username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', 'abc123', 'user_auth');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if user exists by email or username
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $email_or_username, $email_or_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start session and set session variable
            session_start();
            $_SESSION['user_id'] = $id;

            // Display success message
            echo "<h1>Login successful!</h1>";
        } else {
            echo "<h1>Invalid credentials!</h1>";
        }
    } else {
        echo "<h1>Invalid credentials!</h1>";
    }

    $stmt->close();
    $conn->close();
}
?>
