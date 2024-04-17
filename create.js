function tampilkan(){

nama=document.getElementById("nama").value
document.getElementById("modal-nama").innerHTML="Nama            :"+nama
if (nama == "") {
    window.alert("Mohon lengkapi nama Anda.");
    return false;
}

nim=document.getElementById("nim").value
document.getElementById("modal-nim").innerHTML="NIM             :"+nim
if (nim == "") {
    window.alert("Mohon lengkapi NIM Anda.");
    return false;
}

akt=document.getElementById("angkatan").value
document.getElementById("modal-akt").innerHTML="Angkatan             :"+akt
if (akt == "") {
    window.alert("Mohon lengkapi angkatan Anda.");
    return false;
}

jk=document.getElementById("jk").value
document.getElementById("modal-jk").innerHTML="Jenis Kelamin        :"+jk
if (jk == "") {
    window.alert("Mohon lengkapi jenis kelamin Anda.");
    return false;
}

telp=document.getElementById("telepon").value 
document.getElementById("modal-telp").innerHTML="Telepon             :"+telp
if (telp == "") {
    window.alert("Mohon lengkapi telepon Anda.");
    return false;
}

email=document.getElementById("email").value
document.getElementById("modal-email").innerHTML="Email             :"+email
if (email == "") {
    window.alert("Mohon lengkapi email Anda.");
    return false;
}

alamat=document.getElementById("alamat").value
document.getElementById("modal-alamat").innerHTML="Alamat             :"+alamat
if (alamat == "") {
    window.alert("Mohon lengkapi alamat Anda.");
    return false;
}

$("#exampleModalCenter").modal('show')
}