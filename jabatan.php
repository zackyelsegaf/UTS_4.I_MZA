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
                        <div class="col-md-12 mb-3">
                            <label for="nama_jabatan_635" class="form-label">Nama Jabatan</label>
                            <input type="text" name="nama_jabatan_635" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gaji_pokok_635" class="form-label">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok_635" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tunjangan_635" class="form-label">Tunjangan</label>
                            <input type="text" name="tunjangan_635" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lembur_635" class="form-label">Lembur</label>
                            <input type="text" name="lembur_635" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="potongan_635" class="form-label">Potongan</label>
                            <input type="text" name="potongan_635" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-success border-radius-default">Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Jabatan635
        {
            protected $nama_jabatan_635;
            protected $gaji_pokok_635;
            protected $tunjangan_635;
            protected $lembur_635;
            protected $potongan_635;

            public function __construct($nama, $gaji, $tunj, $lembur, $potongan)
            {
                $this->nama_jabatan_635 = $nama;
                $this->gaji_pokok_635 = $gaji;
                $this->tunjangan_635 = $tunj;
                $this->lembur_635 = $lembur;
                $this->potongan_635 = $potongan;
            }
        }

        class SlipGaji635 extends Jabatan635
        {
            public static $data_array = [];

            public function tampilkanSlip()
            {
                $total = $this->gaji_pokok_635 + $this->tunjangan_635 + $this->lembur_635 - $this->potongan_635;
                echo '
                    <div class="col-md-6 mb-5">
                        <div class="card border-radius-default p-0">
                            <div class="card-header bg-green p-3 text-green">
                                <h5 class="mb-0"><strong>Form Jabatan 635</strong></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-3">Nama Jabatan: ' . $this->nama_jabatan_635 . '</li>
                                <li class="list-group-item p-3">Gaji Pokok: Rp. ' . number_format($this->gaji_pokok_635) . '</li>
                                <li class="list-group-item p-3">Tunjangan: Rp. ' . number_format($this->tunjangan_635) . '</li>
                                <li class="list-group-item p-3">Lembur: Rp. ' . number_format($this->lembur_635) . '</li>
                                <li class="list-group-item p-3">Potongan: Rp. ' . number_format($this->potongan_635) . '</li>
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
                    $item->tampilkanSlip();
                }
            }
        }

        if (isset($_POST['submit'])) {
            $nama_jabatan_635 = $_POST['nama_jabatan_635'];
            $gaji_pokok_635 = $_POST['gaji_pokok_635'];
            $tunjangan_635 = $_POST['tunjangan_635'];
            $lembur_635 = $_POST['lembur_635'];
            $potongan_635 = $_POST['potongan_635'];

            $data_dummy_635 = [];
            array_push($data_dummy_635, new SlipGaji635("Supervisor", 5000000, 1000000, 500000, 250000));
            array_push($data_dummy_635, new SlipGaji635("Staff", 3000000, 800000, 300000, 100000));

            $dummys = new SlipGaji635($nama_jabatan_635, $gaji_pokok_635, $tunjangan_635, $lembur_635, $potongan_635);
            array_push($data_dummy_635, $dummys);

            foreach ($data_dummy_635 as $mydummy) {
                SlipGaji635::tambahData($mydummy);
            }
            SlipGaji635::tampilkanDataArray();
        }
        ?>

    </div>
</div>

<?php
include('footer.php');
?>