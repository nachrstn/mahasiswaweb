<?php
if (isset($_POST['simpan'])) {
    $db = new mysqli('localhost', 'root', '', 'db_oop');
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $angkatan = $_POST['angkatan'];
    $jk = $_POST['jk'];
    $telp = $_POST['telepon'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];


    $prep = $db->prepare("UPDATE tb_kontak SET nama=?, nim=?, angkatan=?, jk=?, telepon=?, email=?, alamat=? where id=?");
    $prep->bind_param('siissssi',$nama, $nim, $angkatan, $jk, $telp, $email, $alamat, $id);
    $hasil = $prep->execute();

    header("location:read.php");
}
