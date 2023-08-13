<?php
// loads prelude stuff like session_start(), checked logged in status, etc.
include 'includes/prelude.php';

// Connect to database
include 'includes/db_read.php';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Get user from database
    $stmt = $read_pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to home page
        header('Location: dashboard.php');
        exit;
    } else {
        // Display error message
        $error = 'Invalid username or password';
    }
}
?>
<?php include 'includes/header.php'; ?>
    <a href="register.php">Register</a>
    <?php if(isset($error)){echo $error;}?>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
<?php include 'includes/footer.php'; ?>
