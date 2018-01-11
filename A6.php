<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 6</title>
  </head>
  <body>
    <h2>Figura 1 con while</h2>
    <?php

    $i=1;
while ($i < 6 ) {
  echo "*";
  echo "<br>";
  $i++;
}

     ?>
<hr>
<h2>Figura 2 con for </h2>
<?php

for ($i=5; $i < 15 ; $i++) {
  echo "*****";
  echo "<br>";
  $i++;
}

 ?>
<hr>

<h2>Figura 3 con for </h2>
<?php
for ($i=1; $i <= 7; $i++) {
  for ($b=1; $b <= $i ; $b++) {
    echo "*";
  }
echo "<br>";
  }
 ?>
 <h2>Figura 4 con for </h2>
 <?php
 $piramide=5;
    for ($i=1; $i <= $piramide ; $i++) {
      for ($asteriscos=1; $asteriscos <= $i ; $asteriscos++) {
        if (($i%2) == 1) {
            echo '*';
        }
      }
          echo '<br>';
      }
      echo "<br>";
      // sacamos la parte de abajo de la figura copiando el for que hemos utilizado arriba pero cambiando variables
      $piramide2=0;
      for ($b=3; $b >= $piramide2 ; $b--) {
        for ($asteriscos=1; $asteriscos <= $b ; $asteriscos++) {
          if (($b%2) == 1) {
              echo '*';
          }
        }
            echo '<br>';
        }
     ?>
<h3>Figura 5</h3>
<?php
$figura=10;
   for ($i=1; $i <= $figura ; $i++) {
     for ($asteriscos=1; $asteriscos <= $i ; $asteriscos++) {
       if (($i%2) == 1) {
           echo '*';
       }
     }
         echo '<br>';
     }
     echo "<br>";
  ?>
  </body>
</html>
