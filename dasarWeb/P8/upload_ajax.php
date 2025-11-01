<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $max_size = 3 * 1024 * 1024; // 3 MB

    // hitung jumlah file yang diunggah
    $total_files = count($_FILES['files']['name']);

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];

        // ambil ekstensi file
        $filename_parts = explode('.', $file_name);
        $file_ext = strtolower(end($filename_parts));

        // validasi ekstensi dan ukuran file
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "File $file_name memiliki ekstensi tidak valid.";
            continue;
        }

        if ($file_size > $max_size) {
            $errors[] = "File $file_name melebihi ukuran maksimum 3MB.";
            continue;
        }

        // pastikan folder tujuan ada
        if (!file_exists("uploads/")) {
            mkdir("uploads/", 0777, true);
        }

        // pindahkan file ke folder uploads
        if (move_uploaded_file($file_tmp, "uploads/" . $file_name)) {
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah file $file_name.";
        }
    }

    // tampilkan pesan error jika ada
    if (!empty($errors)) {
        echo "<br>Beberapa file gagal diunggah:<br>";
        echo implode("<br>", $errors);
    }
}
?>
