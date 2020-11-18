<?php 
header("Content-type: text/css");

$fontFamily = 'Arial, Helvetica, sans-serif';
$backgroundColor = "#d4d7dd";

?>

body {
  background-color: <?=$backgroundColor?>;
  height: 100%;
  width: 100%;

}

.container {
  float: left;
  display: inline;

}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.main-para {
    float: center;
    width: 70%;
    background-color: transparent;
    color: black;
    font-family: <?=$fontFamily?>;
    line-height: 1em;
    font-size: 1.4em;
    padding: 2em 10em 2.15em;
    border-top-left-radius: 1em;
    border-bottom-left-radius: 1em;
 }