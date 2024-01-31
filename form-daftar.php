<?php
include 'config.php';
$id='';
$nama='';
$jk='';
$alamat='';
$no_telepon='';
$email='';
$mapel='';

if(isset($_GET['edit'])){
  $id = $_GET['edit'];


  $sql = "SELECT * FROM guru WHERE id='$id';";
  $query = mysqli_query($db, $sql);
  $result = mysqli_fetch_assoc($query);
  $nama = $result['nama'];
  $jk = $result['jenis_kelamin'];
  $alamat = $result['alamat'];
  $no_telepon = $result['no_telepon'];
  $email = $result['email'];
  $mapel = $result['mapel'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Cisarua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Cisarua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Mata Pelajaran Siswa SMK Negeri 1 Cisarua</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama"  value="<?php echo $nama; ?>" placeholder="Masukan Nama Lengkap Anda" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'Laki-laki'){echo "checked";}?> value="Laki-laki">
  <label class="form-check-label" for="Laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'Perempuan'){echo "checked";}?> value="Perempuan">
  <label class="form-check-label" for="Perempuan">Perempuan</label>
</div>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>

</div>
<div class="mb-3">
    <label for="no_telepon" class="form-label">No Telepon: </label>
    <input type="text" class ="form-control" name="no_telepon" value="<?php echo $no_telepon;?>"/>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class ="form-control" name="email" value="<?php echo $email;?>" placeholder="Masukan Email Anda" />
<div class="mb-3">
  <br>
<div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Mapel Yang di Ampu
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">


                    <div class="modal-header">
                        <h4 class="modal-title">Mapel</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body">
                    <select name="mapel" class="form-control">
                    <option <?php if($mapel == 'Pemorograman Web'){echo"selected";}?> value="Pemorograman Web">Pemorograman Web</option>
                    <option <?php if($mapel == 'Bahasa Inggris'){echo"selected";}?> value="Bahasa Inggris">Bahasa Inggris</option>
                    <option <?php if($mapel == 'Matematika'){echo"selected";}?> value="Matematika">Matematika</option>
                    <option <?php if($mapel == 'PABP'){echo"selected";}?> value="PABP">PABP</option>
                    <option <?php if($mapel == 'Basaha Indonesia'){echo"selected";}?> value="Basaha Indonesia">Basaha Indonesia</option>
                    <option <?php if($mapel == 'PPKN'){echo"selected";}?> value="PPKN">PPKN</option>
                    <option <?php if($mapel == 'PJOK'){echo"selected";}?> value="PJOK">PJOK</option>
                    <option <?php if($mapel == 'Sejarah'){echo"selected";}?> value="Sejarah">Sejarah</option>
                    <option <?php if($mapel == 'Bahasa Jepang'){echo"selected";}?> value="Bahasa Jepang">Bahasa Jepang</option>
                    <option <?php if($mapel == 'Sejarah'){echo"selected";}?> value="Sejarah">Sejarah</option>
                    <option <?php if($mapel == 'PBGTM'){echo"selected";}?> value="PBGTM">PBGTM</option>
                    <option <?php if($mapel == 'PPB'){echo"selected";}?> value="PPB">PPB</option>
                    <option <?php if($mapel == 'Kesenian'){echo"selected";}?> value="Kesenian">Kesenian</option>
                    <option <?php if($mapel == 'Basis Data'){echo"selected";}?> value="Basis Data">Basis Data</option>
                    <option <?php if($mapel == 'PKK'){echo"selected";}?> value="PKK">PKK</option>
            </select>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-3 row mt-4">
  <div class="col">
    <?php
    if(isset($_GET['edit'])){
      ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-primary">
        Simpan perubahan
    </button>
    <?php
    }else{
      ?>
      
      <button type="submit" name="aksi" value="add" class="btn btn-primary">
        Daftar
    </button>
    <?php
    }
    ?>
    <a href="index.php" type="button" class="btn btn-danger">Batal</a>
  </div>
  </div>
    </form>
</div>
</div>
    </body>
   <footer style="color:blue;"><center> Copyright &copy; 2024 by Ervan<center> </footer>
</html>