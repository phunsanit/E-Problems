<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Team;

class TeamObserver
{
    public function created(Team $team)
    {
        AssetCacheController::cacheSelectOptions('team_id', 'Team');
    }

    public function updated(Team $team)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('team_id', 'Team');
    }

    public function deleted(Team $team)
    {
        AssetCacheController::cacheSelectOptions('team_id', 'Team');
    }

    public function forceDeleted(Team $team)
    {
        AssetCacheController::cacheSelectOptions('team_id', 'Team');
    }
}
