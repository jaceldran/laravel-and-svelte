<?php

namespace Modules\Enae\Models;

use Libs\Dataplay\Models\AppEloquentModel;

class Enrolment extends AppEloquentModel
{
    protected $connection = 'service';
    protected $table = 'enrolment_form';

    protected $casts = [
        'data' => 'json',
        'sync_log' => 'json',
    ];
}