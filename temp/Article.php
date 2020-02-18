<? session_start(); ?>
<?php include("headerCn.php");?>
<?php include("../modules/connect.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="articleWrapper">
    <?php
    $post_id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = '$post_id'";
    $result = $conn->query($sql);?>
       <?php if($result->num_rows > 0): ?>
           <?php while($row = $result->fetch_array()):?>
        <div class="articleTitle"><?php echo $row['title']?></div>
        <div class="articleContent"><?php echo $row['content']?></div>
        <div class="articleRelize"><?php echo $row['createdate'] ?></div>
        <div class="articleAuthor"><? echo $row['author']?></div>
        <div class="articleLike"></div>
            <?='<form action="Article.php?id='.$row['id'].'" method="post">'?>
                <textarea name="addComment" class="commendAdded" placeholder="Enter your comment..."></textarea>
                <input type="submit" value="Add" name="addCmtBtn" class="cmtBtn">
            </form>
            <?php
                $addComm = $_POST['addCmtBtn'];
                $cmtTitle = $row['title'];
                $cmtBody = $_POST['addComment'];
                $cmtAuthor = $_SESSION['UserName'];
                if(isset($addComm)){
                $sql = "INSERT INTO comments (postAuthor, titlePost, commentBody)
                    VALUES ('$cmtAuthor', '$cmtTitle', '$cmtBody')";
                    if($conn->query($sql) === true){
                        
                    }
                }
            ?>
        <div class="commentsZn">
        <?php 
            $ttpst = $row['title'];
            $sql = "SELECT * FROM comments WHERE titlePost = '$ttpst'";
                $result = $conn->query($sql); ?>
                <?php if($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_array()):?>
            <div class="cmAuthorZn"><?=$row['postAuthor']?></div>
            <div class="cmBodyZn"><?=$row['commentBody']?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php $conn->close();?>
</body>
</html>