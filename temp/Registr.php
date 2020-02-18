<?php include("headerCn.php");?>
<?php include("../modules/connect.php") ?>
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
    <div class="regWrap">
        <form action="Registr.php" method="post">
            <input type="text" name="userNameReg" id="UNR" required class="UNR" placeholder="Enter your login or name...">
            <input type="email" name="userEmailReg" id="UER" required class="UER" placeholder="Enter your mail...">
            <input type="password" name="userPasswordReg" id="UPR" required class="UPR" placeholder="Enter your password...">
            <input type="password" name="userPasswordReg2" id="UPR2" required class="UPR2" placeholder="Repeat your password...">
            <input type="submit" value="Registration" name="regBtn" required class="regBtn">
        </form>
    </div>
<?php
if(isset($_POST['regBtn'])){
    require("../modules/connect.php");

        $userLogin = filter_var(trim($_POST['userNameReg']),FILTER_SANITIZE_STRING);
        $userMail = filter_var(trim($_POST['userEmailReg']),FILTER_SANITIZE_STRING);
        $userPassword = filter_var(trim($_POST['userPasswordReg']),FILTER_SANITIZE_STRING);
        $userPasswordRepit = filter_var(trim($_POST['userPasswordReg2']),FILTER_SANITIZE_STRING);

        if(strlen($userLogin) < 5 || mb_strlen($userLogin) > 15){
            echo "Invalid login length";
            exit();
        }else if(strlen($userPassword) < 5 || mb_strlen($userPassword) > 15){
            echo "Invalid password length";
            exit();
        }else if(strlen($userPasswordRepit) < 5 || mb_strlen($userPasswordRepit) > 15){
            echo "Invalid password length";
            exit();
        }
    

        $userPassword = md5($userPassword."gfgdjgh231");
        $userPasswordRepit = md5($userPasswordRepit."gfgdjgh231");

        $sql = "INSERT INTO users (UserName, UserEmail, UserPassword, UserPassword2)
        VALUES ('$userLogin', '$userMail', '$userPassword', '$userPasswordRepit')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    }
?>
</body>
</html>