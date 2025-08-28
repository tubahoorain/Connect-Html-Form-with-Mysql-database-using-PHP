<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Agar remember me tick kiya hai
    if (!empty($_POST['remember'])) {
        setcookie("username", $username, time() + 86400, "/"); // Cookie set for 1 day
        echo "Cookie set successfully!<br>";
    } else {
        // Agar remember me tick nahi kiya → cookie delete kar do
        setcookie("username", "", time() - 3600, "/");
        echo "Login without remember me!<br>";
    }
}
?>

<form method="post">
    Enter Name: <input type="text" name="username"><br>
    <input type="checkbox" name="remember"> Remember Me<br>
    <input type="submit" value="Login">
</form>

<?php
// Agar cookie set hai to welcome back
if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'];
}
?>
