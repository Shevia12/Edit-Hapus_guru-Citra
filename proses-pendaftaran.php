<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){

    // ambil data dari formulir
    if($_POST['aksi'] == 'add'){
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];


    $sql = "INSERT INTO guru (nama,jenis_kelamin,alamat,no_telepon,email,mapel) VALUE ('$nama','$jk','$alamat',
    '$no_telepon','$email','$mapel')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

}else if ($_POST['aksi'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];


    $sql ="UPDATE guru SET nama='$nama',jenis_kelamin='$jk',alamat='$alamat',no_telepon='$no_telepon',email='$email',
    mapel='$mapel' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
} else {
    header('Location: index.php?status=gagal');
    }
 }
}
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];

    $sql = "DELETE FROM guru WHERE id ='$id';";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
?>