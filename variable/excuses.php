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
	<label for="NameChild">Name of the Child :</label>
	<input type="" name="nameC"></br></br>
    <label for="gender">gender :</label></br>
    <input type="radio" name="gender" value="girl">girl</input></br>
    <input type="radio" name="gender" value="boy">boy</input></br></br>
    <label for="NameTeacher">Name of the Teacher :</label>
	<input type="" name="nameT"></br></br>
    <label for="reason">reason for absence :</label></br>
    <input type="radio" name="reason" value="ill">Illness</input></br>
    <input type="radio" name="reason" value="death">Death of a family member</input></br>
    <input type="radio" name="reason" value="extraAct">Extra-scolar activity</input></br>
    <input type="radio" name="reason" value="visit">Visit to a family member</input></br></br>
    <input type="submit" name="submit" value="Greet me now">


</form>


<?php

$nameC = $_GET['nameC'];
$nameT = $_GET['nameT'];
if(isset($_GET['gender'])){ 
    $gender = $_GET['gender']; 
  }
if(isset($_GET['reason'])){
    $reason = $_GET['reason'];
}


switch($reason){
    case 'ill': 
        echo 'Dear Mr/Ms '.$nameT.', my child '.$nameC.' can not be present this day at school because he is feeling sick. ';
        break;
        
    case 'death' : 
        echo 'Dear Mr/Ms '.$nameT.', my child '.$nameC." can not be present this day at school because of a relative's death.";
        break;
    
    case 'extraAct' : 
        echo 'Dear Mr/Ms '.$nameT.', my child '.$nameC." can not be present this day at school because he has an extra-scolar activity on this day.";
        break;

    case 'visit' : 
        echo 'Dear Mr/Ms '.$nameT.', my child '.$nameC." can not be present this day at school because he is visiting a relative.";
        break;

}

?>
</body>
</html>