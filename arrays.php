<?php

// Arrays

// indexed array
$langs = array('PHP', 'JavaScript', 'HTML', 'CSS');

echo $langs[3] . "<br>\n";

// add elements to array
$langs[10] = 'Python';
$langs[] = 'Ruby';

// remove element from array
unset($langs[1]);

// print_r($langs);
// var_dump($langs);

// associative array
$user = [
	'name' => 'Victor',
	'lang' => 'PHP',
	'city' => 'Kiev',
];

$user['vcs'] = 'Git';

echo $user['city'] . "<br>\n";

var_dump($user);

?>
