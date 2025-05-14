<?php
include('header.php');
include('navbar.php');
?>

<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Input Slip Gaji</strong></h5>
                </div>
                <form action="" method="POST">
                    <div class="row p-4">
                        <div class="col-md-12 mb-3">
                            <label for="nama_123" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_123" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jabatan_123" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan_123" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gaji_pokok_123" class="form-label">Gaji Pokok</label>
                            <input type="text" class="form-control" name="gaji_pokok_123" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tunjangan_123" class="form-label">Tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan_123" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lembur_123" class="form-label">Lembur</label>
                            <input type="text" class="form-control" name="lembur_123" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="potongan_123" class="form-label">Potongan</label>
                            <input type="text" class="form-control" name="potongan_123" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default" name="submit">Hitung Gaji</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Pegawai_123 {
            public $nama_123;
            public $jabatan_123;

            public function __construct($nama_123, $jabatan_123) {
                $this->nama_123 = $nama_123;
                $this->jabatan_123 = $jabatan_123;
            }
        }

        class Gaji_123 extends Pegawai_123 {
            public $gaji_pokok_123;
            public $tunjangan_123;
            public $lembur_123;
            public $potongan_123;
            private $bonus_123;

            const TARIF_LEMBUR = 50000;

            public function __construct($nama, $jabatan, $gaji, $tunjangan, $lembur, $potongan) {
                parent::__construct($nama, $jabatan);
                $this->gaji_pokok_123 = $gaji;
                $this->tunjangan_123 = $tunjangan;
                $this->lembur_123 = $lembur;
                $this->potongan_123 = $potongan;
                $this->bonus_123 = 100000; // Dummy bonus
            }

            protected function hitungBonus_123() {
                return $this->bonus_123;
            }

            public function hitungLembur_123() {
                return $this->lembur_123 * self::TARIF_LEMBUR;
            }

            public function totalGaji_123() {
                return $this->gaji_pokok_123 + $this->tunjangan_123 + $this->hitungLembur_123() + $this->hitungBonus_123() - $this->potongan_123;
            }

            public function tampilkanData_123() {
                echo '
                <div class="col-md-6">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Total Slip Gaji</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>Nama Pegawai:</strong> ' . $this->nama_123 . '</li>
                            <li class="list-group-item p-3"><strong>Jabatan:</strong> ' . $this->jabatan_123 . '</li>
                            <li class="list-group-item p-3"><strong>Gaji Pokok:</strong> Rp ' . number_format($this->gaji_pokok_123, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Tunjangan:</strong> Rp ' . number_format($this->tunjangan_123, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Lembur (' . $this->lembur_123 . ' jam):</strong> Rp ' . number_format($this->hitungLembur_123(), 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Bonus:</strong> Rp ' . number_format($this->hitungBonus_123(), 0, ',', '.') . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Potongan:</strong> Rp ' . number_format($this->potongan_123, 0, ',', '.') . '</li>
                        </ul>
                        <div class="p-4">
                            <h5 class="text-end"><strong>Total Gaji: Rp ' . number_format($this->totalGaji_123(), 0, ',', '.') . '</strong></h5>
                        </div>
                    </div>
                </div>';
            }
        }

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama_123'];
            $jabatan = $_POST['jabatan_123'];
            $gaji_pokok = (float)$_POST['gaji_pokok_123'];
            $tunjangan = (float)$_POST['tunjangan_123'];
            $lembur = (int)$_POST['lembur_123'];
            $potongan = (float)$_POST['potongan_123'];

            $data_pegawai = [];

          
            array_push($data_pegawai, new Gaji_123("Anin", "Manager", 6000000, 1000000, 6, 250000));
            array_push($data_pegawai, new Gaji_123("Linda", "Staff", 4500000, 800000, 4, 150000));
            array_push($data_pegawai, new Gaji_123("Dandi", "Akuntan", 5000000, 1000000, 5, 450000));
            array_push($data_pegawai, new Gaji_123("Beni", "HRD", 6500000, 600000, 3, 100000));

            
            $pegawai_input = new Gaji_123($nama, $jabatan, $gaji_pokok, $tunjangan, $lembur, $potongan);
            array_push($data_pegawai, $pegawai_input);

            foreach ($data_pegawai as $pegawai) {
                $pegawai->tampilkanData_123();
            }
        }
        ?>
    </div>
</div>

<?php
include('footer.php');
?>
