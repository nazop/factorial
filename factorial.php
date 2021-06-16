<?php
    /* 0~10までの値が与えられたとき、nの階乗を表示するプログラム
     * 入力は整数nとし、0~10の範囲外であった場合errorと表示する
     * 入力
     * n
     * 出力
     * 1*2*3*...(n-1)*nの答え
     */

    // 入力を取ってくる
    $input = fgets(STDIN);

    // 10より上ならerrorを出して排除
    if ($input > 10) {
        echo "error";
        return;
    }
    
    // 0未満でも排除
    if ($input < 0) {
        echo "error";
        return;
    }
        
    // 計算した答えを入れるところ
    $result = 1;
    
    // 答えを計算する
    for($i = 2; $i <= $input; $i++) {
        $result *= $i;
    }
    
    // 答え表示して終了
    echo $result;
    
?>