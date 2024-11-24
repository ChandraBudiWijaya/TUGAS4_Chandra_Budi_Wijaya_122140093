<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran</h2>
        <form action="process.php" method="POST" enctype="multipart/form-data" id="registrationForm">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required minlength="3" maxlength="50">
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="age">Usia:</label>
            <input type="number" name="age" id="age" required min="10" max="99">
            
            <label for="gender">Jenis Kelamin:</label>
            <select name="gender" id="gender" required>
                <option value="">Pilih...</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            
            <label for="file">Unggah File (Teks):</label>
            <input type="file" name="file" id="file" required accept=".txt">
            
            <button type="submit">Kirim</button>
        </form>
    </div>

    <footer>
        &copy; Chandra 122140093 Pemrograman Web RA
    </footer>
    
</body>
</html>
