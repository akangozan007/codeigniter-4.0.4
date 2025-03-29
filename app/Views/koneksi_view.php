<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>List Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['NIM']; ?></td>
            <td><?= $mhs['Nama_Mhs']; ?></td>
            <td><?= $mhs['Password']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
