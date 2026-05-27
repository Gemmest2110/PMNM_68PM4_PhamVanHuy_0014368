<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body>

    <h1>Dang nhap</h1>

    <?php if (isset($_GET['error'])) { ?>
        <p style="color: red;">Sai username hoac password</p>
    <?php } ?>

    <form action="<?php echo BASE_URL; ?>/auth/login" method="POST">
        <label>Username:</label>
        <br>
        <input type="text" name="username" placeholder="Nhap username">
        <br><br>

        <label>Password:</label>
        <br>
        <input type="password" name="password" placeholder="Nhap password">
        <br><br>

        <button type="submit">Dang nhap</button>
    </form>

</body>
</html>