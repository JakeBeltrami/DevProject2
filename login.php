<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php include "login_process.php" ?>
    <form action="login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" /><br />

        <label for="password">Password: </label>
        <input type="password" id="password" name="password" /><br />

        <input type="submit" value="Login" />
    </form>
</body>
</html>