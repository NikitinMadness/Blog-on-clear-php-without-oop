<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SESSION['UserRole'] == 'Admin'): ?>
        <form action="UserWindow.php" method="post">
            <input type="text" name="getRoleForUser" class="userRoleGet">
            <input type="submit" value="Get role" name="getRoleUser">
        </form>
        <?php 
            if(isset($_POST['getRoleUser'])){
                include("../modules/connect.php");
                    $userRoleData = $_POST['getRoleForUser'];
                    $sql = "INSERT INTO users (UserRole) VALUES ('$userRoleData')";
                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        
                        $conn->close();
            }
        ?>
        <?php endif; ?>
</body>
</html>