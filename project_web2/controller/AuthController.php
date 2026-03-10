<?php
require_once 'models/UserModels.php';

class AuthController {
    // Menyimpan instance dari model
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new UserModel($dbConnection);
    }

    // Menampilkan halaman form login
    public function index() {
        require_once 'views/login.php';
    }

    // Memproses data yang dikirim dari form
    public function processLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Memanggil method di Model
            $user = $this->userModel->checkLogin($username, $password);

            if ($user) {
                // Set Session jika berhasil
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                // Redirect ke halaman sukses/dashboard
               echo "<script>alert('Login Berhasil!'); window.location.href='index.php?action=dashboard';</script>";
                exit();
            } else {
                // Mengirim pesan error ke view
                $errorMsg = "Username atau password salah!";
                require_once 'views/login.php';
            }
        }
    }
}
?>