<?php $page = basename($_SERVER['PHP_SELF']); ?>

<nav id="navbar-example2" class="navbar bg-green px-5 py-3 mb-3">
    <a class="navbar-brand text-green" href="#"><strong>Administrasi Kepegawaian</strong></a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link text-green <?= ($page == 'form2313010655.php') ? 'active' : '' ?>" href="form2313010655.php"><i class="fa-solid fa-users">&nbsp;&nbsp;&nbsp;</i>Pegawai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-green <?= ($page == 'form2313010630.php') ? 'active' : '' ?>" href="form2313010630.php"><i class="fa-solid fa-coins">&nbsp;&nbsp;&nbsp;</i>Tunjangan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-green <?= ($page == 'form2313010635.php') ? 'active' : '' ?>" href="form2313010635.php"><i class="fa-solid fa-briefcase">&nbsp;&nbsp;&nbsp;</i>Jabatan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-green <?= ($page == 'form2313010609.php') ? 'active' : '' ?>" href="form2313010609.php"><i class="fa-solid fa-stopwatch">&nbsp;&nbsp;&nbsp;</i>Absensi</a>
        </li>
        <li class="nav-item ms-2">
            <a class="btn btn-danger border-radius-default" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
    </ul>
</nav>

<!-- <?php //$page = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar navbar-expand-lg bg-green px-5 py-3 mb-3">
    <div class="container-fluid">
        <a class="navbar-brand text-green" href="#"><strong>Administrasi Kepegawaian</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'index.php') ? 'active' : '' ?>" href="index.php"><i class="fa-solid fa-gauge">&nbsp;&nbsp;&nbsp;</i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'pegawai.php') ? 'active' : '' ?>" href="pegawai.php"><i class="fa-solid fa-users">&nbsp;&nbsp;&nbsp;</i>Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'penggajian.php') ? 'active' : '' ?>" href="penggajian.php"><i class="fa-solid fa-sack-dollar">&nbsp;&nbsp;&nbsp;</i>Penggajian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'tunjangan.php') ? 'active' : '' ?>" href="tunjangan.php"><i class="fa-solid fa-coins">&nbsp;&nbsp;&nbsp;</i>Tunjangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'jabatan.php') ? 'active' : '' ?>" href="jabatan.php"><i class="fa-solid fa-briefcase">&nbsp;&nbsp;&nbsp;</i>Jabatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-green <?= ($page == 'absensi.php') ? 'active' : '' ?>" href="absensi.php"><i class="fa-solid fa-stopwatch">&nbsp;&nbsp;&nbsp;</i>Absensi</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="btn btn-danger border-radius-default" href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
