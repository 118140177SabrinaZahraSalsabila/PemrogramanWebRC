<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" type="text/css" media="screen" href="index.css">
</head>

<body>
    <form>
        <table>
            <thead>
                <tr>
                    <th class="tablehead" colspan="2">Data Pendaftar</th>
                </tr>
            </thead>
            <tbody class="tablebody">
                <tr>
                    <td class="kolom1">Nama</td>
                    <td><?= $_GET['nama']; ?></td>
                </tr>
                <tr>
                    <td class="kolom1">NIM</td>
                    <td><?= $_GET['nim']; ?></td>
                </tr>
                <tr>
                    <td class="kolom1">Jenis Kelamin</td>
                    <td><?= $_GET['jeniskelamin']; ?></td>
                </tr>
                <tr>
                    <td class="kolom1">Bidang Keahlian</td>
                    <td><?= $_GET['keahlian']; ?></td>
                </tr>
                <tr>
                    <td class="kolom1">Program Studi</td>
                    <td><?= $_GET['prodi']; ?></td>
                </tr>
                <tr>
                    <td class="kolom1">Biografi Singkat</td>
                    <td><?= $_GET['bio']; ?></td>  
                </tr>
                <tr>
                    <td class="kolom1">File</td>
                    <td><?= $_GET['files']; ?></td>  
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="buttons">
                            <button><a href="118140177_form.html">Kembali</a></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>