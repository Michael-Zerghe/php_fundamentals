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
	<label for="age">age</label>
	<input type="" name="age"></br>
    <label for="gender">gender</label>
    <input type="radio" name="gender" value="woman">woman</input>
    <input type="radio" name="gender" value="man">man</input></br></br>
	<input type="submit" name="submit" value="Submit">
</form>


<?php

if(isset($_GET['gender'])){ 
    $gender = $_GET['gender']; 
  }

$age = $_GET['age'];

$valid = false;

if (($gender == 'woman') && ($age<=40 && $age >= 21)){
    $valid = true;
    echo 'welcome to the team';
}

if ($valid == false){
    echo 'you do not fit the criteria';
}

?>

</body>
</html>