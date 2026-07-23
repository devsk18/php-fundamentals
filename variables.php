<?php

// variables

// types
$status = 404; // int(404)
$status = 404.4; // float(404.4)
$status = '404'; // string(3) "404"
$status = true; // bool(true)

// double qoutes and dot helps for concatination
$text = "Not Found";
$status = "404 $text"; // string(13) "404 Not Found"
$status = "404 " . $text; // string(13) "404 Not Found"

// type casting
$status = (string) 404; // string(3) "404"
$status = (string) true; // string(1) "1"
$status = (string) false; // string(0) ""
$status = (int) false; // string(0)

// type converstion by php
$status = "404" + 4; // int(408)

// dumps the type and value of a variable
var_dump($status);
