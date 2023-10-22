<!--
  Nama        : Sabrina Zahra Salsabila
  NIM         : 118140177
  Kelas       : RC
  Link GitHub : https://github.com/118140177SabrinaZahraSalsabila/prak-pemweb
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ujian Tengah Semester [118140177]</title>
  <link href="118140177_Sabrina Zahra Salsabila_css.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="cv" border="1">
    <header class="atas">
      <img src="https://i.pinimg.com/564x/75/9a/21/759a214fab5e3a3e6606fa151a5531d6.jpg" alt="Sabrina Zahra Salsabila" height="200" width="200" class="gambar">
      <h1>SABRINA GAMES</h1>
    </header>
    
    <nav class="navbar">
      <li class="menu"><a href="118140177_Sabrina Zahra Salsabila_utama.html">Utama</a></li>
      <li class="menu"><a href="118140177_Sabrina Zahra Salsabila_form.html">Formulir</a></li>
      <li class="menu"><a href="118140177_Sabrina Zahra Salsabila_tabel2.php">Tabel</a></li>
    </nav>

    <div class="respon">
      <h2><a id="respontabel">Tabel Respons Pendaftaran Kerja</a></h2>
      <table border="1">
        <caption align="bottom">
          <b>Tabel Hasil Submit Formulir PT. SabrinaZS
          </caption>
          <tr>
            <th class="judultabel">No.</th>
            <th class="judultabel">Nama</th>
            <th class="judultabel">NIM</th>
            <th class="judultabel">Program Studi</th>
            <th class="judultabel">Email</th>
            <th class="judultabel">Password</th>
            <th class="judultabel">Jenis Kelamin</th>
            <th class="judultabel">Tanggal Lahir</th>
            <th class="judultabel">Alamat</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>Sabrina Zahra Salsabila</td>
            <td>118140177</td>
            <td>Teknik Informatika</td>
            <td>sabrina@gmail.com</td>
            <td>123456</td>
            <td>Perempuan</td>
            <td>2000-01-26</td>
            <td>Way Halim, Bandar Lampung</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Lili Erfa</td>
            <td>112211221</td>
            <td>Sistem Informasi</td>
            <td>lili@gmail.com</td>
            <td>baik2023</td>
            <td>Perempuan</td>
            <td>1995-05-25</td>
            <td>Jakarta Selatan</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Darminto</td>
            <td>000323141</td>
            <td>Ilmu Komputer</td>
            <td>darminto@gmail.com</td>
            <td>sukses46</td>
            <td>Laki-Laki</td>
            <td>1994-05-05</td>
            <td>Korpri, Bandar Lampung</td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Luisa Lala</td>
            <td>145161621</td>
            <td>Ilmu Komputer</td>
            <td>luisa@gmail.com</td>
            <td>9876sz</td>
            <td>Perempuan</td>
            <td>1999-02-24</td>
            <td>Sleman, Yogyakarta</td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Andina Lia</td>
            <td>178191567</td>
            <td>Sistem Informasi</td>
            <td>dinalia@gmail.com</td>
            <td>lalala123</td>
            <td>Perempuan</td>
            <td>1996-05-02</td>
            <td>Kemiling, Bandar Lampung</td>
          </tr>
          <tr>
            <td>6.</td>
            <td><?= $_GET['nama']; ?></td>
            <td><?= $_GET['nim']; ?></td>
            <td><?= $_GET['prodi']; ?></td>
            <td><?= $_GET['email']; ?></td>
            <td><?= $_GET['password']; ?></td>
            <td><?= $_GET['jeniskelamin']; ?></td>
            <td><?= $_GET['tanggallahir']; ?></td>
            <td><?= $_GET['alamat']; ?></td>
          </tr>
        </table>
      </div>
      </form>
      
      <footer class="bawah">
         <p>Copyright 2023 © 118140177 Sabrina Zahra Salsabila.</p>
      </footer>
    </div>
  </body>
</html>