<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei 
voti di ogni alunno. -->
<?php
$class = [
  [
    'name' => 'Alessandro',
    'surname' => 'De Martino',
    'grades' => [
      'Mathematics' => '100',
      'History' => '100',
      'Science' => '100'
    ],
  ],
  [
    'name' => 'Katherine',
    'surname' => 'Farley',
    'grades' => [
      'Mathematics' => '50',
      'History' => '77',
      'Science' => '90'
    ],
  ],
  [
    'name' => 'Archie',
    'surname' => 'Arnold',
    'grades' => [
      'Mathematics' => '88',
      'History' => '98',
      'Science' => '44'
    ],

  ],
  [
    'name' => 'Sara',
    'surname' => 'Beatriz',
    'grades' =>
    [
      'Mathematics' => '66',
      'History' => '65',
      'Science' => '99'
    ],

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
      for($i = 0; $i < count($class); $i++){     
        $average = array_sum($class[$i]['grades']) / count($class[$i]['grades']);
        $average = round($average,2);
        
        echo'<div>'.$class[$i]['name'].' '.$class[$i]['surname'].' | '.$average.'</div>';
      }
      ?>
    </div>
   
    
  </body>
  </html>
