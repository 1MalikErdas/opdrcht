<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Hello World</title>
    </head>
<body>

<?php

    $uur=date(format:"G");
    echo $uur;


    if ($uur>=6 && $uur<12){
        echo "Octend";
    }

    else if ($uur>=12 && $uur<18){
        echo "Middag";
    }

    else if ($uur>=18 && $uur<24){
        echo "Avond";
    }

    else if ($uur>24 && $uur<6){
        echo "Nacht";
}
?>

</body>
</html>
