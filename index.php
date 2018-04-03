<?php 
    $mass = [-1,-5,3,6,45,-3,54,6,7,-6,7,8,-4,5,6,7,8,16];
    echo 'Исходные данные: '.json_encode($mass);
    $m14_a_1 = $m14_a_2 = $m14_b_1 = $m14_b_2 = []; 

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] >= 0){
            $m14_a_1[] = $mass[$i];
        }else {
            $m14_a_2[] = $mass[$i];
        }
        if ($mass[$i] % 2 == 0){
            $m14_b_1[] = $mass[$i];
        }else {
            $m14_b_2[] = $mass[$i];
        }
    }

    echo '<br>a) <br> 1)'.json_encode($m14_a_1).'<br>2)'.json_encode($m14_a_2);
    echo '<br>b) <br> 1)'.json_encode($m14_b_1).'<br>2)'.json_encode($m14_b_2);


    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>