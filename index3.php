<?php
    include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $userObj = new UsersView();
        $userObj->showUser("Daniel");

        $userObj2 = new UsersContr();
        $userObj2->createUser("Haiya", "testing", "2020-10-10");
    ?>
</body>
</html>