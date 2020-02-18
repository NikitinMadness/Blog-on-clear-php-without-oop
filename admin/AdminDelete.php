<?php
    $dsn = 'mysql:host=192.168.0.103;dbname=blogtest';
    $pdo = new PDO($dsn, 'root', '');
    $id = $_GET['id'];

    $sql = 'DELETE FROM `posts` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header('Location: /Blog_site/admin/AdminPostControl.php');
    
?>