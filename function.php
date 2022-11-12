<?php
include 'config.php';

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $kd_anggota = htmlspecialchars($data["kode_anggota"]);
    $nama_anggota = htmlspecialchars($data["nama_anggota"]);
    $jk_anggota = htmlspecialchars($data["jk_anggota"]);
    // $jurusan_anggota = htmlspecialchars($data["jurusan_anggota"]);
    $jurusan_anggota = '3';
    $telp_anggota = htmlspecialchars($data["telp_anggota"]);
    $alamat_anggota = htmlspecialchars($data["alamat_anggota"]);

    // Upload Gambar
    $foto_anggota = upload();
    if (!$foto_anggota) {
        return false;
    }

    $query = "INSERT INTO anggota VALUES('', '$kd_anggota', '$nama_anggota', '$jk_anggota', '$jurusan_anggota', '$telp_anggota', '$alamat_anggota', '$foto_anggota')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function kd_anggota()
{
    $anggota = query("SELECT MAX(id_anggota) AS kd_anggota FROM anggota;");
    foreach ($anggota as $angt) {
        $angka = $angt['kd_anggota'];
    }
    $number = $angka + 1;
    echo date("Y") . sprintf('%05d', $number);
}

function upload()
{
    $namaFile = $_FILES['foto_anggota']['name'];
    $ukuranFile = $_FILES['foto_anggota']['size'];
    $error = $_FILES['foto_anggota']['error'];
    $tmpName = $_FILES['foto_anggota']['tmp_name'];

    if ($error === 4) {
        echo "<script>
            alert('Masukkan foto profil dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Yang anda masukkan bukan Gambar!');
        </script>";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "<script>
            alert('Ukuran Gambar yang dimasukkan terlalu besar!');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/images/anggota/' . $namaFileBaru);

    return $namaFileBaru;
}

function edit()
{
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM anggota WHERE id = $id");
    return mysqli_affected_rows($conn);
}
