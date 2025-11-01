<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multi Upload Gambar</title>
</head>
<body>
    <h2>Upload Beberapa Gambar Sekaligus</h2>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <!-- Multiple file input khusus gambar -->
        <input type="file" name="files[]" id="files" multiple accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>
