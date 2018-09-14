<?php
    $i = 0;
    while(true) {
        $i++;
        if ($i > 20) {        // $i が 20を超えていたら繰り返し終了
            //break;
        }
        
        if ($i % 2 == 1) {    // $i が奇数なら以降の処理はスキップ
            continue;
        }
        
        print $i . PHP_EOL;
    }
?>