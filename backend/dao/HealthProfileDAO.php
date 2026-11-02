<?php

require_once __DIR__ . '/BaseDAO.php';

class HealthProfileDAO extends BaseDAO
{
    protected string $table = 'health_profiles';
    protected string $primaryKey = 'profile_id';
}