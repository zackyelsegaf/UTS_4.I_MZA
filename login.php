<?php
include('header.php');
?>
<div class="bg-green">
    <div class="container">
        <div class="row padding-default justify-content-center">
            <div class="col-md-6">
                <div class="card border-radius-default p-4">
                    <h3 class="text-center mb-4 text-green">Login | Administrasi Kepegawaian</h3>
                    <form action="login.php" method="POST">
                        <div class="col-md-12 mb-3">
                            <label for="username_655" class="form-label">Username</label>
                            <input type="text" class="form-control border-radius-default" id="username_655" name="username_655" required autofocus>
                        </div>
                        <div class="col-md-12 mb-5">
                            <label for="password_655" class="form-label">Password</label>
                            <input type="password" class="form-control border-radius-default" id="password_655" name="password_655" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
session_start();

class User
{
    protected $username;
    protected $password;

    private $dataAkun = [
        'admin' => 'admin123',
        'pegawai' => 'pegawai456'
    ];

    public function cekLogin()
    {
        if (isset($this->dataAkun[$this->username]) && $this->dataAkun[$this->username] === $this->password) {
            return true;
        }
        return false;
    }
}

class LoginUser extends User
{
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function prosesLogin()
    {
        if ($this->cekLogin()) {
            $_SESSION['user'] = $this->username;
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Username atau password salah'); window.location='login.php';</script>";
        }
    }
}
$pesanError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username_655'];
    $password = $_POST['password_655'];

    $login = new LoginUser($username, $password);
    $pesanError = $login->prosesLogin();
}
?>

<?php
include('footer.php');
?>