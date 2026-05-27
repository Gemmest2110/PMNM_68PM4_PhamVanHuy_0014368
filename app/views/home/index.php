<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
</head>
<body>

    <h1>Day la trang chu</h1>

    <p>Xin chao: <?php echo $_SESSION['username']; ?></p>

    <a href="<?php echo BASE_URL; ?>/sinhvien/index">Danh sach sinh vien</a>
    <br>

    <a href="<?php echo BASE_URL; ?>/sinhvien/create">Them moi sinh vien</a>
    <br>

    <a href="<?php echo BASE_URL; ?>/auth/logout">Dang xuat</a>

</body>
</html>