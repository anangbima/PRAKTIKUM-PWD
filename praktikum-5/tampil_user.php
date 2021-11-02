
<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data </title>
</head>
<body style="background-color: gray; color: white;">
    <center>
        <h2>User</h2>
        <form method=POST action=form_user.php>
            <input type=submit value='Tambah User'>
        </form>

        <table>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>NamaLengkap</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <?php 
                $sql = "select * from users order by id_user";
                $tampil = mysqli_query($con, $sql);
                
                $no = 1;
                
                while ($r = mysqli_fetch_array($tampil)) { ?>
                
                    <tr>
                        <td> <?php echo $r[username] ?></td>
                        <td><?php echo $r[nama] ?></td>
                        <td><?php echo $r[email]</td>
                        <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
                    </tr>

            <?php } ?>
    </center>
</body>
</html>
