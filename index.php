<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Siswa Baru | SMKN 2 Trenggalek</title>
</head>
<body>
<header class="text-center">
<h3>Pendaftaran Siswa Baru </h3>
<h3>Tahun Ajaran 2021/2022</h3>
<h1>SMKN 2 Trenggalek<h1>
</header>

<h4>Menu<h4>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">Pendaftar</a></li>
</ul>
</nav>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

</body>
</html>
