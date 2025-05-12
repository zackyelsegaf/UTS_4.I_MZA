<?php
include('header.php');
include('navbar.php')
?>

<div class="container">
    <div class="row padding-default justify-content-center">
        <div class="col-md-6">
            <div class="card border-radius-default p-4">
                <form action="tunjangan.php" method="POST">
                    Nama: <input type="text" name="nama_txt"><br>
                    Jabatan: <input type="text" name="jabatan_txt"><br>
                    Gaji Pokok: <input type="number" name="gaji_pokok_txt"><br>
                    Tunjangan: <input type="number" name="tunjangan_txt"><br>
                    Jam Lembur: <input type="number" name="lembur_txt"><br>
                    Potongan: <input type="number" name="potongan_txt"><br>
                    <button type="submit" name="submit">Hitung Gaji</button>
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
                    <div class="card border-radius-default p-4">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Slip Gaji</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama Pegawai:</strong> ' . $this->nama_pegawai . '</li>
                            <li class="list-group-item"><strong>Jabatan:</strong> ' . $this->jabatan . '</li>
                            <li class="list-group-item"><strong>Gaji Pokok:</strong> Rp ' . number_format($this->gaji_pokok, 0, ',', '.') . '</li>
                            <li class="list-group-item"><strong>Tunjangan:</strong> Rp ' . number_format($this->tunjangan, 0, ',', '.') . '</li>
                            <li class="list-group-item"><strong>Lembur (' . $this->jam_lembur . ' jam):</strong> Rp ' . number_format($this->hitungLembur(), 0, ',', '.') . '</li>
                            <li class="list-group-item"><strong>Potongan:</strong> Rp ' . number_format($this->potongan, 0, ',', '.') . '</li>
                        </ul>
                        <div class="mt-3">
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