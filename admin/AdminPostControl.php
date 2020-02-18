<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>AdminPanel</title>
</head>
<body>
<?php include("/AdminSide.php");?>
<?php include("/AdminHeader.php");?>
<div class="AdminContentArea">
    <div class="adminCntZn">
<?php include("../modules/connect.php"); ?>
    <div class="tittleArticle">
    </div>
        <?php
            $author = $_SESSION['UserName'];
            $sql = "SELECT * FROM posts WHERE author = '$author' ORDER BY id DESC";
            $result = $conn->query($sql);
        ?>
           <?php 
            error_reporting(E_ALL);
                if(isset($_POST['updtPost']) && isset($_POST['ID'])){
                    $updTitle = $_POST['updatePost'];
                    $updContent = $_POST['updateContent'];
                    $id = $_POST['ID'];
                    $sql = "UPDATE posts SET title = '$updTitle', content = '$updContent' WHERE id = '$id'";
                        if ($conn->query($sql) === TRUE) {
                           
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                }
             ?>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_array()): ?>
                <div class="articleAr">
                    <form action="AdminPostControl.php" method="post">
                        <div class="articleTitle"><input type="text" name="updatePost" value="<?php echo $row['title']; ?>"></div>
                        <div class="articleContent"><textarea name="updateContent" ><?php echo $row['content']; ?></textarea></div>
                        <div class="articleAuthor"><?php echo $row['author']; ?></div>
                        <div class="articleRelize"><?php echo $row['createdate']; ?></div>
                        <div class="articleDelete"><?php echo '<a href="AdminDelete.php?id='.$row['id'].'" name="delPst" class="delAr">x</a>'?></div>
                        <input type="hidden" name="ID" value="<?php echo $row['id'] ?>" >
                        <input type="submit" value="Update" class="updPost" name="updtPost">
                    </form>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php $conn->close(); ?>
        </div>
    </div>
</body>
</html>