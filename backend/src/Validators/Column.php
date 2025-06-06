<?php
namespace Database\Validators;
use Spatie\DataTransferObject\DataTransferObject;

class Column extends DataTransferObject{
    public string $name;
    public string $type;
    public bool $nullable;
    public mixed $default;
    public bool $primaryKey;
    public bool $foreignKey;
}