<?php
include('header.php');
include('navbar.php');
?>

<!-- <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f9f9f9;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #444;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .result {
        background: #eafbea;
        padding: 20px;
        margin-top: 30px;
        border-left: 6px solid #4CAF50;
        border-radius: 8px;
    }
</style> -->


<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-2">
            <div class="card bg-green border-radius-default p-4">
                <h4 class="text-center text-green mb-3"><i class="fa-solid fa-signature"></i>&nbsp;&nbsp;&nbsp;Fathya Khoirunnisa - <strong>Jabatan</strong></h4>
                <marquee direction="right" scrollamount="10">
                <div class="row col-md-12">
                    <div class="col-md-4">
                        <h6 class="text-center text-green"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;&nbsp;2313010635</h6>
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
                    <h5 class="mb-0"><strong>Form Jabatan 635</strong></h5>
                </div>
<form action="" method="POST">
    <div class="row p-4">
        <div class="col-12 mb-3">
            <label for="nama_pegawai_635" class="form-label">Nama Pegawai</label>
            <input type="text" name="nama_pegawai_635" class="form-control" required>
        </div>
        <div class="col-12 mb-3">
            <label for="divisi_635" class="form-label">Divisi / Departemen</label>
            <input type="text" name="divisi_635" class="form-control" required>
        </div>
        <div class="col-12 mb-3">
            <label for="nama_jabatan_635" class="form-label">Nama Jabatan</label>
            <select name="nama_jabatan_635" class="form-control" required>
                <option value="">-- Pilih Jabatan --</option>
                <option value="Magang">Magang</option>
                <option value="Karyawan Sementara">Karyawan Sementara</option>
                <option value="Staff Tetap">Staff Tetap</option>
                <option value="Kepala Divisi">Kepala Divisi</option>
            </select>
        </div>
        <div class="col-12 mb-3">
            <label for="jenis_pekerjaan_635" class="form-label">Jenis Pekerjaan</label>
            <select name="jenis_pekerjaan_635" class="form-control" required>
                <option value="">-- Pilih Jenis Pekerjaan --</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Remote">Remote</option>
                <option value="Kontrak">Kontrak</option>
            </select>
        </div>
        <div class="col-12 mb-3">
            <label for="status_pajak_635" class="form-label">Status Pajak</label>
            <select name="status_pajak_635" class="form-control" required>
                <option value="">-- Pilih Status Pajak --</option>
                <option value="TK/0">TK/0</option>
                <option value="TK/1">TK/1</option>
                <option value="K/0">K/0</option>
                <option value="K/1">K/1</option>
            </select>
        </div>
        <div class="col-12 d-grid">
            <button type="submit" name="submit" class="btn btn-success border-radius-default">Proses</button>
        </div>
    </div>
</form>

        <?php
        class Jabatan635
{
    protected $nama_pegawai_635;
    protected $divisi_635;
    protected $nama_jabatan_635;
    protected $gaji_pokok_635;
    protected $tunjangan_635;
    protected $jenis_pekerjaan_635;
    protected $status_pajak_635;

    public function __construct($nama_pegawai, $divisi, $nama, $gaji, $tunj, $jenis, $pajak)
{
    $this->nama_pegawai_635 = $nama_pegawai;
    $this->divisi_635 = $divisi;
    $this->nama_jabatan_635 = $nama;
    $this->gaji_pokok_635 = $gaji;
    $this->tunjangan_635 = $tunj;
    $this->jenis_pekerjaan_635 = $jenis;

    $this->status_pajak_635 = $pajak;
}

}
        class InformasiJabatan635 extends Jabatan635
        {
            public static $data_array = [];

 public function tampilkanInformasi()
{
    $total = $this->gaji_pokok_635 + $this->tunjangan_635;

    echo '
        <div class="row p-4">
        <div class="col-12 mb-3">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Informasi Jabatan 635</strong></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">Nama Pegawai: ' . $this->nama_pegawai_635 . '</li>
                    <li class="list-group-item p-3">Divisi: ' . $this->divisi_635 . '</li>
                    <li class="list-group-item p-3">Nama Jabatan: ' . $this->nama_jabatan_635 . '</li>
                    <li class="list-group-item p-3">Jenis Pekerjaan: ' . $this->jenis_pekerjaan_635 . '</li>
                    <li class="list-group-item p-3">Status Pajak: ' . $this->status_pajak_635 . '</li>
                    <li class="list-group-item p-3">Gaji Pokok: Rp. ' . number_format($this->gaji_pokok_635) . '</li>
                    <li class="list-group-item p-3">Tunjangan: Rp. ' . number_format($this->tunjangan_635) . '</li>
                    <li class="list-group-item border-radius-default p-3"><strong>Total Gaji: Rp. ' . number_format($total) . '</strong></li>
                </ul>
            </div>
        </div>';
}

            public static function tambahData($objek)
            {
                array_push(self::$data_array, $objek);
            }

            public static function tampilkanDataArray()
            {
                foreach (self::$data_array as $item) {
                    $item->tampilkanInformasi();
                }
            }
        }

if (isset($_POST['submit'])) {
    $nama_pegawai_635 = $_POST['nama_pegawai_635'];
    $divisi_635 = $_POST['divisi_635'];
    $nama_jabatan_635 = $_POST['nama_jabatan_635'];
    $jenis_pekerjaan_635 = $_POST['jenis_pekerjaan_635'];
    $status_pajak_635 = $_POST['status_pajak_635'];

    $gaji_mapping = [
        "Magang" => [2500000, 500000],
        "Karyawan Sementara" => [3000000, 750000],
        "Staff Tetap" => [4000000, 1000000],
        "Kepala Divisi" => [6000000, 2000000]
    ];

    $jenis_mapping = [
        "Full-time" => 500000,
        "Part-time" => -300000,
        "Remote" => -200000,
        "Kontrak" => 250000
    ];

    if (array_key_exists($nama_jabatan_635, $gaji_mapping) && array_key_exists($jenis_pekerjaan_635, $jenis_mapping)) {
        $gaji_pokok_635 = $gaji_mapping[$nama_jabatan_635][0];
        $tunjangan_635 = $gaji_mapping[$nama_jabatan_635][1];

        $dummys = new InformasiJabatan635(
            $nama_pegawai_635,
            $divisi_635,
            $nama_jabatan_635,
            $gaji_pokok_635,
            $tunjangan_635,
            $jenis_pekerjaan_635,
            $status_pajak_635
        );

        $data_dummy_635 = [
            new InformasiJabatan635("Rina", "Keuangan", "Karyawan Sementara", 3000000, 750000, "Full-time", "K/0"),
            new InformasiJabatan635("Adi", "Teknik", "Staff Tetap", 4000000, 1000000, "Part-time", "TK/1"),
            new InformasiJabatan635("Leo", "Programmer Backend", "Staff Tetap", 400000000, 10000000, "Remote", "TK/1"),
            $dummys
        ];

        foreach ($data_dummy_635 as $item) {
            InformasiJabatan635::tambahData($item);
        }

        InformasiJabatan635::tampilkanDataArray();
    } else {
        echo "<div class='text-danger text-center'>Data tidak valid!</div>";
    }
}

        ?>

    </div>
</div>

<?php
include('footer.php');
?>
