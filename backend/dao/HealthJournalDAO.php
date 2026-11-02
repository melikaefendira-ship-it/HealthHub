<?php

require_once __DIR__ . '/BaseDAO.php';

class HealthJournalDAO extends BaseDAO
{
    protected string $table = 'health_journals';
    protected string $primaryKey = 'journal_id';
}