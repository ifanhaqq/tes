<?php

namespace App\Models;

use App\Core\Model;

class Mahasiswa_model extends Model
{
    public function show()
    {
        $query = "SELECT * FROM tb_mahasiswa";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
     {
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $prodi = $_POST['prodi'];

          $sql = "INSERT INTO tb_mahasiswa (nama, nim, prodi) VALUES (:nama, :nim, :prodi)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":nim", $nim);
          $stmt->bindParam(":prodi", $prodi);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_mahasiswa WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $prodi = $_POST['prodi'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_mahasiswa SET nama=:nama, nim=:nim, prodi=:prodi WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":nim", $nim);
          $stmt->bindParam(":prodi", $prodi);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_mahasiswa WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id", $id);

          $stmt->execute();
     }
}