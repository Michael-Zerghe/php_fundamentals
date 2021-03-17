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
    <label for="gender">are you human, a cat or an unicorn </label></br>
    <input type="radio" name="gender" value="man">human</input></br>
    <input type="radio" name="gender" value="cat">cat</input></br>
    <input type="radio" name="gender" value="unicorn">unicorn</input></br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php

        if(isset($_GET['gender'])){ 
            $gender = $_GET['gender']; 
          };

          switch ($gender) {
              case 'man':
                  echo "<img src=https://media.giphy.com/media/XJ0VBekIP3Dg3QaJc3/giphy.gif>";
                  break;
              
              case 'cat':
                  echo "<img src=https://media.giphy.com/media/12bjQ7uASAaCKk/giphy.gif>";
                  break;
              case 'unicorn':
                echo "<img src=https://media.giphy.com/media/ZvaqkFqfgwISgIDVXZ/giphy.gif>";
                break;
          };
?>

</body>
</html>