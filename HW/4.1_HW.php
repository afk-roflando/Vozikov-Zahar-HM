<?php
$last_name = 'Vozikov';

$length = strlen($last_name); //7

$Surname = [
    'LARGE_SURNAME'=> 15,
    'MEDIUM_SURNAME' => 10,
    'SMALL_SURNAME' => 5,
];


if ($length > $Surname['SMALL_SURNAME']){
    echo "Довжина вашого прізвища дорівнює {$length} і вона більша за {$Surname['SMALL_SURNAME']} і менше ніж {$Surname['MEDIUM_SURNAME']} <br/>";
}
elseif ($length == $Surname['SMALL_SURNAME'] ) {
    echo "Довжина вашого прізвища дорівнює {$length} і вона дорівнює {$Surname['SMALL_SURNAME']} <br/>";
}

else {
    echo "Довжина вашого прізвища дорівнює {$length} і вона меньша за {$Surname['SMALL_SURNAME']} <br/>";
}


if ($length > $Surname['MEDIUM_SURNAME'] ){
    echo "Довжина вашого прізвища дорівнює {$length} і вона більша за {$Surname['MEDIUM_SURNAME']} і менше ніж {$Surname['LARGE_SURNAME']} <br/>";
}
elseif ($length == $Surname['MEDIUM_SURNAME'] ) {
    echo "Довжина вашого прізвища дорівнює {$length} і вона дорівнює {$Surname['MEDIUM_SURNAME']} <br/>";
}


if ($length > $Surname['LARGE_SURNAME']){
    echo "Довжина вашого прізвища дорівнює {$length} і вона більша за {$Surname['LARGE_SURNAME']} <br/>";
}
