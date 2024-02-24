<?php

namespace Modules\Payments\Models;

use Libs\Dataplay\Contracts\WithUpsertInterface;
use Libs\Dataplay\Models\AppEloquentModel;
use Libs\Dataplay\Traits\Newable;

class Payment extends AppEloquentModel implements WithUpsertInterface
{
    use Newable;

    protected $connection = 'service';
    protected $table = 'payment';

    protected $casts = [
        'data' => 'json',
    ];

    public function upsertUniqueColumns(): array
    {
        return [
            'source_type',
            'source_name',
            'source_id',
        ];
    }

    public function upsertUpdateColumns(): array
    {
        return [
            'reference',
            'method',
            'result',
            'amount',
            'attempts',
            'data',
            self::UPDATED_AT => date('Y-m-d H:i:s'),
        ];
    }
}
