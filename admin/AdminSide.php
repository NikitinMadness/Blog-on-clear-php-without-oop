
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Document</title>
</head>
<body>
    <aside class="adminSideArea" id="AdminSide">
        <div class="sideLogo">
            <img src="../src/Logo@3x.svg" alt="logo" class="logoImgAdmin">
            <p class="adminSideLogo">Admin Panel</p>
            <p class="serch"><i class="fa fa-search"></i></button></p>
        </div>
        <div class="userPanelArea">
            <p class="userAvatarImg"><img src="../src/img_avatar.png" alt="UA" class="userAvatarImg"></p>
            <p class="userNameAdminPanel"><?=$_SESSION['UserName']; ?></p>
            <p class="userSurnameAdminPanel"><?=$_SESSION['UserRole']; ?></p>
            <a href="UserWindow.php" class="iconSettingsAdminPanel"><i class="fa fa-cog"></i></a>
        </div>
        <div class="postsCounter">
            <p class="countPost">You have posts: </p>
        </div>
        <div class="postsSettings">
            <p class="postMenu">MENU</p>
            <a href="AdminPostCreate.php" class="createPost">Create post <i style='font-size:15px; margin-left: 5px;' class='far'>&#xf044;</i></a>
            <a href="#" class="ntfc">Notifications <i style='font-size:15px; margin-left: 5px;' class='far'>&#xf0f3;</i></a>
        </div>
    </aside>
</body>
</html>
