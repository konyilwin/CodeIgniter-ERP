<?php
function activeSidebar(){
 $url = array_reverse(explode("/", $_SERVER['REQUEST_URI']));
 var_dump($url);
 echo $url[0];
}