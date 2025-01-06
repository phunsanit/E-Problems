<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Team;

class TeamObserver
{
    private function createdUpdateAssetCache(Team $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('team_id', 'Team');
    }

    private function created(Team $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(Team $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(Team $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(Team $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
