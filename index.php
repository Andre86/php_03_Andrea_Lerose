<?php

$words1 = [
'vostro',
67,
'essere',
'colle',
'mi',
'sempre',
[
'oscura',
'era',
89,
[
'mezzo',
'E'
],
'ritrovai',
'per'
],
'diritta'
];



$words1[]='Nel';
$words1[]='del';
$words1[]='cammin';
$words1[]='di';
$words1[]='nostra';
$words1[]='vita';
$words1[]='una';
$words1[]='mi';
$words1[]='una';
$words1[]='selva';
$words1[]='ché';
$words1[]='la';
$words1[]='via';
$words1[]='smarrita';
print_r($words1);
$results = [
0 => $words1[8] . ' ' . $words1[6][3][0] . ' ' . $words1[9] . ' ' . $words1[10] . ' ' . $words1[11] . ' ' . $words1[12] . ' ' . $words1[13] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[14] . ' ' . $words1[15] . ' ' . $words1[6][0] . ', ' . $words1[16] . ' ' . $words1[17] . ' ' . $words1[7] . ' ' . $words1[18] . ' ' . $words1[6][1] . ' ' . $words1[19]
];
echo $results;



// QUESTI SOTTO: non sono utili al compito.
// $words2 = [
//   'elemento1' => 25.89,
//   'elemento2' => 'possa',
//   'elemento3' => [
//     'Virgilio',
//     'Favore',
//     'favore',
//     ['fortuna']
//   ],
//  'fine' => '!'
// ];

?>