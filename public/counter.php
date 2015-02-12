<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/11/15
 * Time: 3:39 PM
 */


$countMyPage = ("hitcounter.txt");
$myHits = file($countMyPage);
$myHits[0] ++;
$fileOpen = fopen($countMyPage, "w");
fputs($fileOpen, "$myHits[0]");
fclose($fileOpen);
echo $myHits[0];