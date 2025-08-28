<?php
// Set cookie (valid for 1 day)
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    setcookie("username", $username, time() + 86400, "/"); // 86400 = 1 day
    echo "Cookie set successfully!<br>";
}
?>

<form method="post">
    Enter Name: <input type="text" name="username">
    <input type="submit" value="Save Cookie">
</form>

<?php
// Read cookie
if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'];
}
?>
