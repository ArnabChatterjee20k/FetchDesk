<?php

namespace Database\Validators;

use Database\Validators\Column;
use Spatie\DataTransferObject\DataTransferObject;

class QueryResult extends DataTransferObject
{
    public bool $success;
    public ?array $columns = [];
    public ?array $records = [];
    public ?int $affectedRows = 0;
    public ?string $errorMessage = null;
}
