<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_guru";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nama_guru, $mapel, $alamat)
    {
        $data = $this->db->prepare('INSERT INTO tb_guru (nama_guru,mapel,alamat) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_guru);
        $data->bindParam(2, $mapel);
        $data->bindParam(3, $alamat);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_guru");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kd_guru){
        $query = $this->db->prepare("SELECT * FROM tb_guru where kd_guru=?");
        $query->bindParam(1, $kd_guru);
        $query->execute();
        return $query->fetch();
    }

    public function update($kd_guru,$nama_guru,$mapel,$alamat){
        $query = $this->db->prepare('UPDATE tb_guru set nama_guru=?,mapel=?,alamat=? where kd_guru=?');
        
        $query->bindParam(1, $nama_guru);
        $query->bindParam(2, $mapel);
        $query->bindParam(3, $alamat);
        $query->bindParam(4, $kd_guru);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kd_guru)
    {
        $query = $this->db->prepare("DELETE FROM tb_guru where kd_guru=?");

        $query->bindParam(1, $kd_guru);

        $query->execute();
        return $query->rowCount();
    }

}
?>