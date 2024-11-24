<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input form
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = intval($_POST['age'] ?? 0);
    $gender = $_POST['gender'] ?? '';

    if (empty($name) || empty($email) || empty($age) || empty($gender)) {
        die("Semua field wajib diisi!");
    }

    // Validasi file upload
    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        die("File wajib diunggah dan tidak boleh kosong!");
    }

    $file = $_FILES['file'];

    // Validasi ukuran dan tipe file
    if ($file['size'] > 1024 * 1024) { // Maks 1MB
        die("File terlalu besar! Maksimal ukuran 1MB.");
    }

    if (pathinfo($file['name'], PATHINFO_EXTENSION) !== 'txt') {
        die("Hanya file teks (.txt) yang diizinkan.");
    }

    // Baca isi file
    $fileContent = file_get_contents($file['tmp_name']);
    $fileLines = explode(PHP_EOL, $fileContent);

    // Informasi browser dan OS
    $browserInfo = $_SERVER['HTTP_USER_AGENT'];

    // Simpan data ke sesi untuk ditampilkan di result.php
    $_SESSION['formData'] = [
        'name' => $name,
        'email' => $email,
        'age' => $age,
        'gender' => $gender,
        'fileLines' => $fileLines,
        'browserInfo' => $browserInfo
    ];

    // Redirect ke halaman hasil
    header("Location: result.php");
    exit();
}
