<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="file2.php" method="POST">
        <h2>Registration Form</h2>
        First name: <input type="text" name="fname"><br><br>
        Last name: <input type="text" name="lname"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        NIC: <input type="text" name="nic"><br><br>
        Date of Birth: <input type="date" name="dob"><br><br>
        Phone Number: <input type="text" name="phone"><br><br>

        Select your gender:
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Male"> Male
        <br><br>

        Course Selection:
        <input type="checkbox" name="courses[]" value="PHP"> PHP
        <input type="checkbox" name="courses[]" value="JAVA"> JAVA
        <input type="checkbox" name="courses[]" value="SQL"> SQL
        <br><br>

        Select your country:
        <select name="country">
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
