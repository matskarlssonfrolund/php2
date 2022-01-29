<?php
?>

<!DOCTYPE HTML>
<html lang="se">
<head>
    <meta charset="UTF-8">
    <title>Switch Statement</title>
</head>
<body>

<?php
        $age = 12;
        switch (true){
        case ($age < 5);
        echo "Stanna hemma";
        break;

        case ($age == 5);
        echo "Gå till förskolan";
        case in_array($age,range(6,17));
        $grade = $age - 5;
        echo "Gå till skolan klass $grade";
        break;
            default:
                echo "Till gymnasiet!! <br>";
}

?>
</body>
</html>
