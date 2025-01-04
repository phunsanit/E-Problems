<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = null;

    /**
     * Get the options for the select input
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getOptions()
    {
        return [
            [
                'text' => 'Created',
                'value' => '1'
            ],
            [
                'text' => 'In Progress',
                'value' => '2'
            ],
            [
                'text' => 'Completed',
                'value' => '3'
            ],
            [
                'text' => 'Closed',
                'value' => '4'
            ],
        ];
    }

}
