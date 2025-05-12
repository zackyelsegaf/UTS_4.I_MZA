<?php
    include('header.php');
?>
<div class="bg-green">
    <div class="container">
        <div class="row padding-default justify-content-center">
            <div class="col-md-6">
                <div class="card border-radius-default p-4">
                    <h3 class="text-center mb-4 text-green">Login | Administrasi Kepegawaian</h3>
                    <form action="proses_login.php" method="POST">
                        <div class="col-md-12 mb-3">
                            <label for="username_655" class="form-label">Username</label>
                            <input type="text" class="form-control border-radius-default" id="username_655" name="username_655" required autofocus>
                        </div>
                        <div class="col-md-12 mb-5">
                            <label for="password_655" class="form-label">Password</label>
                            <input type="password" class="form-control border-radius-default" id="password_655" name="password_655" required>
                        </div>
                        <div class="d-grid">
                            <a href="index.php" class="btn btn-success border-radius-default">Masuk</a>
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