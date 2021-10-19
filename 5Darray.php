<?php
echo '題材を任意とし、MECEに基づいたロジックツリーを5次元の配列変数に定義する。なお、最上位の
変数からインデックスまたはキーの指定で最下層にアクセスできる状態を正とする。<br>';


$array = array('Suzuki' => array(1 => array(0 => array('Female' => '30'))));


echo $array['Suzuki'][1][0]['Female'];
