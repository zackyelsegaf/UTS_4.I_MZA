<?php
include('header.php');
include('navbar.php')
?>

<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Input Slip Gaji</strong></h5>
                </div>
                <form action="tunjangan.php" method="POST">
                    <div class="row p-4">
                        <div class="col-md-12 mb-3">
                            <label for="nama_txt" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jabatan_txt" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gaji_pokok_txt" class="form-label">Gaji Pokok</label>
                            <input type="text" class="form-control" name="gaji_pokok_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tunjangan_txt" class="form-label">Tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lembur_txt" class="form-label">Lembur</label>
                            <input type="text" class="form-control" name="lembur_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="potongan_txt" class="form-label">Potongan</label>
                            <input type="text" class="form-control" name="potongan_txt" required autofocus>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default" name="submit">Hitung Gaji</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Gaji
        {
            public $nama_pegawai;
            public $jabatan;
            public $gaji_pokok;
            public $tunjangan;
            public $jam_lembur;
            public $potongan;

            const TARIF_LEMBUR = 50000;

            public function __construct($nama, $jabatan, $gaji_pokok, $tunjangan, $lembur, $potongan)
            {
                $this->nama_pegawai = $nama;
                $this->jabatan = $jabatan;
                $this->gaji_pokok = $gaji_pokok;
                $this->tunjangan = $tunjangan;
                $this->jam_lembur = $lembur;
                $this->potongan = $potongan;
            }

            public function hitungLembur()
            {
                return $this->jam_lembur * self::TARIF_LEMBUR;
            }

            public function totalGaji()
            {
                return $this->gaji_pokok + $this->tunjangan + $this->hitungLembur() - $this->potongan;
            }

            public function tampilkanData()
            {
                echo '
                <div class="col-md-6">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Total Slip Gaji</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>Nama Pegawai:</strong> ' . $this->nama_pegawai . '</li>
                            <li class="list-group-item p-3"><strong>Jabatan:</strong> ' . $this->jabatan . '</li>
                            <li class="list-group-item p-3"><strong>Gaji Pokok:</strong> Rp ' . number_format($this->gaji_pokok, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Tunjangan:</strong> Rp ' . number_format($this->tunjangan, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Lembur (' . $this->jam_lembur . ' jam):</strong> Rp ' . number_format($this->hitungLembur(), 0, ',', '.') . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Potongan:</strong> Rp ' . number_format($this->potongan, 0, ',', '.') . '</li>
                        </ul>
                        <div class="p-4">
                            <h5 class="text-end"><strong>Total Gaji: Rp ' . number_format($this->totalGaji(), 0, ',', '.') . '</strong></h5>
                        </div>
                    </div>
                </div>';
            }
        }
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama_txt'];
            $jabatan = $_POST['jabatan_txt'];
            $gaji_pokok = (float)$_POST['gaji_pokok_txt'];
            $tunjangan = (float)$_POST['tunjangan_txt'];
            $lembur = (int)$_POST['lembur_txt'];
            $potongan = (float)$_POST['potongan_txt'];

            $slip_gaji = new Gaji($nama, $jabatan, $gaji_pokok, $tunjangan, $lembur, $potongan);
            $slip_gaji->tampilkanData();
        }
        ?>
    </div>
</div>

<?php
include('footer.php');
?>