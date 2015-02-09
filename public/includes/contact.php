<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/7/15
 * Time: 7:23 PM
 */

if (isset($name)) {
    $name = $_POST['Name'];
}
if (isset($phone)) {
    $phone = $_POST['Phone'];
}
if (isset($email)) {
    $email = $_POST['Email'];
}
if (isset($message)) {
    $message = $_POST['Message'];
}
$to = "Adam@haelectricllc.com";
