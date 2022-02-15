<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
  e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$games = [
  [
    'homeTeam' => 'Wizards',
    'awayTeam' => 'Kings',
    'scoreHteam' => '109',
    'scoreAteam' => '110',
  ],
  [
    'homeTeam' => 'Bulls',
    'awayTeam' => 'Raptors',
    'scoreHteam' => '101',
    'scoreAteam' => '106',
  ],
  [
    'homeTeam' => 'Lakers',
    'awayTeam' => 'Warriers',
    'scoreHteam' => '101',
    'scoreAteam' => '106',
  ],  
]

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div>
      <?php
      for($i = 0; $i < count($games); $i++){     
       echo'<div>'.$games[$i]['homeTeam'].'-'.$games[$i]['awayTeam'].'|'.$games[$i]['scoreHteam'].'-'.$games[$i]['scoreAteam'].'</div>';
      }
      ?>
    </div>
  
</body>
</html>
