<?php

abstract class BaseDAO
{
    protected PDO $connection;
    protected string $table;
    protected string $primaryKey;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array|false
    {
        $sql = "SELECT * FROM {$this->table}
                WHERE {$this->primaryKey} = :id";

        $statement = $this->connection->prepare($sql);
        $statement->execute(['id' => $id]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create(array $data): string
    {
        $columns = array_keys($data);
        $placeholders = array_map(
            fn($column) => ':' . $column,
            $columns
        );

        $sql = "INSERT INTO {$this->table} 
                (" . implode(', ', $columns) . ")
                VALUES (" . implode(', ', $placeholders) . ")";

        $statement = $this->connection->prepare($sql);
        $statement->execute($data);

        return $this->connection->lastInsertId();
    }

    public function update(int $id, array $data): bool
    {
        $fields = [];

        foreach ($data as $column => $value) {
            $fields[] = "{$column} = :{$column}";
        }

        $sql = "UPDATE {$this->table} SET "
             . implode(', ', $fields)
             . " WHERE {$this->primaryKey} = :id";

        $data['id'] = $id;

        $statement = $this->connection->prepare($sql);

        return $statement->execute($data);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM {$this->table}
                WHERE {$this->primaryKey} = :id";

        $statement = $this->connection->prepare($sql);

        return $statement->execute(['id' => $id]);
    }
}