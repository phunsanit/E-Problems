<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportEngineer extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    public static function getSetMembers()
    {
        return self::where('support_engineers.enable', true)
            ->join('users', 'users.id', '=', 'support_engineers.user_id')
            ->orderBy('users.name')
            ->get(['users.id', 'users.name as set']);
    }
}
