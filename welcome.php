<?php
session_start();

// Protect page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include "header.php"; ?>

<style>
.dashboard {
    max-width: 600px;
    margin: 60px auto;
    padding: 30px;
    background: #f4f6f9;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.dashboard h1 {
    color: #333;
}
.dashboard p {
    font-size: 18px;
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    background: #d9534f;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}
.btn:hover {
    background: #c9302c;
}
</style>

<div class="dashboard">
    <h1>Welcome </h1>
    <p>Hello, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p>You have successfully logged in.</p>
    <br>
    <a href="logout.php" class="btn">Logout</a>
</div>

<?php include "footer.php"; ?>
