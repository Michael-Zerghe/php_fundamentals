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
    <label for="gender">gender : </label></br>
    <input type="radio" name="gender" value="woman">woman</input></br>
    <input type="radio" name="gender" value="man">man</input></br>
    <input type="submit" name="submit" value="Greet me now">
</form>

    <?php
        $hello = 'hello';
        if(isset($_GET['gender'])){ 
            $gender ='hello '. $_GET['gender']; 
          };

          echo $gender;
    ?>


</body>
</html>