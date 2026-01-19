<?php
include "config.php";
include "header.php";

$error = "";

if (isset($_POST['register'])) {

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        // Hash password
        $password = password_hash($password, PASSWORD_DEFAULT);
        $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");

        if (mysqli_num_rows($check) > 0) {
            $error = "The Email is already registered!";
        } else {

            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Something went wrong!";
            }
        }
    }
}
?>

<div class="container">
<h2>User Registration</h2>

<?php if ($error): ?>
    <p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
</form>
</div>

<?php include "footer.php"; ?>
