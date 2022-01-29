<?php
require_once 'header.php';
?>
    <br><br><p>
<?php
        $friends = array('Janne', 'Kalle', 'Lisa');
        echo 'Wife : ' . $friends[0] . '<br>';
        $friends[3] = 'Jonny';
        foreach ($friends as $f){
            printf("Friend : %s<br>",$f);
        }
        $me_info = array('Name' => 'Derek', 'Adress' => 'Oddergatan 27');
        foreach ($me_info as $k => $v){
            printf("%s : %s<br>",$k, $v);
        }
        $friends2 = array('Douglas');
        $friends = $friends + $friends2;

        $customers = array(array('Derek','123 Main'),array('John','122 Main'));
        for($row = 0; $row <2; $row++){
            for($col = 0; $col <2; $col++){
                echo $customers[$row][$col] . ', ';
            }
            echo '<br>';
        }
        $let_str = "A B C D";
        $let_arr = explode(' ', $let_str);
        foreach($let_arr as $l){
            printf("Letter : %s<br>", $l);
        }
        $let_str_2 = implode(' ',$let_arr);
        echo "String : $let_str_2<br>";
        printf("Key exists : %d<br>", array_key_exists('Name', $me_info));



require_once 'footer.php';
?></p>
