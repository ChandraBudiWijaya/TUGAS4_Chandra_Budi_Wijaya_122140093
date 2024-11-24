<?php
session_start();

if (!isset($_SESSION['formData'])) {
    die("Tidak ada data untuk ditampilkan.");
}

$data = $_SESSION['formData'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Pendaftaran</h2>
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>Field</th>
                    <th>Data</th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?= htmlspecialchars($data['name']) ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= htmlspecialchars($data['email']) ?></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><?= htmlspecialchars($data['age']) ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= htmlspecialchars($data['gender']) ?></td>
                </tr>
                <tr>
                    <td>Browser/OS</td>
                    <td><?= htmlspecialchars($data['browserInfo']) ?></td>
                </tr>
            </table>
        </div>

        <h3>Isi File:</h3>
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>Baris</th>
                    <th>Isi</th>
                </tr>
                <?php foreach ($data['fileLines'] as $index => $line): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($line) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="button-container">
            <form action="form.php" method="get">
                <button type="submit">Back to Form</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; Chandra 122140093 Pemrograman Web RA
    </footer>
</body>
</html>
