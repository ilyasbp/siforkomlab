<?php  
    /**
     * Class lab untuk melakukan login dan registrasi lab baru
     */
    class Pengumuman
    {

        private $conn; //Menyimpan Koneksi database
        private $error; //Menyimpan Error Message



        // Contructor untuk class lab, membutuhkan satu parameter yaitu koneksi ke databse
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Registrasi lab baru id_pengumuman    id_admin_lab    id_admin_sistem tgl_pengumuman  judul_pengumuman    gambar_pengumuman   isi_pengumuman
        public function register($id_admin, $id_admin_sistem, $tgl, $judul, $gambar, $isi)
        {
            try
            {
                //Masukkan lab baru ke database
                $query = $this->conn->prepare("INSERT INTO pengumuman(id_admin_lab, id_admin_sistem, tgl_pengumuman, judul_pengumuman, gambar_pengumuman, isi_pengumuman) VALUES(:id_admin, :id_admin_sistem, :tgl, :judul, :gambar, :isi)");
                $query->bindParam(":id_admin", $id_admin);
                $query->bindParam(":id_admin_sistem", $id_admin_sistem);
                $query->bindParam(":tgl", $tgl);
                $query->bindParam(":judul", $judul);
                $query->bindParam(":gambar", $gambar);
                $query->bindParam(":isi", $isi);
                $query->execute();

                return true;
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "nama lab sudah digunakan!";
                    return false;
                }else{
                    echo $e->getMessage();
                    return false;
                }
            }
        }

        function read(){
        //select all data
        $query = "SELECT id_pengumuman, id_admin_lab, id_admin_sistem, tgl_pengumuman, judul_pengumuman, gambar_pengumuman, isi_pengumuman
                FROM pengumuman
                ORDER BY id_pengumuman";
 
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