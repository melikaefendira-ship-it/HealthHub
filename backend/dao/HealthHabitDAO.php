<?php

require_once __DIR__ . '/BaseDAO.php';

class HealthyHabitDAO extends BaseDAO
{
    protected string $table = 'healthy_habits';
    protected string $primaryKey = 'habit_id';
}