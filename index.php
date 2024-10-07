<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tabel Data Mahasiswa</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Kota Asal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data mahasiswa dalam array
                $mahasiswas = [
                    ['nim' => '201123456', 'nama' => 'John Doe', 'jenis_kelamin' => 'Laki-Laki', 'kelas' => '3WD1', 'kota_asal' => 'Jakarta'],
                    ['nim' => '201123457', 'nama' => 'Jane Doe', 'jenis_kelamin' => 'Perempuan', 'kelas' => '3WD1', 'kota_asal' => 'Bandung'],
                    ['nim' => '201123458', 'nama' => 'Jim Doe', 'jenis_kelamin' => 'Laki-Laki', 'kelas' => '3WD1', 'kota_asal' => 'Surabaya'],
                    // Tambahkan data lainnya disini
                ];

                // Tampilkan data mahasiswa dalam tabel
                foreach ($mahasiswas as $mahasiswa) {
                    echo '<tr>';
                    echo '<td>' . $mahasiswa['nim'] . '</td>';
                    echo '<td>' . $mahasiswa['nama'] . '</td>';
                    echo '<td>' . $mahasiswa['jenis_kelamin'] . '</td>';
                    echo '<td>' . $mahasiswa['kelas'] . '</td>';
                    echo '<td>' . $mahasiswa['kota_asal'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

