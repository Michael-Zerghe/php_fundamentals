<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
$age = $_GET['age'];
switch ($age){
    case ($age <=12) : 
        echo 'Hello Kiddo';
        break;
    case($age>=12 && $age<=18) : 
        echo 'Hello teenager';
        break;
    case ($age>=18 && $age<=115) :
        echo 'Hello adult';
        break;
    case ($age>115) : 
        echo 'Wow, you are still alive ? Are you a robot, like me ? Can I hug you';
        break;
};

?>

</body>
</html>