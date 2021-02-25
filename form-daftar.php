<!DOCTYPE html>
<html>
<head>
<title>FOrmulir Pendaftaran Siswa Baru | SMKN 2 Trenggalek</title>
</head>
<body>
<header>
<h3>Formulir Pendaftaran Siswa Baru</h3>
<header>

<form action="proses-pendaftaran.php" method="POST">

<fieldset>
<p>
<label for="nama">Nama :</label>
<input type="text" name="nama" placeholder="nama lengkap"/>
</p>

<p>
<label for="alamat">Alamat : </label>
<textarea name="alamat"></textarea>
</P>

<p>
<label for="jenis_kelamin">Jenis Kelamin : </label>
<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</tabel>
<label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</tabel>
</p>

<p>
<label for="agama">Agama : </label>
<select name="agama">
<option>Islam</option>
<option>Kristem</option>
<option>Hindu</option>
<option>Budha</option>
<option>Khonghucu</option>
</select>
</p>

<p>
<label for="sekolah_asal">Sekolah Asal : </label>
<input type="text" name="sekolah_asal" placeholder="nama sekolah"/>
</p>

<p>
<input type="submit" value="Daftar" name="daftar"/>
</p>
</fieldset>
</body>
</html>
