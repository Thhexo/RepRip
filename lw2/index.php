<?php

include 'User.php';
include 'UserService.php';

use Cl\User;
use Cl\UserService;


$userOne = new User('Maria_Permaykova', 'yerto', new DateTime('2005-03-08'));
$userTwo = new User('Vlad_Sidorov', 'pvjsy', new DateTime('1990-06-31'));
$userThree = new User('Kate_Landay', 'dusihf', new DateTime('2014-09-17'));
$userFour = new User('Stas_Frite', 'truehsk', new DateTime('1999-04-26'));


$userService = new UserService();

$users = [$userOne, $userTwo, $userThree, $userFour];

$sortedByUsernameAsc = $userService->sortByUsername($users);
echo "Сортировка по возрастанию:\n";
foreach ($sortedByUsernameAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByUsernameDesc = $userService->sortByUsername($users, false);
echo "Сортировка по убыванию:\n";
foreach ($sortedByUsernameDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayAsc = $userService->sortByBirthday($users);
echo "Сортировка дня рождения по возрастанию:\n";
foreach ($sortedByBirthdayAsc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
echo "\n";

$sortedByBirthdayDesc = $userService->sortByBirthday($users, false);
echo "Сортировка дня рождения по убыванию:\n";
foreach ($sortedByBirthdayDesc as $user) {
    echo "{$user->username} - {$user->birthday->format('Y-m-d')}\n";
}
