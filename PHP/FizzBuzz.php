<!-- 1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5の倍
数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること。 -->

<?php
echo '1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5の倍
数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること<br>';
for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . ':FizzBuzz<br>';
    } elseif ($i % 5 === 0) {
        echo $i . ':Buzz<br>';
    } elseif ($i % 3 === 0) {
        echo $i . ':Fizz<br>';
    } else {
        echo $i . '<br>';
    }
}
