<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Vessel;

class VesselObserver
{
    public function created(Vessel $vessel)
    {
        AssetCacheController::cacheSelectOptions('vessel_id', 'Vessel');
    }

    public function updated(Vessel $vessel)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('vessel_id', 'Vessel');
    }

    public function deleted(Vessel $vessel)
    {
        AssetCacheController::cacheSelectOptions('vessel_id', 'Vessel');
    }

    public function forceDeleted(Vessel $vessel)
    {
        AssetCacheController::cacheSelectOptions('vessel_id', 'Vessel');
    }
}
