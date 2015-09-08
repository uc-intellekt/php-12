<?php

$user1 = [
	'name' => 'Victor',
	'lang' => 'PHP',
	'city' => 'Kiev',
];
$user2 = [
	'name' => 'Andrii',
	'lang' => 'JavaScript',
	'city' => 'Ternopil',
];
$user3 = [
	'name' => 'Vlad',
	'lang' => 'Ruby',
	'city' => 'New York',
];

$users = [
	'I am' => $user1,
	'My friend' => $user2,
	'Obama' => $user3,
];

// echo $users[1]['lang'];

// $i++ => $i = $i + 1
// $i-- => $i = $i - 1
// $count = count($users);
// for ($i = 0; $i < $count; $i++) {
// 	echo $users[$i]['name'] . '<br>';
// 	echo $users[$i]['lang'] . '<br>';
// 	echo $users[$i]['city'] . '<br>';
// }

// foreach ($users as $user) {
// 	echo $user['name'] . '<br>';
// 	echo $user['lang'] . '<br>';
// 	echo $user['city'] . '<br>';
// }


/*
<?php echo $var ?>   =>   <?= $var ?>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
	.heading {
		font-size: 20px;
	}
	.green {
		color: #2F9C56;
	}
	</style>
</head>
<body>
	<h1>User list</h1>

	<?php foreach ($users as $status => $user) : ?>
		<h2 class="heading green"><?= $user['name'] ?></h2>
		<p>Status: <?= $status ?></p>
		<p>Language: <strong class="green"><?= $user['lang'] ?></strong></p>
		<p>City: <strong class="green"><?= $user['city'] ?></strong></p>
	<?php endforeach ?>
</body>
</html>
