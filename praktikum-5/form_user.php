
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
    <form method=post action=input_user.php>
        <table>
            <tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>
            <tr><td>Password</td><td> : <input name='password' type='password'></td></tr>
            <tr><td>Nama Lengkap</td><td> : <input name='nama' type='text'></td></tr>
            <tr><td>Email </td><td> : <input name='email' type='text'></td></tr>
            <tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
        </table>
    </form>
    </center>
</body>
</html>