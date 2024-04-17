<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="create.css">
    <title>Read Data</title>
</head>

<body class="thisfont">
    <?php
    $db = new mysqli('localhost', 'root', '', 'db_oop');
    if (isset($_GET['delete-id'])) {
        $id = $_GET['delete-id'];
        $db->query("DELETE FROM tb_kontak where id='$id'");
    }
    $hasil = $db->query("SELECT * FROM tb_kontak");

    ?>
    <div class="container my-4">
        <h1>Profil Mahasiswa</h1>
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                while ($baris = $hasil->fetch_array()) { ?>
                    <tr>
                        <th scope="row"><?php echo ++$count; ?></th>
                        <td><?php echo $baris['nama']; ?></td>
                        <td><?php echo $baris['nim']; ?></td>
                        <td><?php echo $baris['angkatan']; ?></td>
                        <td><?php echo $baris['jk']; ?></td>
                        <td><?php echo $baris['telepon']; ?></td>
                        <td><?php echo $baris['email']; ?></td>
                        <td><?php echo $baris['alamat']; ?></td>
                        <td><a href="update.php?edit-id=<?php echo $baris['id']; ?>">Edit</a> | <a href="?delete-id=<?php echo $baris['id']; ?>">Delete</a></td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>