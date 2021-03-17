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
    <label for="english">Do you speak english</label></br></br>
    <input type="radio" name="english" value="yes">yes</input></br>
    <input type="radio" name="english" value="no">no</input></br></br>
	<input type="submit" name="submit" value="Greet me now">
</form>



<?php

if(isset($_GET['english'])){ 
    $english = $_GET['english']; 
  }

if(isset($_GET['gender'])){ 
    $gender = $_GET['gender']; 
  }

$age = $_GET['age'];

if ($english == 'yes'){
    if ($gender == 'man') {
    switch ($age){
        case ($age <=12) : 
            echo 'Hello Kiddo';
            break;
        case($age>=12 && $age<=18) : 
            echo 'Hello Mister teenager';
            break;
        case ($age>=18 && $age<=115) :
            echo 'Hello Mister';
            break;
        case ($age>115) : 
            echo 'Oh wow, you are a really old man !';
            break;
    };
}


}
else if ($gender == 'woman'){
    switch ($age){
        case ($age <=12) : 
            echo 'Hello Kiddo';
            break;
        case($age>=12 && $age<=18) : 
            echo 'Hello Miss teen';
            break;
        case ($age>=18 && $age<=115) :
            echo 'Hello Miss ';
            break;
        case ($age>115) : 
            echo 'Oh wow, you are a really old woman !';
            break;
    };
}

else{

    if ($gender == 'man') {
        switch ($age){
            case ($age <=12) : 
                echo 'aloha Kiddo';
                break;
            case($age>=12 && $age<=18) : 
                echo 'aloha Mister teenager';
                break;
            case ($age>=18 && $age<=115) :
                echo 'aloha Mister';
                break;
            case ($age>115) : 
                echo 'aloha old man !';
                break;
        };
    }
    
    else if ($gender == 'woman'){
        switch ($age){
            case ($age <=12) : 
                echo 'aloha Kiddo';
                break;
            case($age>=12 && $age<=18) : 
                echo 'aloha Miss teen';
                break;
            case ($age>=18 && $age<=115) :
                echo 'aloha Miss ';
                break;
            case ($age>115) : 
                echo 'aloha old woman !';
                break;
        };
    }
}

?>

</body>
</html>