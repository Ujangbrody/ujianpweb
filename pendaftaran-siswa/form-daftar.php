<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style\daftar.css">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
            </p>
            <p>
                <a class="back-button" href="index.php">Kembali</a>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>