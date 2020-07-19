<?php

include 'includes/class-autoload.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$userObj = new UserView();
$userObj->showUsers('Jane');


$userObj2 = new UserCon();

$userObj2->createUser('Jane', 'Doe', '2020-09-08');


?>

</body>
</html>
