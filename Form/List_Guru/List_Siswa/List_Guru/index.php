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
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
<style>
html {
}
* {
    box-sizing: border-box; 
}
 
.sidebar-kiri {
width: 20%;
float: left;
padding-right: 15px;
padding-top: 15px;
padding-bottom: 15px;
}
 
.konten {
width: 80%;
float: right;
padding: 15px;
}
 
.header {
    background-color: #33b5e5;
    color: #ffffff;
    padding: 15px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,20);
}
.menu ul {
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color :#33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,20);
}
.menu li:hover {
    background-color: #0099cc;
}
.footer
{
   clear: both;
    background-color: #33b5e5;
    color: #ffffff;
    padding: 15px;
    text-align:center; 
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,20);
    }
</style>
</div>
 
<div class="sidebar-kiri">
<div class="menu">
<ul>
<a href='home.php'><li>Home</li></a>
<li><a href="List_Siswa/index.php">List Siswa</a></li>
<li><a href="berhasil_login.php">Logout</a></li>
</ul>
</div>
</div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Guru</h3>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success">Tambah</a>
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