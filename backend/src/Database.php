<?php

namespace Database;

use Database\Adapter;
use Database\Validators\QueryResult;
use Database\Validators\Table;

class Database
{
    public Adapter $adapter;
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @return array<Table>
     */
    public function getTables(): array
    {
        return $this->adapter->getTables();
    }

    public function runQuery(string $query, array $params = []): QueryResult
    {
        return $this->adapter->runQuery($query, $params);
    }
}
