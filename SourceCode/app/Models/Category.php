<?php

namespace App\Models;

use App\Observers\CategoryObserver;
use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([CategoryObserver::class])]
class Category extends Model
{
    use HasOptionsTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
}
