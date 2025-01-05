<?php

namespace App\Models;

use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Model;

class ServiceLine extends Model
{
    use HasOptionsTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'service_lines';
}
