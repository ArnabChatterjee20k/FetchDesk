<?php

namespace Database;

use Database\Validators\Column;
use Database\Validators\Table;
use Database\Validators\QueryResult;

abstract class Adapter
{
    /**
     * @return array<Table>
     */
    abstract public function getTables(): array;
    /**
     * @return array<Column>
     */
    abstract public function getTable(string $tableId): array;

    abstract public function runQuery(string $query,array $params = []): QueryResult;
}