<?php
include('header.php');
session_start();

class LoginKelompok
{
    private $usernames;
    private $passwords;

    public function __construct()
    {
        $this->usernames = ['2313010655', '2313010630', '2313010635', '2313010609'];
        $this->passwords = ['2313010655', '2313010630', '2313010635', '2313010609'];
    }
 
    public function proses_loginKelompok($input_user, $input_pass)
    {
        session_start();

        $username = [
            "2313010655" => "2313010655",
            "2313010630" => "2313010630",
            "2313010635" => "2313010635",
            "2313010609" => "2313010609"
        ];

        $nama = [
            "2313010655" => "Muhammad Zacky Abdullah",
            "2313010630" => "Lifia Anggraini",
            "2313010635" => "Fathya Khoirunnisa",
            "2313010609" => "Putri Buana Della Puspita"
        ];

        $foto = [
            "2313010655" => "zacky.jpg",
            "2313010630" => "lifia.png",
            "2313010635" => "fathya.jpg",
            "2313010609" => "della.jpg"
        ];

        if (isset($username[$input_user]) && $username[$input_user] === $input_pass) {
            // Set session
            $_SESSION['user'] = $input_user;
            $_SESSION['nama'] = $nama[$input_user];
            $_SESSION['nim']  = $input_user;
            $_SESSION['foto'] = $foto[$input_user];

            header("Location: form$input_user.php");
            exit;
        } else {
            echo "<div style='color: red;'>Username dan password tidak tepat.</div>";
        }
    }

}

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = new LoginKelompok();
    $error = $login->proses_loginKelompok($username, $password);
}
?>
<div class="bg-green">
    <div class="container">
        <div class="row padding-default justify-content-center">
            <div class="col-md-6">
                <div class="card border-radius-default p-4">
                    <h3 class="text-center mb-4 text-green">Login | Administrasi Kepegawaian</h3>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= $error; ?></div>
                    <?php endif; ?>
                    <form action="login.php" method="POST">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control border-radius-default" name="username" required autofocus>
                        </div>
                        <div class="col-md-12 mb-5">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control border-radius-default" name="password" required>
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
include('footer.php');
?>