<?php

// arrays

// 2 main types of arrays

// Indexed / Numeric array
$colors = ['red', 'green', 'blue'];

/*
array(3) {
  [0]=> string(3) "red"
  [1]=> string(5) "green"
  [2]=> string(4) "blue"
}
*/

echo $colors[0]; // red


// Associative array
$user = [
	'name' => 'Messi',
    'age' => 36
];

/*
array(2) {
  ["name"]=> string(5) "Messi"
  ["age"]=> int(36)
}
*/

echo $user["name"]; // Messi

// Mixed array
$mixed = [
	42,
	'key' => 'value',
	'another value'    
];

/*
array(3) {
  [0]=> int(42)
  ["key"]=> string(5) "value"
  [1]=> string(13) "another value"
}
*/

$blogPost = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John',
        'role' => 'editor'
    ],
    'comments' => [
        ['user' => 'Jane', 'text' => 'Great article!'],
        ['user' => 'Bob', 'text' => 'Thanks for sharing']
    ]
];

echo $blogPost['title']; // Getting Started with PHP
echo $blogPost['author']['name']; // John
echo $blogPost['comments'][0]['text']; // Great article!

// add elements
$colors[] = "yellow";
$user['email'] = 'test@gmail.com';

// array size
count($colors); // 4

// checking elements
isset($user['email']); // true
in_array('red', $colors); // true

// remove elements
// unset($user['email']);
var_dump($colors);
/*
array(4) {
  [0]=> string(3) "red"
  [1]=> string(5) "green"
  [2]=> string(4) "blue"
  [3]=> string(6) "yellow"
}
*/
unset($colors[2]); // removes given index no re-arrangement
var_dump($colors);
/*
array(3) {
  [0]=> string(3) "red"
  [1]=> string(5) "green"
  [3]=> string(6) "yellow"
}
*/
