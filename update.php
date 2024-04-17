<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="create.css">

    <title>Update</title>
</head>

<body class="thisfont">
    <?php
    $db = new mysqli('localhost', 'root', '', 'db_oop');
    if (isset($_GET['edit-id'])) {
        $id = $_GET['edit-id'];
    }
    $hasil = $db->query("SELECT * FROM tb_kontak where id='$id'");
    $baris = $hasil->fetch_array()
    ?>
    <div class="container my-4">
        <h1>Edit Data Mahasiswa</h1>
        <form action="action-update.php?id=<?php echo $baris['id']; ?>" method="POST">
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $baris['nama']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $baris['nim']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="angkatan" name="angkatan" value="<?php echo $baris['angkatan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select id="jk" name="jk" class="form-select">
                        <option <?php
                                if ($baris["jk"] == 'Perempuan') {
                                    echo "selected";
                                }
                                ?>>Perempuan</option>
                        <option <?php
                                if ($baris["jk"] == 'Laki-laki') {
                                    echo "selected";
                                }
                                ?>>Laki-laki</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $baris['telepon']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $baris['email']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $baris['alamat']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>