<?php

namespace App\Models;

use App\Traits\HasOptionsTrait;
use Illuminate\Database\Eloquent\Model;

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
