<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceLine extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'service_lines';

    /**
     * Get the options for the select input
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getOptions()
    {
        return self::where('enable', true)
            ->orderBy('title')
            ->get(['title as text', 'id as value']);
    }
}
