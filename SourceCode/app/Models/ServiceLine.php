<?php

namespace App\Models;

use App\Observers\ServiceLineObserver;
use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ServiceLineObserver::class])]
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
