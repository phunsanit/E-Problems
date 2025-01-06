<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\ServiceLine;

class ServiceLineObserver
{
    public function created(ServiceLine $organization)
    {
        AssetCacheController::cacheSelectOptions('service_line_id', 'ServiceLine');
    }

    public function updated(ServiceLine $organization)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('service_line_id', 'ServiceLine');
    }

    public function deleted(ServiceLine $organization)
    {
        AssetCacheController::cacheSelectOptions('service_line_id', 'ServiceLine');
    }

    public function forceDeleted(ServiceLine $organization)
    {
        AssetCacheController::cacheSelectOptions('service_line_id', 'ServiceLine');
    }
}
