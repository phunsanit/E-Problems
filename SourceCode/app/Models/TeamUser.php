<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use App\Observers\TeamUserObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([TeamUserObserver::class])]
class TeamUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team_user';

    /**
     * Get the user that belongs to the team.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the optgroup and options for the select input
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getOptions()
    {
        $options = [];
        $optgroups = Team::select
        ('id', 'name')->orderBy('name')->get();

        foreach ($optgroups as $optgroup) {
            $options[$optgroup->id] = [
                'label' => $optgroup->name,
                'options' => [],
            ];
            self::where('team_id', $optgroup->id)->get()->each(function ($teamUser) use (&$options, $optgroup) {
                $options[$optgroup->id]['options'][] = [
                    'text' => $teamUser->user->name,
                    'value' => $teamUser->id,
                ];
            });
        }
        return $options;
    }
}
