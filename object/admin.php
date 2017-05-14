<?php  
    /**
     * Class admin untuk melakukan login dan registrasi admin baru
     */
    class Admin
    {

        private $conn; //Menyimpan Koneksi database
        private $error; //Menyimpan Error Message



        // Contructor untuk class admin, membutuhkan satu parameter yaitu koneksi ke databse
        public function __construct($db)
        {
            $this->conn = $db;

            // Mulai session
            session_start();
        }

        // Registrasi admin baru
        public function register($nama, $nope, $alamat, $email, $username, $password)
        {
            try
            {
                // buat hash dari password yang dimasukkan
                $hashPasswd = password_hash($password, PASSWORD_DEFAULT);

                //Masukkan admin baru ke database
                $query = $this->conn->prepare("INSERT INTO admin_lab(nama_admin_lab, no_telepon_admin_lab, alamat_admin_lab, email_admin_lab, username_admin_lab, password_admin_lab) VALUES(:nama, :nope, :alamat, :email, :username, :password)");
                $query->bindParam(":nama", $nama);
                $query->bindParam(":nope", $nope);
                $query->bindParam(":alamat", $alamat);
                $query->bindParam(":email", $email);
                $query->bindParam(":username", $username);
                $query->bindParam(":password", $hashPasswd);
                $query->execute();

                return true;
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "Username sudah digunakan!";
                    return false;
                }else{
                    echo $e->getMessage();
                    return false;
                }
            }
        }

        //Login admin
        public function login($username, $password)
        {
            try
            {
                // Ambil data dari database
                $query = $this->conn->prepare("SELECT * FROM admin_lab WHERE username_admin_lab = :username");
                $query->bindParam(":username", $username);
                $query->execute();
                $data = $query->fetch();

                // Jika jumlah baris > 0
                if($query->rowCount() > 0){
                    // jika password yang dimasukkan sesuai dengan yg ada di database
                    if(password_verify($password, $data['password_admin_lab'])){
                        $_SESSION['admin_session'] = $data['id_admin_lab'];
                        return true;
                    }else{
                        $this->error = "Email atau Password Salah";
                        return false;
                    }
                }else{
                    $this->error = "Email atau Password Salah";
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        // Cek apakah admin sudah login
        public function isLoggedIn(){
            // Apakah admin_session sudah ada di session
            if(isset($_SESSION['admin_session']))
            {
                return true;
            }
        }

        // Ambil data admin yang sudah login
        public function getAdminName(){
            // Cek apakah sudah login
            if(!$this->isLoggedIn()){
                return false;
            }

            try {
                // Ambil data admin dari database
                $query = $this->conn->prepare("SELECT * FROM admin_lab WHERE id_admin_lab = :id");
                $query->bindParam(":id", $_SESSION['admin_session']);
                $query->execute();
                return $query->fetch();
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        // Logout admin
        public function logout(){
            // Hapus session
            session_destroy();
            // Hapus admin_session
            unset($_SESSION['admin_session']);
            return true;
        }

        // Ambil error terakhir yg disimpan di variable error
        public function getLastError(){
            return $this->error;
        }
    }

?>