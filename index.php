<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<?php include 'dashboard.php'; ?>

<?php include 'footer.php'; ?>
