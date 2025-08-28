<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    echo "Session started!<br>";
}
?>

<form method="post">
    Enter Name: <input type="text" name="username">
    <input type="submit" value="Start Session">
</form>

<?php
// Access session value
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'];
}
?>
