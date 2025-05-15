<?php
session_start();

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
                            <label for="nama_630" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_630" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jabatan_630" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan_630" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gaji_pokok_630" class="form-label">Gaji Pokok</label>
                            <input type="text" class="form-control" name="gaji_pokok_630" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tunjangan_630" class="form-label">Tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan_630" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lembur_630" class="form-label">Lembur</label>
                            <input type="text" class="form-control" name="lembur_630" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="potongan_630" class="form-label">Potongan</label>
                            <input type="text" class="form-control" name="potongan_630" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default" name="submit">Hitung Gaji</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Pegawai_630 {
            public $nama_630;
            public $jabatan_630;

            public function __construct($nama_630, $jabatan_630) {
                $this->nama_630 = $nama_630;
                $this->jabatan_630 = $jabatan_630;
            }
        }

        class Gaji_630 extends Pegawai_630 {
            public $gaji_pokok_630;
            public $tunjangan_630;
            public $lembur_630;
            public $potongan_630;
            private $bonus_630;

            const TARIF_LEMBUR = 50000;

            public function __construct($nama630, $jabatan630, $gaji630, $tunjangan630, $lembur630, $potongan630) {
                parent::__construct($nama630, $jabatan630);
                $this->gaji_pokok_630 = $gaji630;
                $this->tunjangan_630 = $tunjangan630;
                $this->lembur_630 = $lembur630;
                $this->potongan_630 = $potongan630;
                $this->bonus_630 = 100000; // Dummy bonus
            }

            protected function hitungBonus_630() {
                return $this->bonus_630;
            }

            public function hitungLembur_630() {
                return $this->lembur_630 * self::TARIF_LEMBUR;
            }

            public function totalGaji_630() {
                return $this->gaji_pokok_630 + $this->tunjangan_630 + $this->hitungLembur_630() + $this->hitungBonus_630() - $this->potongan_630;
            }

            public function tampilkanData_630() {
                echo '
                <div class="col-md-6">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Total Slip Gaji</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>Nama Pegawai:</strong> ' . $this->nama_630 . '</li>
                            <li class="list-group-item p-3"><strong>Jabatan:</strong> ' . $this->jabatan_630 . '</li>
                            <li class="list-group-item p-3"><strong>Gaji Pokok:</strong> Rp ' . number_format($this->gaji_pokok_630, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Tunjangan:</strong> Rp ' . number_format($this->tunjangan_630, 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Lembur (' . $this->lembur_630 . ' jam):</strong> Rp ' . number_format($this->hitungLembur_630(), 0, ',', '.') . '</li>
                            <li class="list-group-item p-3"><strong>Bonus:</strong> Rp ' . number_format($this->hitungBonus_630(), 0, ',', '.') . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Potongan:</strong> Rp ' . number_format($this->potongan_630, 0, ',', '.') . '</li>
                        </ul>
                        <div class="p-4">
                            <h5 class="text-end"><strong>Total Gaji: Rp ' . number_format($this->totalGaji_630(), 0, ',', '.') . '</strong></h5>
                        </div>
                    </div>
                </div>';
            }
        }

        if (isset($_POST['submit'])) {
            $nama630 = $_POST['nama_630'];
            $jabatan630 = $_POST['jabatan_630'];
            $gaji_pokok_630 = (float)$_POST['gaji_pokok_630'];
            $tunjangan630 = (float)$_POST['tunjangan_630'];
            $lembur630 = (int)$_POST['lembur_630'];
            $potongan630 = (float)$_POST['potongan_630'];


            $data_pegawai630 = [];
            array_push($data_pegawai630, new Gaji_630("Anin", "Manager", 6000000, 1000000, 5, 250000));
            array_push($data_pegawai630, new Gaji_630("Linda", "Staff", 4500000, 800000, 2, 150000));
            array_push($data_pegawai630, new Gaji_630("Dandi", "Manager", 6000000, 1000000, 5, 250000));
            array_push($data_pegawai630, new Gaji_630("Beni", "Staff", 4500000, 800000, 2, 150000));

            $pegawai_input630 = new Gaji_630($nama630, $jabatan630, $gaji_pokok_630, $tunjangan630, $lembur630, $potongan630);
            array_push($data_pegawai630, $pegawai_input630);

            $_SESSION['data_pegawai630'] = $data_pegawai630;

           
            }
        }
        ?>
    </div>
</div>
<!-- Tempatkan kode session output di sini -->
<?php if (isset($_SESSION['data_pegawai630'])): ?>
    <div class="row py-3 px-3 justify-content-center">
        <?php foreach ($_SESSION['data_pegawai630'] as $pegawai630): ?>
            <?php $pegawai630->tampilkanData_630(); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php
include('footer.php');
?>
