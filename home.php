<?php
session_start();
?>
<html>
    <head>
        <title>login page </title>
</head>
<body>
    <h1>welcome   <?php echo $_SESSION['Email']; ?></h1>
    </form action="login.php">
            <form action="index.html" methd="post">
            <center>
            <input type="submit" name="" value="Logout">
        </center>
    </form>
</body>
</html>