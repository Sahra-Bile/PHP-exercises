
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
$recept = [
    [
        'namn' => 'Köttbullar',
        'beskrivning' =>
            'Klassiska svenska köttbullar med gräddsås och lingonsylt.',
        'ingredienser' => [
            '400 g nötfärs',
            '1 dl ströbröd',
            '1 dl mjölk',
            '1 ägg',
            '1 gul lök',
            '1 tsk salt',
            '1 krm svartpeppar',
        ],
    ],
    [
        'namn' => 'Pannkakor',
        'beskrivning' => 'Enkla och goda pannkakor med sylt och grädde.',
        'ingredienser' => [
            '2 dl vetemjöl',
            '4 dl mjölk',
            '2 ägg',
            '1/2 tsk salt',
            '2 msk smör',
        ],
    ],
    [
        'namn' => 'Kycklinggryta',
        'beskrivning' => 'Krämig kycklinggryta med champinjoner och ris.',
        'ingredienser' => [
            '600 g kycklingfilé',
            '1 gul lök',
            '2 vitlöksklyftor',
            '1 burk krossade tomater',
            '2 dl grädde',
            '1 msk tomatpuré',
            '1 tsk salt',
            '1/2 tsk svartpeppar',
            '1 tsk paprikapulver',
            '250 g champinjoner',
        ],
    ],
];

foreach ($recept as $r) {
    echo '<h2>' . $r['namn'] . '</h2>';
    echo '<p>' . $r['beskrivning'] . '</p>';
    echo '<h3>Ingredienser:</h3>';
    echo '<ul>';
    foreach ($r['ingredienser'] as $ingrediens) {
        echo '<li>' . $ingrediens . '</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>
