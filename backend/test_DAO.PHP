<?php

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/dao/UserDAO.php';

$userDAO = new UserDAO($connection);

$users = $userDAO->getAll();

echo "<pre>";
print_r($users);
echo "</pre>";