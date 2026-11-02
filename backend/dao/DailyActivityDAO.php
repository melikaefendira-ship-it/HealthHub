<?php

require_once __DIR__ . '/BaseDAO.php';

class DailyActivityDAO extends BaseDAO
{
    protected string $table = 'daily_activities';
    protected string $primaryKey = 'activity_id';
}