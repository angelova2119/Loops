<?php


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <table class="table table-bordered">
         <?php
         //Създаваме два for цикъла с по-10 колони и 10 реда.
         //С числа от 1 до 10.
         // Инкрементираме стойностите им.
         
         for($i = 1; $i <=10; $i++){
             echo '<tr>';
             for($j = 1; $j <=10;$j++){
                  echo '<td>';
                  //Умножаваме реда по колоната за да изведем търсения резултат.
                  echo $i * $j;
                 
                 
                   echo '</td>';
             }
              echo '</tr>';
             
         }
          ?>
      </table>
          
  </body>
</html>
