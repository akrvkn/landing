<?php
//$find_img = '|data\-original\=\"(https\:\/\/static\.tildacdn\.com\/.*\.png)\"|siU';
$pattern = '~[a-z]+://\S+~';
$pattern2 = '~[a-z]+://\S+\.(jpg|png|gif|tif|exf|svg|wfm)~';
$html = file_get_contents('index.html');

preg_match_all(
    $pattern2,
    $html,
    $matches
);
//print_r($matches[0]);
$str = $html;
//$src = array();
foreach($matches[0] as $url){
  $name = basename($url);
  //if(!in_array($name, $src)){
  //$src[] = $name;
    $str = str_replace($url, 'assets/images/'.$name, $str);
    //$img = file_get_contents($url);
    //file_put_contents('assets/images/'.$name, $img);
  //}
  //$img = file_get_contents($url);
}

file_put_contents('index.html', $str);

 ?>
