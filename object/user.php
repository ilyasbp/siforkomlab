<?php  
    /**
     * Class lab untuk melakukan login dan registrasi lab baru
     */
    class User
    {

        private $conn; //Menyimpan Koneksi database
        private $error; //Menyimpan Error Message

        // Contructor untuk class lab, membutuhkan satu parameter yaitu koneksi ke databse
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Registrasi lab baru
        public function register($nama, $nrp)
        {
            try
            {
                //Masukkan lab baru ke database
                $query = $this->conn->prepare("INSERT INTO user(nama_user, nrp_user) VALUES(:nama, :nrp)");
                $query->bindParam(":nama", $nama);
                $query->bindParam(":nrp", $nrp);
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
        $query = "SELECT id_user, nama_user, nrp_user
                FROM user
                ORDER BY nama_user";
 
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