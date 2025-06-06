<?php
namespace Database\Adapters;

use Database\Adapter;
use Database\Validators\Column;
use Database\Validators\Table;
use PDO;

class SQLite extends Adapter
{
    /**
     * @var PDO
     */
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function getForeignKeys($tableName): array
    {
        $stmt = $this->pdo->query("PRAGMA foreign_key_list($tableName)");
        $foreignKeys = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $foreignKeyNames = [];

        foreach ($foreignKeys as $value) {
            $foreignKeyNames[] = $value['from'];
        }

        return $foreignKeyNames;
    }

    /**
     * @return array<Column>
     */
    public function getTable($tableName): array
    {
        $foreignKeys = $this->getForeignKeys($tableName);
        $stmt = $this->pdo->query("PRAGMA table_info($tableName)");
        $tableColumns = $stmt->fetchAll();
        $columns = [];
        foreach ($tableColumns as $column) {
            $columns[] = new Column([
                'name' => $column['name'],
                'primaryKey' => $column['pk'] > 0,
                'foreignKey' => in_array($column['name'], $foreignKeys),
                'type' => $column['type'],
                'nullable' => $column['notnull'] != 1,
                'default' => $column['dflt_value']
            ]);
        }
        return $columns;
    }

    /**
     * @return Table
     */
    public function getTables(): array
    {
        $stmt = $this->pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'");
        $tableDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $tables = [];
        foreach ($tableDetails as $table) {
            $columns = $this->getTable($table['name']);
            $tables[] = new Table(['name' => $table['name'], 'columns' => $columns]);
        }

        return $tables;
    }
}
