<?php
require_once 'header.php';
?>
    <br><br><p>
<?php

        function isEven($x){

            return ($x % 2) == 0;

        }
        $list = [1,2,3,4];
        $even_list = array_filter($list, 'isEven');

        print_r($even_list);



require_once 'footer.php';
?></p>
