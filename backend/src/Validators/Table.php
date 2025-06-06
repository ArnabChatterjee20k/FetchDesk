<?php
namespace Database\Validators;
use Database\Validators\Column;
use Spatie\DataTransferObject\DataTransferObject;

class Table extends DataTransferObject{
    public string $name;
    /**
    * @var Column[]
    */
    public array $columns;
}