<?php

require_once __DIR__ . '/BaseDAO.php';

class UserDAO extends BaseDAO
{
    protected string $table = 'users';
    protected string $primaryKey = 'user_id';
}