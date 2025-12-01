<?php
session_start();
?>

<h3>EXPERT - Login System</h3>

<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

<?php
// Username dan password contoh
$valid_username = "rafi sidiq";
$valid_password = "12345";

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek login
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
}
?>