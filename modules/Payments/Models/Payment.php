<?php

namespace Modules\Payments\Models;

use Libs\Dataplay\Models\AppEloquentModel;

class Payment extends AppEloquentModel
{
    protected $connection = 'service';
    protected $table = 'payment';

    protected $casts = [
        'data' => 'json',
    ];
}