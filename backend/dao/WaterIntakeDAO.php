<?php

require_once __DIR__ . '/BaseDAO.php';

class WaterIntakeDAO extends BaseDAO
{
    protected string $table = 'water_intakes';
    protected string $primaryKey = 'water_id';
}