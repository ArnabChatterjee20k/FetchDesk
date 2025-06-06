<?php
namespace Database;
use Database\Adapter;
class Database{
    public Adapter $adapter;
    public function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
    }

    public function getTables(){
        return $this->adapter->getTables();
    }
}