<?php
$soupes = [
1 =>'soupe 1',
2=>'soupe 2',
3 =>'soupe 3',
4 =>'soupe 4',
5 =>'soupe 5',
6 =>'soupe 6',
7 =>'soupe 7',

];

$infos = [
  1 => [
        'nom' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, justo at dapibus semper, ipsum metus eleifend orci, quis dignissim arcu tortor ut est. Suspendisse gravida consectetur tellus in maximus. Vestibulum vehicula magna id nisi pharetra, eget mollis turpis mollis. Nulla maximus urna eu felis finibus, non sodales lacus aliquet. Vestibulum id ipsum nec ipsum tristique gravida sit amet id erat. Nam consectetur aliquam lorem, a viverra turpis hendrerit vitae. Morbi porta suscipit nisl, a bibendum nibh tempus ac.',
        'id_reg' => 1,
      ],

 2 => [
        'nom' => 'soupe 2',
        'id_reg' => 2,
      ],
 3 => [
        'nom' => 'soupe 3',
        'id_reg' => 3,
      ],
 4 => [
        'nom' => 'soupe 4',
        'id_reg' => 4,
      ],

 5 => [
        'nom' => 'soupe 5',
        'id_reg' => 5,
      ],

 6 => [
        'nom' => 'Soupe 6',
        'id_reg' => 6,
      ],
60 => [
        'nom' => 'soupe 7',
        'id_reg' => 7,
      ]
];




foreach ($soupes AS $id_soups => $soupe) {
    echo "<b>".$soupe."</b><br>";
    foreach ($infos AS $dept) {
        if ($dept['id_reg'] == $id_soups) {
            echo $dept['nom']."<br>";
        }
    }
}
