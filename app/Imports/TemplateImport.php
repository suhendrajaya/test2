<?php

namespace App\Imports;

use App\Models\TypeA;
use Maatwebsite\Excel\Concerns\ToModel;

class TemplateImport implements ToModel
{
    public function model(array $row)
    {
        return new TypeA([
            'a' => $row[0],
            'b' => $row[1],
            'c' => $row[2],
            'd' => $row[3],
            'e' => $row[4],
        ]);
    }
}
