<?php
  $f = fopen('log.txt', 'r');
  $list = '';
  $list .= '<ul>';
  function wrap($x){
    return '<li>'.$x.'</li>';
  }
  while (($line = fgets($f)) !== false) {
    $list .= wrap($line);
  }
  fclose($f);
  $list .= '</ul>';
  return $list;
?>