<?php
    class AnggotaLab
    {
        private $conn; //Menyimpan Koneksi database
        private $error; //Menyimpan Error Message

        // Contructor untuk class lab, membutuhkan satu parameter yaitu koneksi ke database
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Registrasi anggota lab baru
        public function register($id_lab, $jabatan, $nama, $email, $riset)
        {
            try
            {
                //Masukkan anggota lab baru ke database
                $query = $this->conn->prepare("INSERT INTO anggota_lab(id_lab, jabatan_anggota_lab, nama_anggota_lab, email_anggota_lab, judul_riset) VALUES(:id_lab, :jabatan, :nama, :email, :riset)");
                $query->bindParam(":id_lab", $id_lab);
                $query->bindParam(":jabatan", $jabatan);
                $query->bindParam(":nama", $nama);
                $query->bindParam(":email", $email);
                $query->bindParam(":riset", $riset);
                $query->execute();

                return true;
            }
            catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "nrp sudah terdaftar!";
                    return false;
                }else{
                    echo $e->getMessage();
                    return false;
                }
            }
        }

        function read(){
        //select all data
        $query = "SELECT id_anggota_lab, id_lab, jabatan_anggota_lab, nama_anggota_lab, email_anggota_lab, judul_riset
                FROM anggota_lab
                ORDER BY nama_anggota_lab";
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }

        // Ambil error terakhir yg disimpan di variable error
        public function getLastError(){
            return $this->error;
        }
    }

?>