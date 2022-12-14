<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $nama_guru = $_POST['nama_guru'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $add_status = $lib->add_data($nama_guru, $mapel, $alamat);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Guru</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nama_guru" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" id="nama_guru">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mapel" class="col-sm-2 col-form-label">Mapel</label>
                    <div class="col-sm-10">
                    <input type="text" name="mapel" class="form-control" id="mapel">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>