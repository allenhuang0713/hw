<?php
        $poker = range(0, 51);
        for ($i=51; $i > 0; $i--) {
            do {
            $temp = rand(0, 51);
            $k = array_search($temp,$poker);
            $isRepeat = false;
                if($k <= $poker[$i]){
                    array_splice($poker,$k,1);
                    $poker[] = $temp;
                    $isRepeat = true;
                    break;
                }
            }while($isRepeat);
        }
        foreach ($poker as $v) {
            echo "{$v}<br>";
        }
?>