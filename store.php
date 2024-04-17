<?php
if (isset($_POST['nama'])) {
    if ($_POST['nama'] <> '' && $_POST['nim'] <> '' && $_POST['angkatan'] <> '' && $_POST['jk'] <> '' && $_POST['telepon'] <> '' && $_POST['email'] <> '' && $_POST['alamat'] <> '') {
        $db = new mysqli('localhost', 'root', '', 'db_oop');
        $prep = $db->prepare("INSERT INTO tb_kontak (nama,nim,angkatan,jk,telepon,email,alamat) VALUES (?,?,?,?,?,?,?)");
        $prep->bind_param('siissss', $_POST['nama'], $_POST['nim'], $_POST['angkatan'], $_POST['jk'], $_POST['telepon'], $_POST['email'], $_POST['alamat']);
        $hasil = $prep->execute();
    }
}
header("location:create.php?result=".$hasil);
?>