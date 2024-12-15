<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    public static function getSetMembers()
    {
        return self::where('enable', true)
            ->orderBy('title')
            ->get(['id', 'title as set']);
    }
}
