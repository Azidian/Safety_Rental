<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'code',
        'state',
        'startDate',
        'endDate',
        'createAt',
    ];

    protected function casts(): array
    {
        return [
            'code' => 'integer',
            'startDate' => 'date',
            'endDate' => 'date',
            'createAt' => 'date',
        ];
    }
}
