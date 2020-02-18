<?php include("headerCn.php");?>
<?php include("../modules/connect.php") ?>
<?php
        if(isset($_POST['authBtn'])){
            session_start();
           
            $userLoginA = filter_var(trim($_POST['userLoginAuth']),FILTER_SANITIZE_STRING);
            $userPswnA = filter_var(trim($_POST['userPasswordAuth']),FILTER_SANITIZE_STRING);
            $userPswnA = md5($userPswnA."gfgdjgh231");
            $mysql = new mysqli('192.168.0.103', 'root', '',  'blogtest');
            $result = $mysql->query("SELECT * FROM users WHERE `UserName` = '$userLoginA' AND `UserPassword` = '$userPswnA'");
            $user = $result->fetch_assoc();
            if(count($user) == 0){
            echo "Такой пользователь не найден";
            exit();
            }
            $_SESSION['user'] = $user;
            $_SESSION['UserName'] = $user['UserName'];
            $_SESSION['UserRole'] = $user['UserRole'];
            $_SESSION['UserPass'] = $user['UserPassword'];
            $_SESSION['User_id'] = $user['UserID'];
            $_SESSION['Userpsw2'] = $user['UserPassword2'];
            if($_SESSION['user']){
                
            }
            $mysql->close();
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/main.css">
    <title>Document</title>
</head>
<body>
</head>
<body>
    <div class="authZnAr">
        <form action="Auth.php" method="post">
            <input type="text" placeholder="Enter your name/login..." name="userLoginAuth" class="authName">
            <input type="password" name="userPasswordAuth" id="UPA" class="authPass" placeholder="Enter your password...">
            <input type="submit" value="Log in" name="authBtn" class="authBtn">
        </form>
    </div>
<script>
</script>
</body>
</html>