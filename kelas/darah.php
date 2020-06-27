<?php
class darah
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "donor";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($kd_darah, $gol_darah, $rhesus)
    {
        $data = $this->db->prepare('INSERT INTO darah (kd_darah,gol_darah,rhesus) VALUES (?, ?, ?)');

        $data->bindParam(1, $kd_darah);
        $data->bindParam(2, $gol_darah);
        $data->bindParam(3, $rhesus);

        $data->execute();
        return $data->rowCount();
    }

    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM darah");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kd_darah){
        $query = $this->db->prepare("SELECT * FROM darah where kd_darah=?");
        $query->bindParam(1, $kd_darah);
        $query->execute();
        return $query->fetch();
    }

    public function update($kd_darah,$gol_darah,$rhesus){
        $query = $this->db->prepare('UPDATE darah set gol_darah=?,rhesus=? where kd_darah=?');

        $query->bindParam(1, $gol_darah);
        $query->bindParam(2, $rhesus);
        $query->bindParam(3, $kd_darah);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kd_darah)
    {
        $query = $this->db->prepare("DELETE FROM darah where kd_darah=?");

        $query->bindParam(1, $kd_darah);

        $query->execute();
        return $query->rowCount();
    }

}
?>
