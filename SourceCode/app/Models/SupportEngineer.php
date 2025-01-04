<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportEngineer extends Model
{
    protected $table = 'support_engineers';

    // Define the relationship to the other model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the options for the select input
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getOptions()
    {
        return self::where('enable', true)
            ->join('users', 'users.id', '=', 'support_engineers.user_id')
            ->orderBy('users.name')
            ->get(['users.name as text', 'users.id as value']);
    }
}
