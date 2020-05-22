<!Doctype html>
<html>
<head>
    <title>Upload</title>
</head>
<body>
    <form action="actionFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myImages[]" multiple />
        <input type="submit" name="submit" value="Upload Images">
    </form>
</body>
</html>