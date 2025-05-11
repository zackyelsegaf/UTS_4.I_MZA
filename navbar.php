<?php $page = basename($_SERVER['PHP_SELF']); ?>

<nav id="navbar-example2" class="navbar bg-green px-5 py-3 mb-3">
    <a class="navbar-brand text-green" href="#"><strong>Administrasi Kepegawaian</strong></a>
    <ul class="nav nav-pills">
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
        <li class="nav-item">
            <a class="btn btn-danger border-radius-default" href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
    </ul>
</nav>
