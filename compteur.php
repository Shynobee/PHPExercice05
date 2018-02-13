<?php 

for ($i = 1; $i <= 5; $i ++) {
    echo "$i - \n";
}

$j = 0; 

while($j <= 4) {
    echo "$j - \n";
    $j++;
}

$k = 17; 

while($k >= 12) {
    echo "$k - \n";
    $k--;
}

for($l = 10; $l >= 4; $l-=2) {
    echo "$l - \n";
}

// 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47	

$tab = [
    1,
    2, // calcul des 15 entiers impair puis 1-10 mult par 25-15;
    3,
    4, // faire fonction pour trouver les nombres (secondaires);
    5,
    6, // 
    7,
    8,
    9,
    10, //
    11,
    12,
    13,
    14,
    15,
    16, 
    17,
    18, //
    19,
    20,
    21,
    22, //
    23,
    24,
    25,
    26,
    27,
    28, //
    29,
    30,
];

$outputone = [];
$outputtwo = [];

$sum = 0;
foreach($tab as &$value) {
    if($value%2) {
        $sum+= $value;
    }
}

echo $sum;
//echo array_sum($tab) . "\n";


foreach($tab as &$value) {
    if($value%2 && $value <= 10) {
       array_push($outputone, $value);
    }
    if($value%2 && $value > 15 && $value <= 25) {
        array_push($outputtwo, $value);
    }
}

echo '<pre>'; 
print_r($outputone); 
echo '</pre>';

echo '<pre>';
print_r($outputtwo);
echo '</pre>';

$revouttwo = array_reverse($outputtwo);


foreach (array_combine($revouttwo, $outputone) as $rev => $out) {
    echo '<pre>';
    print_r($rev * $out);
    echo '</pre>';
  }
  
$list = [
    'stark' => 'ironman',
    'logan' => 'wolverine',
    'peter' => 'spiderman',
    'gwen' => 'spidergirl',
    'stan' => 'boss',
];

foreach($list as $key => $value) {
    echo '<pre>';
    echo "{$key} => {$value}";
    echo '</pre>';
}

echo '<pre>';
print_r($list);
echo '</pre>';

?>

<table width="100">
    <tbody>
        <tr>
        <?php
        foreach($list as $key => $value) {
        ?>
        <th>
        <?php
        echo $key;
        ?>
        </th>
        </tr>
        <tr>
        <td>
        <?php
        echo $value; }
        ?>
        </td>
        </tr>
    </tbody>
</table>