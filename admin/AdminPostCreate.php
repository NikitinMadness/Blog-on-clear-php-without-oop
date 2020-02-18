<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<?php include("/AdminSide.php");?>
<?php include("/AdminHeader.php");?>
<div class="AdminContentArea">
        <div class="adminCntZn">
            <form action="AdminPostCreate.php" method="post">
                <input type="text" name="ThePostTittle" placeholder="Enter the name of post..." class="tittlePostName" required>
                <textarea name="ThePostDesc" class="descOfPost" placeholder="Enter post..." required></textarea>
                <input type="submit" value="Add &#10003;" class="postAddBtn" required name="AddThePost">
            </form>
        </div>
    </div>
<?php 
if(isset($_POST['AddThePost'])){
    require("../modules/connect.php");

        $title = $_POST['ThePostTittle'];
        $description = $_POST['ThePostDesc'];
        $relize = (date("l dS of F Y h:I:s A"));
        $author = $_SESSION['UserName'];
        


        $sql = "INSERT INTO posts (title, content, author, createdate)
            VALUES ('$title', '$description', '$author', '$relize')";
        
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
        $conn->close();
        }
        
?>
</body>
</html>