<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Login Admin</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if (isset($error)) { ?>
        <div class="message error"><?php echo $error; ?></div>
    <?php } ?>
</body>
</html>
