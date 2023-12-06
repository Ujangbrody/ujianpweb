<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style\list-daftar.css">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h1>Siswa yang Sudah Mendaftar</h1>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
        <a href="index.php" class="btn-back">[<] Kembali</a>
    </nav>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn-edit'>Edit</a>";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn-hapus'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>

</html>