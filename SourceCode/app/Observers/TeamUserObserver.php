<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\TeamUser;

class TeamUserObserver
{
    public function created(TeamUser $teamUser)
    {
        AssetCacheController::cacheSelectOptions('team_support_id', 'TeamUser');
    }

    public function updated(TeamUser $teamUser)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('team_support_id', 'TeamUser');
    }

    public function deleted(TeamUser $teamUser)
    {
        AssetCacheController::cacheSelectOptions('team_support_id', 'TeamUser');
    }

    public function forceDeleted(TeamUser $teamUser)
    {
        AssetCacheController::cacheSelectOptions('team_support_id', 'TeamUser');
    }
}
