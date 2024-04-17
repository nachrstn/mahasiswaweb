
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=stylesheet href="create.css">
    <title>Create</title>
</head>

<body class="thisfont">
    <form action="store.php" id="formprofil" name="formprofil" method="POST">
        <div class="row my-4 mx-4">
            <div class="col-5">
                <img src="pattern.jpg" alt="Contemporer" class="img-fluid w-100 h-100">
            </div>
            <div class="col-7">
                <div class="d-flex justify-content-between align-item-center">
                    <h1>Profil Mahasiswa</h1>
                    <div>
                        <a href="read.php" class="btn btn-outline-dark ">List Mahasiswa</a>
                    </div>
                </div>
                <?php
                    if(isset($_GET['result'])){
                        $result = $_GET['result'];
                        
                        if ($result) { 
                            echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
                        } else { 
                            echo "<div class='alert alert-danger' role='alert'>Gagal menyimpan data</div>"; 
                        } 
                    }
                ?>

                    <div class="mb-3 form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="number" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan angkatan">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select id="jk" name="jk" class="form-select">
                            <option disabled selected>Pilih</option>
                            <option>Perempuan</option>
                            <option>Laki-laki</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="telepon" class="form-label"> No. Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan no. telepon">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat">
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="tampilkan()">
                        <!-- <button type="button" class="btn btn-primary" onclick="tampilkan()"> -->
                        Simpan
                    </button>
                    <!-- data-toggle="modal" data-target="#exampleModalCenter"  -->
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Apakah data Anda sudah benar?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal-nama"></p>
                        <p id="modal-nim"></p>
                        <p id="modal-akt"></p>
                        <p id="modal-jk"></p>
                        <p id="modal-telp"></p>
                        <p id="modal-email"></p>
                        <p id="modal-alamat"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="create.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>