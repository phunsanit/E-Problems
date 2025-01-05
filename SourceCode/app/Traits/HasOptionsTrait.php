<?php
namespace App\Traits;

trait HasOptionsTrait
{
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
