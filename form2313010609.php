<?php
include('navbar.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
include('header.php');
?>

<!-- <style>
  /*/Reset & base/*/
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Verdana, Geneva, Tahoma, sans-serif;
  }

  body {
    background: linier-gradient(135deg, #6B73FF 0%, #000DFF 100%);
    color: #222;
    min-height: 100hv;
    align-items: center;
    justify-content: center;
    padding: 10px;
  }

  .contrainer {
    background: #fff;
    border-radius: 12px;
    padding: 15px 20px 20px 20px;
    max-width: 280px;
    width: 100%;
    box-shadow: 0 12px 18px rgb(0, 0, 0, 0.15);
  }

  h3 {
    text-align: center;
    margin-bottom: 15px;
    color: #0033cc;
    font-weight: bold;
    font-size: 20px;
  }

  label {
    display: block;
    margin-bottom: 4px;
    font-weight: 600;
    color: #222;
    font-size: 14px;
  }

  input[type="text"],
  input[type="date"],
  input[type="time"],
  select {
    width: 100%;
    /* smaller width fixed */
    padding: 6px 8px;
    margin-bottom: 18px;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 13px;
    transition: border-color 0.3s ease;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  input[type="text"]:focus,
  input[type="date"]:focus,
  input[type="time"]:focus,
  select:focus {
    border-color: #0033cc;
    outline: none;
  }

  input[type="submit"] {
    background-color: #0033cc;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0, 51, 204, 0.4);
    transition: background-color 0.3s ease;
  }

  input [type="submit"]:hover {
    background-color: #001a80;
  }

  /* Display output */
  .output {
    margin-top: 15px;
    background-color: #e6f0ff;
    border-radius: 12px;
    padding: 15px 15px;
    color: #000DFF;
    box-shadow: inset 0 0 8px #99bbff;
    word-wrap: break-word;
    font-size: 13px;
  }

  .output h4 {
    margin-bottom: 8px;
    font-weight: 700;
    font-size: 16px;
  }

  .eror-message {
    margin-top: 15px;
    padding: 10px 12px;
    background: #ffcccc;
    border: 1.5px solid #ff9999;
    color: #b30000;
    border-radius: 10px;
    font-weight: 600;
    font-size: 13px;
    text-align: center;
  }

  /* Responsive for mobile */
  @media (max-width: 380px) {
    body {
      padding: 10px;
    }

    .contrainer {
      padding: 15px 20px 25px 20px;
      max-width: 100%;
    }
  }
</style>  -->
<div class="container">
  <div class="row py-3 px-3 justify-content-center">
    <div class="col-md-6 mb-2">
      <div class="card bg-green border-radius-default p-4">
          <div class="row justify-content-around">
              <div class="col-md-4">
                  <img src="foto_kita/<?= $_SESSION['foto']; ?>" width="120" alt="Foto <?= $_SESSION['nama']; ?>" class="border-radius-default p-1">
              </div>
              <div class="col-md-8">
                  <h4 class=" text-green mb-3"><?= $_SESSION['nama']; ?></h4>
                  <marquee direction="right" scrollamount="10">
                      <div class="row col-lg-12">
                          <div class="col-md-4">
                              <h6 class="text-center text-green"><?= $_SESSION['nim']; ?></h6>
                          </div>
                          <div class="col-md-4">
                              <h6 class="text-center text-green">4.I Class</h6>
                          </div>
                          <div class="col-md-4">
                              <h6 class="text-center text-green">Pemrograman Web</h6>
                          </div>
                      </div>
                  </marquee>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row py-3 px-3 justify-content-center">
    <div class="col-md-6 mb-5">
      <div class="card border-radius-default p-0">
        <div class="card-header bg-green p-3 text-green">
          <h5 class="mb-0"><strong>Input Data Absensi</strong></h5>
        </div>
        <form action="absensi.php" method="POST">
          <div class="row p-4">
            <div class="col-md-12 mb-3">
              <label for="609_nip" class="form-label">NIP Pegawai</label>
              <input type="text" class="form-control" name="609_nip" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_nama" class="form-label">Nama Pegawai</label>
              <input type="text" class="form-control" name="609_nama" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_tanggal" class="form-label">Tanggal Absen</label>
              <input type="date" class="form-control" name="609_tanggal" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_jam_masuk" class="form-label">Jam Masuk</label>
              <input type="time" class="form-control" name="609_jam_masuk" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_jam_keluar" class="form-label">Jam Keluar</label>
              <input type="time" class="form-control" name="609_jam_keluar" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_status" class="form-label">Status Kehadiran</label>
              <select class="form-select" name="609_status">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
                <option value="Alpha">Alpha</option>
              </select>
            </div>

            <div class="col-md-12 mb-3">
              <label for="609_departemen" class="form-label">Departemen</label>
              <input type="text" class="form-control" name="609_departemen" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_position" class="form-label">Jabatan</label>
              <input type="text" class="form-control" name="609_position" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_phone" class="form-label">No. Telepon</label>
              <input type="text" class="form-control" name="609_phone" required autofocus>
            </div>
            <div class="col-md-12 mb-3">
              <label for="609_email" class="form-label">Email</label>
              <input type="text" class="form-control" name="609_email" required autofocus>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success border-radius-default" name="submit">Kirim Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      class Absensi
      {
        public $nip, $nama, $tanggal, $jamMasuk, $jamKeluar, $status, $departemen, $position, $phone, $email;
        protected $dataDummy = [];
        public function __construct($nip, $nama, $tanggal, $jam_masuk, $jam_keluar, $status, $departemen, $position, $phone, $email)
        {
          $this->nip = $nip;
          $this->nama = $nama;
          $this->tanggal = $tanggal;
          $this->jamMasuk = $jam_masuk;
          $this->jamKeluar = $jam_keluar;
          $this->status = $status;
          $this->departemen = $departemen;
          $this->position = $position;
          $this->phone = $phone;
          $this->email = $email;
        }
        public static $dataAbsensi = [];

        public function simpankeArray()
        {
          $data = [
            "nip" => $this->nip,
            "nama" => $this->nama,
            "tanggal" => $this->tanggal,
            "jam_masuk" => $this->jamMasuk,
            "jam_keluar" => $this->jamKeluar,
            "status" => $this->status,
            "departemen" => $this->departemen,
            "position" => $this->position,
            "phone" => $this->phone,
            "email" => $this->email

          ];

          array_push(self::$dataAbsensi, $data);
        }

        protected function tambahDataDummy()
        {
          $dummy = [
            "nip" => "112233",
            "nama" => "Della",
            "tanggal" => date("Y-m-d"),
            "jam_masuk" => "08:00",
            "jam_keluar" => "17:00",
            "status" => "Hadir",
            "departemen" => "IT",
            "position" => "Manager",
            "phone" => "081682013",
            "email" => "@putdell.com"

          ];
          array_push($this->dataDummy, $dummy);
        }

        public function aksesTambahDataDummy()
        {
          $this->tambahDataDummy();
          echo '<div class="col-md-6">
                          <div class="card border-radius-default p-0">
                              <div class="card-header bg-green p-3 text-green">
                                  <h5 class="mb-0"><strong>Data Dummy Berhasil Ditambahkan</strong></h5>
                              </div>
                              <ul class="list-group list-group-flush">';
          foreach ($this->dataDummy as $data) {
            foreach ($data as $key => $value) {
              echo '<li class="list-group-item border-radius-default p-3"><strong>' . ucwords(str_replace("_", " ", $key)) . ':</strong> ' . htmlspecialchars($value) . '</li>';
            }
          }
          echo '      </ul>
                          </div>
                      </div>';
        }

        public function tampil()
        {
          echo '
                <div class="col-md-6 mb-5">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Data Absensi - ' . htmlspecialchars($this->nama) . ' </strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>Nip:</strong> ' . htmlspecialchars($this->nip) . '</li>
                            <li class="list-group-item p-3"><strong>Nama Karyawan:</strong> ' . htmlspecialchars($this->nama) . '</li>
                            <li class="list-group-item p-3"><strong>Tanggal:</strong> ' . htmlspecialchars($this->tanggal) . '</li>
                            <li class="list-group-item p-3"><strong>Jam Masuk:</strong> ' . htmlspecialchars($this->jamMasuk) . '</li>
                            <li class="list-group-item p-3"><strong>Jam Keluar:</strong> ' . htmlspecialchars($this->jamKeluar) . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Status Kehadiran:</strong> ' . htmlspecialchars($this->status) . '</li>
                            <li class="list-group-item p-3"><strong>Departemen:</strong> ' . htmlspecialchars($this->departemen) . '</li>
                            <li class="list-group-item p-3"><strong>Jabatan:</strong> ' . htmlspecialchars($this->position) . '</li>
                            <li class="list-group-item p-3"><strong>No. Telepon:</strong> ' . htmlspecialchars($this->phone) . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Email:</strong> ' . htmlspecialchars($this->email) . '</li>
                        </ul>
                    </div>
                </div>';
        }
      }

      //kelas turunan Absensi dengan tambahan properti
      class Absensi609 extends Absensi
      {
        public $prop609_1, $prop609_2, $prop609_3, $prop609_4, $prop609_5;
        public function __construct($nip, $nama, $tanggal, $jam_masuk, $jam_keluar, $status, $departemen, $position, $phone, $email, $p1, $p2, $p3, $p4, $p5)
        {
          parent::__construct($nip, $nama, $tanggal, $jam_masuk, $jam_keluar, $status, $departemen, $position, $phone, $email);
          $this->prop609_1 = $p1;
          $this->prop609_2 = $p2;
          $this->prop609_3 = $p3;
          $this->prop609_4 = $p4;
          $this->prop609_5 = $p5;
        }
 
        public function tampilExtended()
        {
          $this->tampil();
          echo '<div class="col-md-6 mb-5">
                          <div class="card border-radius-default p-0">
                              <div class="card-header bg-green p-3 text-green">
                                  <h5 class="mb-0"><strong>Properti 609 Tambahan</strong></h5>
                              </div>
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item p-3"><strong>Prop 609-1:</strong> ' . htmlspecialchars($this->prop609_1) . '</li>
                                  <li class="list-group-item p-3"><strong>Prop 609-2:</strong> ' . htmlspecialchars($this->prop609_2) . '</li>
                                  <li class="list-group-item p-3"><strong>Prop 609-3:</strong> ' . htmlspecialchars($this->prop609_3) . '</li>
                                  <li class="list-group-item p-3"><strong>Prop 609-4:</strong> ' . htmlspecialchars($this->prop609_4) . '</li>
                                  <li class="list-group-item border-radius-default p-3"><strong>Prop 609-5:</strong> ' . htmlspecialchars($this->prop609_5) . '</li>
                              </ul>
                          </div>
                      </div>';
        }
      }

      try {
        $extraProps = ["Extra1", "Extra2", "Extra3", "Extra4", "Extra5"];
        $absensi = new Absensi609(
          $nip = $_POST["609_nip"],
          $nama = $_POST["609_nama"],
          $tanggal_absen = $_POST["609_tanggal"],
          $jamMasuk = $_POST["609_jam_masuk"],
          $jamKeluar = $_POST["609_jam_keluar"],
          $status_absen = $_POST["609_status"],
          $departemen = $_POST["609_departemen"],
          $position = $_POST["609_position"],
          $phone = $_POST["609_phone"],
          $email = $_POST["609_email"],
          ...$extraProps
        );

        $object609 = new Absensi609("123", "Test", "2025-01-01", "08:00", "17:00", "Hadir", "IT", "Admin", "081212", "test@example.com", "A", "B", "C", "D", "E");
        $object609->aksesTambahDataDummy();
        $absensi->simpankeArray();
        $absensi->tampilExtended();
        $absensi->aksesTambahDataDummy();
        echo '
        <div class="col-md-6 mb-5">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Data Absensi Tersimpan</strong></h5>
                </div>
            <ul class="list-group list-group-flush">';
        foreach (Absensi::$dataAbsensi as $index => $data) {
          echo '<li class="list-group-item p-3">Data ke-' . ($index + 1);
          foreach ($data as $key => $value) {
            echo '<li class="list-group-item border-radius-default p-3" ><strong>' . ucwords(str_replace("_", " ", $key)) . ':</strong> ' . htmlspecialchars($value) . '</li>';
          }
        }
        echo '      </ul>
                        </div>
                    </div>';
      } catch (Exception $e) {
        echo '<div class="eror-message">' . htmlspecialchars($e->getMessage()) . '</div>';
      }
    }
    ?>
    <?php
    include('footer.php');
    ?>