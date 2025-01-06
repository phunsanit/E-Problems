<?php

namespace App\Models;

use App\Observers\OrganizationObserver;
use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([OrganizationObserver::class])]
class Organization extends Model
{
    use HasOptionsTrait;

}