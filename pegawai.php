<?php
include('header.php');
include('navbar.php')
?>
<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-2">
            <div class="card bg-green border-radius-default p-4">
                <h4 class="text-center text-green mb-3"><i class="fa-solid fa-signature"></i>&nbsp;&nbsp;&nbsp;Muhammad Zacky Abdullah - <strong>Pegawai</strong></h4>
                <marquee direction="right" scrollamount="10">
                <div class="row col-lg-12">
                    <div class="col-md-4">
                        <h6 class="text-center text-green"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;&nbsp;2313010655</h6>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-center text-green"><i class="fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;4.I Class</h6>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-center text-green"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;&nbsp;Pemrograman Web</h6>
                    </div>
                </div>
                </marquee>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Input Data Pegawai</strong></h5>
                </div>
                <form action="" method="POST">
                    <div class="row p-4">
                        <div class="col-md-12 mb-3">
                            <label for="no_pegawai_655" class="form-label">No. Pegawai</label>
                            <input type="text" class="form-control" name="no_pegawai_655" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nik_pegawai_655" class="form-label">NIK Pegawai</label>
                            <input type="text" class="form-control" name="nik_pegawai_655" required autofocus>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="nama_depan_pegawai_655" class="form-label">Nama Depan Pegawai</label>
                                    <input type="text" class="form-control" name="nama_depan_pegawai_655" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="nama_belakang_pegawai_655" class="form-label">Nama Belakang Pegawai</label>
                                    <input type="text" class="form-control" name="nama_belakang_pegawai_655" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nomor_telepon_655" class="form-label">No. Telepon Pegawai</label>
                            <input type="number" class="form-control" name="nomor_telepon_655" required autofocus>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="tanggal_lahir_655" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir_655" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 mb-3">
                                    <label for="tempat_lahir_655" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir_655" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tanggal_rekrut_655" class="form-label">Tanggal Rekrutmen</label>
                            <input type="date" class="form-control" name="tanggal_rekrut_655" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="sistem_rekrut_655" class="form-label">Sistem Rekrutmen</label>
                            <input type="text" class="form-control" name="sistem_rekrut_655" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lokasi_kerja_655" class="form-label">Lokasi Kerja</label>
                            <select name="lokasi_kerja_655" class="form-select">
                                <option value="">-- Pilih Lokasi</option>
                                <option value="Cabang 1">Cabang 1 (Yogyakarta)</option>
                                <option value="Cabang 2">Cabang 2 (Surabaya)</option>
                                <option value="Cabang 3">Cabang 3 (Magelang)</option>
                                <option value="Cabang 4">Cabang 4 (Surakarta)</option>
                                <option value="Cabang 5">Cabang 5 (Malang)</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="divisi_pegawai_655" class="form-label">Divisi</label>
                            <select name="divisi_pegawai_655" class="form-select">
                                <option value="">-- Pilih Divisi</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Finance">Finance</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="status_pegawai_655" class="form-label">Status Pegawai</label>
                            <select name="status_pegawai_655" class="form-select">
                                <option value="">-- Pilih Status</option>
                                <option value="Full Time - Kontrak">Full Time - Kontrak</option>
                                <option value="Full Time - Tetap">Full Time - Tetap</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Full Time - Tetap">Full Time - Tetap</option>
                                <option value="Magang">Magang</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="posisi_pegawai_655" class="form-label">Posisi Pegawai</label>
                            <select name="posisi_pegawai_655" class="form-select">
                                <option value="">-- Pilih Posisi</option>
                                <option value="Programmer - Fullstack">Programmer - Fullstack</option>
                                <option value="Content - Marketing">Content - Marketing</option>
                                <option value="Staff Administrasi Keuangan">Staff Administrasi Keuangan</option>
                                <option value="Copywriter Media Sosial">Copywriter Media Sosial</option>
                                <option value="Sales Management">Sales Management</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="link_cv_655" class="form-label">Link Google Drive CV</label>
                            <input type="text" class="form-control" name="link_cv_655" required autofocus>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default" name="submit">Kirim Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Pegawai655
        {
            protected $no_pegawai_655;
            protected $nik_pegawai_655;
            protected $nama_depan_pegawai_655;
            protected $nama_belakang_pegawai_655;
            protected $nomor_telepon_655;
            protected $tanggal_lahir_655;
            protected $tempat_lahir_655;
            protected $tanggal_rekrut_655;
            protected $sistem_rekrut_655;
            protected $lokasi_kerja_655;
            protected $divisi_pegawai_655;
            protected $status_pegawai_655;
            protected $posisi_pegawai_655;
            protected $link_cv_655;

            public function __construct($nopeg_655, $nikpeg_655, $nmdepanpeg_655, $nmbelakang_655, $telppeg_655, $tgl_lahir_655, $tmp_lahir_655, $tgl_rekrut_655, $sistemrk__655, $lokasikj_655, $divisipeg_655, $statuspeg_655, $posisipeg_655, $cvpeg_655)
            {
                $this->no_pegawai_655 = $nopeg_655;
                $this->nik_pegawai_655 = $nikpeg_655;
                $this->nama_depan_pegawai_655 = $nmdepanpeg_655;
                $this->nama_belakang_pegawai_655 = $nmbelakang_655;
                $this->nomor_telepon_655 = $telppeg_655;
                $this->tanggal_lahir_655 = $tgl_lahir_655;
                $this->tempat_lahir_655 = $tmp_lahir_655;
                $this->tanggal_rekrut_655 = $tgl_rekrut_655;
                $this->sistem_rekrut_655 = $sistemrk__655;
                $this->lokasi_kerja_655 = $lokasikj_655;
                $this->divisi_pegawai_655 = $divisipeg_655;
                $this->status_pegawai_655 = $statuspeg_655;
                $this->posisi_pegawai_655 = $posisipeg_655;
                $this->link_cv_655 = $cvpeg_655;
            }

            protected function tampilData()
            {
                echo '
                <div class="col-md-6 mb-5">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Data Pegawai - ' . $this->no_pegawai_655 . '</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>No. Pegawai            :</strong> ' . $this->no_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>NIK Pegawai            :</strong> ' . $this->nik_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>Nama Lengkap Pegawai   :</strong> ' . $this->nama_depan_pegawai_655 . ' ' . $this->nama_belakang_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>Nomor Telepon Pegawai  :</strong> ' . $this->no_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>Tanggal Lahir Pegawai  :</strong> ' . $this->tanggal_lahir_655 . '</li>
                            <li class="list-group-item p-3"><strong>Tempat Lahir Pegawai   :</strong> ' . $this->tempat_lahir_655 . '</li>
                            <li class="list-group-item p-3"><strong>Tanggal Rekrut Pegawai :</strong> ' . $this->tanggal_rekrut_655 . '</li>
                            <li class="list-group-item p-3"><strong>Sistem Rekrut Pegawai  :</strong> ' . $this->sistem_rekrut_655 . '</li>
                            <li class="list-group-item p-3"><strong>Lokasi Kerja Pegawai   :</strong> ' . $this->lokasi_kerja_655 . '</li>
                            <li class="list-group-item p-3"><strong>Divisi Pegawai         :</strong> ' . $this->divisi_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>Status Pegawai         :</strong> ' . $this->status_pegawai_655 . '</li>
                            <li class="list-group-item p-3"><strong>Posisi Pegawai         :</strong> ' . $this->posisi_pegawai_655 . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Link CV Pegawai :</strong> <a href="' . $this->link_cv_655 . '" target="_blank">Buka Dokumen</a></li>
                        </ul>
                    </div>
                </div>
                ';
            }
        }

        class DataPegawai655 extends Pegawai655
        {
            public static $list_pegawai = [];

            public function __construct($nopeg_655, $nikpeg_655, $nmdepanpeg_655, $nmbelakang_655, $telppeg_655, $tgl_lahir_655, $tmp_lahir_655, $tgl_rekrut_655, $sistemrk__655, $lokasikj_655, $divisipeg_655, $statuspeg_655, $posisipeg_655, $cvpeg_655)
            {
                parent::__construct($nopeg_655, $nikpeg_655, $nmdepanpeg_655, $nmbelakang_655, $telppeg_655, $tgl_lahir_655, $tmp_lahir_655, $tgl_rekrut_655, $sistemrk__655, $lokasikj_655, $divisipeg_655, $statuspeg_655, $posisipeg_655, $cvpeg_655);
                array_push(self::$list_pegawai, $this);
            }

            public function tampilkan()
            {
                $this->tampilData();
            }
        }

        if (isset($_POST['submit'])) {
            $no_pegawai_655 = $_POST["no_pegawai_655"];
            $nik_pegawai_655 = $_POST["nik_pegawai_655"];
            $nama_depan_pegawai_655 = $_POST["nama_depan_pegawai_655"];
            $nama_belakang_pegawai_655 = $_POST["nama_belakang_pegawai_655"];
            $nomor_telepon_655 = $_POST["nomor_telepon_655"];
            $tanggal_lahir_655 = $_POST["tanggal_lahir_655"];
            $tempat_lahir_655 = $_POST["tempat_lahir_655"];
            $tanggal_rekrut_655 = $_POST["tanggal_rekrut_655"];
            $sistem_rekrut_655 = $_POST["sistem_rekrut_655"];
            $lokasi_kerja_655 = $_POST["lokasi_kerja_655"];
            $divisi_pegawai_655 = $_POST["divisi_pegawai_655"];
            $status_pegawai_655 = $_POST["status_pegawai_655"];
            $posisi_pegawai_655 = $_POST["posisi_pegawai_655"];
            $link_cv_655 = $_POST["link_cv_655"];

            $array_pegawai_655 = [];
            array_push($array_pegawai_655, new DataPegawai655("PG001", "1234567890", "Budi", "Santoso", "081234567890", "1990-01-01", "Yogyakarta", "2023-01-01", "Online", "Cabang 1", "Programmer", "Full Time - Tetap", "Programmer - Fullstack", "https://drive.google.com/file/d/xxx1"));
            array_push($array_pegawai_655, new DataPegawai655("PG001", "1234567890", "Budi", "Santoso", "081234567890", "1990-01-01", "Yogyakarta", "2023-01-01", "Online", "Cabang 1", "Programmer", "Full Time - Tetap", "Programmer - Fullstack", "https://drive.google.com/file/d/xxx1"));
            array_push($array_pegawai_655, new DataPegawai655("PG002", "9876543210", "Sari", "Rahma", "082345678901", "1992-02-02", "Surabaya", "2022-12-01", "Offline", "Cabang 2", "Finance", "Part Time", "Staff Administrasi Keuangan", "https://drive.google.com/file/d/xxx2"));
            array_push($array_pegawai_655, new DataPegawai655("PG003", "1122334455", "Dewi", "Anggraini", "083456789012", "1993-03-03", "Magelang", "2023-02-01", "Online", "Cabang 3", "Marketing", "Magang", "Content - Marketing", "https://drive.google.com/file/d/xxx3"));
            array_push($array_pegawai_655, new DataPegawai655("PG004", "2233445566", "Andi", "Saputra", "084567890123", "1989-04-04", "Bandung", "2023-03-01", "Online", "Cabang 1", "IT", "Full Time - Tetap", "System Analyst", "https://drive.google.com/file/d/xxx4"));
            array_push($array_pegawai_655, new DataPegawai655("PG005", "3344556677", "Rina", "Amalia", "085678901234", "1991-05-05", "Jakarta", "2022-10-15", "Offline", "Cabang 2", "HRD", "Kontrak", "HR Officer", "https://drive.google.com/file/d/xxx5"));
            array_push($array_pegawai_655, new DataPegawai655("PG006", "4455667788", "Dani", "Wijaya", "086789012345", "1994-06-06", "Bekasi", "2021-09-10", "Online", "Cabang 3", "Support", "Full Time - Tetap", "IT Support", "https://drive.google.com/file/d/xxx6"));
            array_push($array_pegawai_655, new DataPegawai655("PG007", "5566778899", "Tari", "Lestari", "087890123456", "1990-07-07", "Semarang", "2020-08-20", "Offline", "Cabang 1", "Sales", "Magang", "Sales Representative", "https://drive.google.com/file/d/xxx7"));
            array_push($array_pegawai_655, new DataPegawai655("PG008", "6677889900", "Galih", "Pratama", "088901234567", "1995-08-08", "Malang", "2022-01-05", "Online", "Cabang 2", "Finance", "Part Time", "Finance Staff", "https://drive.google.com/file/d/xxx8"));
            array_push($array_pegawai_655, new DataPegawai655("PG009", "7788990011", "Lina", "Maulida", "089012345678", "1988-09-09", "Solo", "2023-07-07", "Offline", "Cabang 3", "Marketing", "Full Time - Tetap", "Digital Marketing", "https://drive.google.com/file/d/xxx9"));
            array_push($array_pegawai_655, new DataPegawai655("PG010", "8899001122", "Fajar", "Yusuf", "081122334455", "1992-10-10", "Depok", "2022-05-15", "Online", "Cabang 1", "HRD", "Full Time - Tetap", "Recruiter", "https://drive.google.com/file/d/xxx10"));
            array_push($array_pegawai_655, new DataPegawai655("PG011", "9900112233", "Citra", "Ningrum", "082233445566", "1993-11-11", "Palembang", "2021-11-01", "Offline", "Cabang 2", "Support", "Magang", "Customer Support", "https://drive.google.com/file/d/xxx11"));
            array_push($array_pegawai_655, new DataPegawai655("PG012", "1011121314", "Rico", "Gunawan", "083344556677", "1996-12-12", "Pontianak", "2023-04-04", "Online", "Cabang 3", "IT", "Part Time", "Backend Developer", "https://drive.google.com/file/d/xxx12"));
            array_push($array_pegawai_655, new DataPegawai655("PG013", "1112131415", "Nia", "Fitriani", "084455667788", "1994-01-13", "Makassar", "2022-03-03", "Offline", "Cabang 1", "Sales", "Kontrak", "Sales Admin", "https://drive.google.com/file/d/xxx13"));
            array_push($array_pegawai_655, new DataPegawai655("PG014", "1213141516", "Yoga", "Permana", "085566778899", "1987-02-14", "Manado", "2023-06-06", "Online", "Cabang 2", "Finance", "Full Time - Tetap", "Tax Officer", "https://drive.google.com/file/d/xxx14"));
            array_push($array_pegawai_655, new DataPegawai655("PG015", "1314151617", "Anisa", "Putri", "086677889900", "1995-03-15", "Batam", "2021-02-20", "Offline", "Cabang 3", "Marketing", "Magang", "Copywriter", "https://drive.google.com/file/d/xxx15"));
            array_push($array_pegawai_655, new DataPegawai655("PG016", "1415161718", "Hendra", "Kurniawan", "087788990011", "1993-04-16", "Banjarmasin", "2020-12-01", "Online", "Cabang 1", "HRD", "Part Time", "Training Specialist", "https://drive.google.com/file/d/xxx16"));
            array_push($array_pegawai_655, new DataPegawai655("PG017", "1516171819", "Mega", "Safitri", "088899001122", "1990-05-17", "Padang", "2023-08-08", "Offline", "Cabang 2", "IT", "Full Time - Tetap", "Frontend Developer", "https://drive.google.com/file/d/xxx17"));
            array_push($array_pegawai_655, new DataPegawai655("PG018", "1617181920", "Bayu", "Nugroho", "089900112233", "1992-06-18", "Cirebon", "2022-09-09", "Online", "Cabang 3", "Support", "Kontrak", "Technical Support", "https://drive.google.com/file/d/xxx18"));


            $array_store_pegawai_655 = new DataPegawai655($no_pegawai_655, $nik_pegawai_655, $nama_depan_pegawai_655, $nama_belakang_pegawai_655, $nomor_telepon_655, $tanggal_lahir_655, $tempat_lahir_655, $tanggal_rekrut_655, $sistem_rekrut_655, $lokasi_kerja_655, $divisi_pegawai_655, $status_pegawai_655, $posisi_pegawai_655, $link_cv_655);
            array_push($array_pegawai_655, $array_store_pegawai_655);

            foreach ($array_pegawai_655 as $employees) {
                $employees->tampilkan();
            }
        }
        ?>

    </div>
</div>

<?php
include('footer.php');
?>