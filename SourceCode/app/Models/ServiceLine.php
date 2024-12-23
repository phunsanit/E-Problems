<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceLine extends Model
{
    protected $table = 'service_lines';

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
