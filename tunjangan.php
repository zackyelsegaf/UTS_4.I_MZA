<?php
    include('header.php');
    include('navbar.php')
?>

<form action="tunjangan.php" method="POST">
    Nama: <input type="text" name="nama_txt"><br>
    Jabatan: <input type="text" name="jabatan_txt"><br>
    Gaji Pokok: <input type="number" name="gaji_pokok_txt"><br>
    Tunjangan: <input type="number" name="tunjangan_txt"><br>
    Jam Lembur: <input type="number" name="lembur_txt"><br>
    Potongan: <input type="number" name="potongan_txt"><br>
    <button type="submit" name="submit">Hitung Gaji</button>
</form>

<?php
class Gaji {
    public $nama_pegawai;;
    public $jabatan;
    public $gaji_pokok;
    public $tunjangan;
    public $jam_lembur;
    public $potongan;

    // lembur per jam untuk pegawai
    const TARIF_LEMBUR = 50000;

    public function __construct($nama, $jabatan, $gaji_pokok, $tunjangan, $lembur, $potongan) {
        $this->nama_pegawai = $nama;
        $this->jabatan = $jabatan;
        $this->gaji_pokok = $gaji_pokok;
        $this->tunjangan = $tunjangan;
        $this->jam_lembur = $lembur;
        $this->potongan = $potongan;
    }

    public function hitungLembur() {
        return $this->jam_lembur * self::TARIF_LEMBUR;
    }

    public function totalGaji() {
        return $this->gaji_pokok + $this->tunjangan + $this->hitungLembur() - $this->potongan;
    }

    public function tampilkanData() {
        echo "<h2>Slip Gaji</h2>";
        echo "Nama Pegawai : " . $this->nama_pegawai . "<br>";
        echo "Jabatan      : " . $this->jabatan . "<br>";
        echo "Gaji Pokok   : Rp " . number_format($this->gaji_pokok, 0, ',', '.') . "<br>";
        echo "Tunjangan    : Rp " . number_format($this->tunjangan, 0, ',', '.') . "<br>";
        echo "Lembur (" . $this->jam_lembur . " jam): Rp " . number_format($this->hitungLembur(), 0, ',', '.') . "<br>";
        echo "Potongan     : Rp " . number_format($this->potongan, 0, ',', '.') . "<br>";
        echo "<strong>Total Gaji : Rp " . number_format($this->totalGaji(), 0, ',', '.') . "</strong><br>";
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

<?php
include('footer.php');
?>
