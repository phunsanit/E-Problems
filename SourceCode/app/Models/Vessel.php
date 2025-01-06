<?php

namespace App\Models;

use App\Observers\VesselObserver;
use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([VesselObserver::class])]
class Vessel extends Model
{
    use HasOptionsTrait;
}
