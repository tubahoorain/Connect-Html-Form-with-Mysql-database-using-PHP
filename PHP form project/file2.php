<!DOCTYPE html>
<html>
<head>
    <title>Form Data Output</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;  /* Horizontal center */
            align-items: center;      /* Vertical center */
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        table {
            border-collapse: collapse;
            background-color: white;
            width: 30%;
            
        }
        td,th{
            text-align: center;
        }
        td {
            padding: 20px;
        }
        h2 {
            text-align: center;
            position: absolute;
            top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h2>Registration Form Data</h2>
    <table border="1" cellpadding="10">
        <tr><td>First name</td><td><?php echo $_POST['fname'] ?? 'None'; ?></td></tr>
        <tr><td>Last name</td><td><?php echo $_POST['lname'] ?? 'None'; ?></td></tr>
        <tr><td>Email</td><td><?php echo $_POST['email'] ?? 'None'; ?></td></tr>
        <tr><td>Password</td><td><?php echo $_POST['password'] ?? 'None'; ?></td></tr>
        <tr><td>NIC</td><td><?php echo $_POST['nic'] ?? 'None'; ?></td></tr>
        <tr><td>Date of Birth</td><td><?php echo $_POST['dob'] ?? 'None'; ?></td></tr>
        <tr><td>Phone number</td><td><?php echo $_POST['phone'] ?? 'None'; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $_POST['gender'] ?? 'None'; ?></td></tr>
        <tr><td>Courses selected</td>
            <td>
                <?php
                    if (isset($_POST['courses'])) {
                        echo implode(', ', $_POST['courses']);
                    } else {
                        echo 'None';
                    }
                ?>
            </td>
        </tr>
        <tr><td>Country</td><td><?php echo $_POST['country'] ?? 'None'; ?></td></tr>
    </table>
</body>
</html>
