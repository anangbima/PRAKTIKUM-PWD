<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body style="background-color: gray; color: white;">
    <center>
        <h2>Login</h2>
        <form method=post action=cek_login.php>
            <table>
                <tr>
                    <td>Username</td>
                    <td> : <input name='username' type='text'></td>
                </tr>
                <tr>
                    <td>Password</td><td> : <input name='paswd' type='text'></td>
                </tr>
            </table>
            <input type='submit' value='LOGIN'></td>
        </form>
    </center>
</body>
</html>
