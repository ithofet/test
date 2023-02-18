<?php
$str = "apple banana orange apple";
$cp = ' '.$str . ' ';
preg_match_all("/ /", $cp, $parce, PREG_OFFSET_CAPTURE);
$count = 0;
$out = [];

foreach($parce[0] as $item){
    $key = substr($str, $count, max($item[1] - $count - 1, 0));
    if(isset($out[$key])){
       $out[$key]++;
    } else {
       $out[$key] = 1;
    }
    $count = $item[1];
}

unset($out['']);

foreach($out as $key => $item) {
    echo $key.' - '.$item."\n";
}
