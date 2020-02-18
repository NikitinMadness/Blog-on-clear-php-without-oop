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
<?php include("../modules/connect.php"); ?>
<div class="mainContent">
    <?php 
     $sql = "SELECT * FROM posts ORDER BY id DESC";
            $result = $conn->query($sql);?>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_array()): ?>
    <div class="artMainAr">
        <div class="artTitleMain"><?=$row['title']; ?></div>
        <div class="artContentMain">
            <?=mb_strimwidth($row['content'], 0, 455)?>
        </div>
        <div class="artRelizeMain"><?=$row['createdate'] ?></div>
        <div class="artLikesMain"></div>
        <?php echo '<a href="Article.php?id='.$row['id'].'" class="openPost">Read more...</a>' ?>
    </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php $conn->close(); ?>
</div>


</body>
</html>