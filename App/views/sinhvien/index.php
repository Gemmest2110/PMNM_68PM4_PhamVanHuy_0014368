<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>

    <h1>Day la danh sach sinh vien</h1>

    <p>Ban dang dang nhap voi tai khoan: <?php echo $_SESSION['username']; ?></p>

    <a href="<?php echo BASE_URL; ?>/sinhvien/create">Them moi sinh vien</a>
    <br>

    <a href="<?php echo BASE_URL; ?>/home/index">Ve trang chu</a>
    <br>

    <a href="<?php echo BASE_URL; ?>/auth/logout">Dang xuat</a>

</body>
</html>