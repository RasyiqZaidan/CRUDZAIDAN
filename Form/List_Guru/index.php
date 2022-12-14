<?php 
include('library.php');
$lib = new Library();
$data_guru = $lib->show();

if(isset($_GET['hapus_guru']))
{
    $kd_guru = $_GET['hapus_guru'];
    $status_hapus = $lib->delete($kd_guru);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="log0.png" />
        <title>List Guru</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Guru</h3>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success plus float-right">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mapel</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                    $no = 1;
                    foreach($data_guru as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_guru']."</td>";
                        echo "<td>".$row['mapel']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?kd_guru=".$row['kd_guru']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_guru=".$row['kd_guru']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
         </div>
    </div>
 </body>
</html>