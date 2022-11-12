<?php include 'function.php'; ?>
<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'daftar_anggota.php';
            </script>";
    } else {
        echo "<script>
                alert('Data yang ditambahkan gagal!');
                document.location.href = 'daftar_anggota.php';
            </script>";
    }
}


?>
<?php include 'header.php'; ?>


<!-- Container fluid -->
<div class="container-fluid p-4">
    <div class="row ms-2 me-2 mt-5">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card header -->
                <div class="card-header">
                    <h4 class="mb-0">Pendaftaran Anggota</h4>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Form -->
                    <form class="row" action="" method="POST" enctype="multipart/form-data">
                        <!-- Name -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="nama_anggota" class="form-label">Nama</label>
                            <input class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Masukkan Nama" type="text" required />
                        </div>
                        <!-- Address -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="alamat_anggota" class="form-label">Alamat</label>
                            <input class="form-control" id="alamat_anggota" name="alamat_anggota" placeholder="Masukkan Alamat" type="text" required />
                        </div>
                        <!-- Mail driver -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="telp_anggota" class="form-label">Nomor Telepon / Whatsapp</label>
                            <input class="form-control" id="telp_anggota" name="telp_anggota" placeholder="Masukkan Nomor Telepon" type="text" required />
                        </div>
                        <!-- Username -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="tgllhr" class="form-label">Tanggal Lahir</label>
                            <input class="form-control flatpickr" id="tgllhr" name="tgllhr" type="text" placeholder="Masukkan Tanggal Lahir" />
                        </div>
                        <!-- Host -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="jk_anggota" class="form-label">Jenis Kelamin</label>
                            <select class="selectpicker" id="jk_anggota" name="jk_anggota" data-width="100%">
                                <option selected>-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <!-- Password -->
                        <div class="mb-3 col-12 col-md-12 col-lg-6">
                            <label for="kode_anggota" class="form-label">Kode Anggota</label>
                            <input class="form-control" id="kode_anggota" name="kode_anggota" type="text" value="<?= kd_anggota() ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="foto_anggota">Foto Profil</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="foto_anggota" name="foto_anggota">
                                <label class="input-group-text sr-only" for="foto_anggota"></label>
                            </div>

                        </div>
                        <!-- Button -->
                        <div class="col-12 col-md-12 col-lg-6">
                            <button class="btn btn-primary" type="submit" name="submit">
                                Simpan
                            </button>
                            <a href="daftar_anggota.php" class="btn btn-outline-white">
                                Batal
                            </a>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-7">
                            <table width="100%" cellpadding="2" cellspacing="0">
                                <tr>
                                    <td>No Urut Pendaftaran</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Daftar</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Masa Aktif</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Anggota</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Identitas</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Anggota</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ket / Kelas / Jurusan</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-5">
                            <table width="100%" cellpadding="2" cellspacing="0">
                                <tr>
                                    <td>Alamat Lain</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kota / Kab</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Suami / Istri / Orang Tua</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <hr>
                                <tr>
                                    <td>User ID</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <input type="password" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Barcode</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-outline-primary btn-sm" type="button">Default Barcode</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="d-grid gap-2">
                                            <input type="textarea" class="form-control form-control-sm" name="">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>