<?php include 'function.php';

$nourut = query("SELECT MAX(id_anggota) AS kd_anggota FROM anggota;");
foreach ($nourut as $angt) {
    $nourut = $angt['kd_anggota'];
    $nourut = $nourut + 1;
}

$anggota = query("SELECT * FROM anggota INNER JOIN kelas ON anggota.id_kls = kelas.id_kelas");


include 'header.php';

?>


<div class="container-fluid p-4">
    <div class="col-md-12 col-12 mb-5">
        <div class="card bg-primary text-white mb-5">
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <table width="100%" cellpadding="2" cellspacing="0">
                                    <tr>
                                        <td>Tahun Pendaftaran</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </td>
                                        <td>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-outline-light btn-sm" type="button">Cetak Kartu Anggota</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anggota</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </td>
                                        <td>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-outline-light btn-sm" type="button">Cetak Kartu Barcode</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No Identitas</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </td>
                                        <td>
                                            <div class="d-grid gap-2">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-outline-light btn-sm">Pilih Semua</button>
                                                    <button type="button" class="btn btn-outline-light btn-sm">Batalkan Pilihan</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Angkatan</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-1">
                        <span class="bg-white d-block text-center p-2 text-danger form-control">*Update kelas pada siswa bisa dilakukan per <b>SEMESTER </b>!</span>
                        <table class="mt-1" width="100%" cellpadding="2" cellspacing="0">
                            <tr>
                                <td>Tahun Ajaran</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm">
                                </td>
                                <td>Semester</td>
                                <td>:</td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun Kelas</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm">
                                </td>
                                <td colspan="3">
                                    <div class="d-grid gap-2">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm">
                                </td>
                                <td colspan="3">
                                    <div class="d-grid gap-2">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-light btn-sm" type="button">Update Kelas</button>
                                    </div>
                                </td>
                                <td colspan="3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-light btn-sm" type="button">Batalkan kelas</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table -->
        <div class="col-md-12 col-12 mb-5">
            <div class="card">
                <!-- card header  -->
                <div class="card-header border-bottom-0">
                    <!-- Start Modal Tambah Anggota -->
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel">Pendaftaran Anggota</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <table width="100%" cellpadding="2" cellspacing="0">
                                                <tr>
                                                    <td>No Urut Pendaftaran</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <input type="text" class="form-control form-control-sm" name="" value="<?= $nourut; ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Daftar</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <input type="text" class="form-control form-control-sm" name="" value="<?= date("d/m/Y") ?>">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Aktif</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <input type="date" class="form-control form-control-sm" name="">
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
                                                        <select class="form-select form-select-sm" id="jk_anggota" name="jk_anggota" data-width="100%">
                                                            <option selected>-- Pilih Jenis Kelamin --</option>
                                                            <option value="L">Laki - Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No Identitas</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <input type="text" class="form-control form-control-sm" name="" value="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>:</td>
                                                    <td>
                                                        <select class="form-select form-select-sm" id="jk_anggota" name="jk_anggota" data-width="100%">
                                                            <option selected>-- Pilih Status Anggota --</option>
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Tidak Aktif</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No Anggota</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="d-grid gap-2">
                                                            <input type="text" class="form-control form-control-sm" name="" value="<?= kd_anggota(); ?>">
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
                                                <tr>
                                                    <td>Foto Profil</td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="file" class="form-control form-control-sm" id="foto_anggota" name="foto_anggota">
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
                                                    <td colspan="3">
                                                        <div class="d-grid gap-2">
                                                            <input type="textarea" class="form-control form-control-sm" name="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <div class="d-grid gap-2">
                                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                                <button type="button" class="btn btn-outline-primary">Edit</button>
                                                                <button type="button" class="btn btn-outline-primary">Barcode</button>
                                                                <button type="button" class="btn btn-outline-primary">Simpan Data</button>
                                                                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Keluar</button>
                                                            </div>
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
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">+ Tambah Anggota</a>
                    <!-- End Modal Tambah Anggota -->

                </div>
                <!-- table  -->
                <div class="card-body pt-2">
                    <table id="dataTableBasic" class="table" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>No Anggota</th>
                                <th>Nama Anggota</th>
                                <th>No Identitas</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Tgl Daftar</th>
                                <th>Masa Aktif</th>
                                <th>Status</th>
                                <th class="border-0 font-size-inherit">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label for="checkAll" class="form-check-label"></label>
                                    </div>
                                </th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($anggota as $row) : ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?= $row["no_anggota"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["nama_anggota"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["no_identitas"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["alamat_anggota"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["kota"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["tgl_daftar"]; ?>
                                    </td>
                                    <td class="text-muted align-middle border-top-0">
                                        <?= $row["tgl_berakhir"]; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row["status"] === '1') {
                                            echo "<span class='badge-dot bg-success'></span>";
                                        } else {
                                            echo "<span class='badge-dot bg-danger'></span>";
                                        }
                                        ?>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck1">
                                            <label for="categoryCheck1" class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td><?= $row["nama_kelas"]; ?></td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include 'footer.php'; ?>