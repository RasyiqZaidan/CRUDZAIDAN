<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['kd_guru'])){
    $kd_guru = $_GET['kd_guru']; 
    $data_guru = $lib->get_by_id($kd_guru);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $kd_guru = $_POST['kd_guru'];
    $nama_guru = $_POST['nama_guru'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat']; 
    $status_update = $lib->update($kd_guru,$nama_guru,$mapel,$alamat);
    if($status_update)
    {
        header('Location:index.php');
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
                <h3>Update Data Guru</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="kd_guru" value="<?php echo $data_guru['kd_guru']; ?>"/>
                <div class="form-group row">
                    <label for="nama_guru" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_guru" class="form-control" id="nama_guru" value="<?php echo $data_guru['nama_guru']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mapel" class="col-sm-2 col-form-label">Mapel</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_guru['mapel']; ?>" name="mapel" class="form-control" id="mapel">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_guru['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>