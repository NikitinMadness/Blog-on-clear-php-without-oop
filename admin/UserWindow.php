<?php session_start(); ?>
<?php ?>
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
    <?php include("/AdminSide.php");?>
    <?php include("/AdminHeader.php");?>
    <div class="AdminContentArea">
        <div class="adminCntZn">
        <?php include("../modules/connect.php"); ?>
            <div class="userData">
                <p class="userNameData"><?=$_SESSION['UserName'];?></p>
                <p class="userRoleData"><?=$_SESSION['UserRole'];?></p>
                <form action="UserWindow.php" method="post">
                    <input type="password" class="userPasswordUp" name="passwordUpdate">
                    <input type="submit" value="Update password" name="uspUpData">
                </form>
            </div>

            <a href="../temp/main.php" class="exitSession" name="ext">Exit</a>
            <?php
            if(isset($_POST['uspUpData'])){
                include("../modules/connect.php");
                $usp = $_SESSION['UserPassword'];
                $uspUp = $_POST['passwordUpdate'];
                $id = $_SESSION['User_id'];
                $uspUpR = $_SESSION['UserPsw2'];
                $uspUp = md5($uspUp."gfgdjgh231");
                $uspUpR = md5($uspUp."gfgdjgh231");
                $sql = "UPDATE users SET UserPassword = '$uspUp', UserPassword2 = '$uspUpR' WHERE UserID = '$id'";

                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }             
                    $conn->close();
            
            
            ?>
            

        </div>
    </div>
</body>
</html>