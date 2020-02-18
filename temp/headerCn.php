<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
    <div class="mainWrapp">
        <div class="logoAr">
            <img src="../src/Shapes@2x.png" alt="log" class=" logoImgCn">
            <a href="main.php" class="logo">Blog Website</a>
        </div>
        <div class="topNavCn">
            <a href="#" class="cnNavC">Contacts</a>
            <a href="#" class="cnNavAB">About</a>
            <?php if(!$_SESSION['user']): ?>
            <a href="../temp/registr.php" class="cnNav">Registration</a>
            <a href="../temp/Auth.php" class="cnNavA">Authorization</a>
            <?php else: ?>
            <a href="../Admin/AdminPanel.php" class="admPnl">Admin Panel</a>
            <a href="main.php" name="ext" formaction="main.php" class="extPnl">
                Exit</a>
            
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
