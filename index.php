<?php
    include "includes/autoloader.inc.php";
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
    $person1 = new Person("CZ", "black", 20);
    echo $person1->getDA();

    echo Person::$drinkingAge;
    Person::setDrinkginAge(18);
    echo Person::$drinkingAge;
?>    
</body>
</html>