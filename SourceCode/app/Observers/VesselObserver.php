<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Vessel;

class VesselObserver
{
    private function createdUpdateAssetCache(Vessel $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('vessel_id', 'Vessel');
    }

    private function created(Vessel $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(Vessel $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(Vessel $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(Vessel $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
