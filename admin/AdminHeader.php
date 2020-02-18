<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="headerArea" id="headerArea">
    <div class="headerLogo">
            <img src="../src/Shapes@2x.png" alt="logo" class="logoImg">
           <a href="AdminPanel.php" class="textLogo">Website Admin</a>
        </div>
            <button class="toogleMenu" onclick="toogleBar()">...</button>
            <div class="lastUsers">
                <img src="../src/img_avatar.png" alt="avatar" class="avatar">
                <img src="../src/img_avatar2.png" alt="avatar" class="avatar">
                <img src="../src/avatar2.png" alt="avatar" class="avatar">
            </div>
            <div class="btnShare">
                <a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
                <a href="https://linkedin.com/" class="fa fa-linkedin" target="_blank"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram" target="_blank"></a>
            </div>
            <div class="topNav" id="topNav">
                    <a href="AdminPostControl.php" class="tablinks" >Posts</a>
                    <a class="tablinks" >Users</a>
                    <a href="#" class="tablinks" >Activity</a>
                    <a class="tablinks" >Calendar</a>
                    <a class="tablinks" >Files</a>
                    <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
                        <i class="fa fa-bars"></i>
                    </a>
            </div>




    </div>
<script lang="js">
    function toogleBar() {
        var x = document.getElementById("AdminSide");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script lang="js">
    function mobileMenu() {
            var x = document.getElementById("topNav");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
</script>
</body>
</html>