<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="AdminContentArea">
<?php include("../modules/connect.php"); ?>
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
</body>
</html>