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

    $me = array (
        'firstname' => 'Michael' ,
        'lastname' => 'Zerghe' ,
        'age' => 24 ,
        'football' => true ,
    );
    
    $me['hobbies'] = array('listening music', 'video games', 'drawing');

    $father = array(
        'firstname' => 'Fabian' ,
        'lastname' => 'Zerghe' ,
        'age' => 50,
        'football' => true ,
        'hobbies' => array('DIY','watching sports','video games'),
    );
    echo '<pre>';
print_r($me);
echo '</pre>';

$me['father'] = $father;

 $myhobbies = count($me['hobbies']);
 $Fhobbies = count($me['father']['hobbies']);
 
 echo $myhobbies + $Fhobbies;
 $me['lastname'] = 'Durant';

 echo '<pre>';
 print_r($me);
 echo '</pre>';
 

    ?>



</body>
</html>