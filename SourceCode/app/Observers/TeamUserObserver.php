<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\TeamUser;

class TeamUserObserver
{
    private function createdUpdateAssetCache(TeamUser $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('team_support_id', 'TeamUser');
    }

    private function created(TeamUser $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(TeamUser $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(TeamUser $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(TeamUser $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
