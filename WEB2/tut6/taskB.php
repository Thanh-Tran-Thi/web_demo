<?php

$str = "The internet has [4.2 billion] users. There are [3.397 billion] active social media users. The average daily time spent on social media is [116] minutes a day. Social media users grew by [320 million] between Sep 2017 and Oct 2018. That works out at a new social media user every [10] seconds.";
$continue = true;
//echo $str;
while ($continue) {
    $pos1 = strpos($str, "[");
    $pos2 = strpos($str, "]", $pos1);
    if ($pos1 == TRUE && $pos2 > $pos1) {
        $num = substr($str, $pos1 + 1, $pos2 - $pos1 - 1);
        if (substr($num, - 7) == 'billion') {
            $num = substr($num, 0, strlen($num) - 8);
            $num = $num * 1000000000;
        }
        echo $num . '<br>';
        $str = substr($str, $pos2 + 1);
    } else {
        return FALSE;
    }
}