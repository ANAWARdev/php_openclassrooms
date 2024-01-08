<?php
$recipes = [
    [
        'titre' => 'Poisson pané',
        'auteur' => 'mickael andrieu',
    ],
    [
        'titre' => 'Fromage',
        'auteur' => 'mathieu nebra',
    ],
    [
        'titre' => 'Pancakes',
        'auteur' => 'laurene castor',
    ],
    [
        'titre' => 'Mloukia',
        'auteur' => 'anwar Dridi ',
    ],
];
$lines = 4; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo $recipes[$counter]['titre'] . ' ' . $recipes[$counter]['auteur'] . '<br />';
    $counter++;
}