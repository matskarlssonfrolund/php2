
<?php
require_once 'header.php';
?>
<br><br><p>
<?php
    $age = 12;
    $scan_vote = ($age >= 18) ? "Kan rösta!" : "Får inte rösta";
    echo "Får du rösta? : $scan_vote<br>";

    if("10" == 10){
        echo "De är lika<br>";
    }else{
        echo "De är inte lika<br>";
    }
    printf("%c %d %.2f %s<br>", 65,65,1.234, "string");
    echo "<br><br>";
    $rand_string = "      Random String      ";
    printf("Lengt : %d<br>", strlen($rand_string));
    printf("Trim L : %d<br>", strlen(ltrim($rand_string)));
    printf("Trim L : %d<br>", strlen(rtrim($rand_string)));
    $rand_string = trim($rand_string);
    printf("Upper : %s<br>", strtoupper($rand_string));
    printf("Lower : %s<br>", strtolower($rand_string));
    printf("Upper : %s<br>", ucfirst($rand_string));
    printf("1st 6 : %s<br>", substr($rand_string, 0, 6));

require_once 'footer.php';
?></p>
