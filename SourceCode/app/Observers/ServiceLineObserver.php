<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\ServiceLine;

class ServiceLineObserver
{
    private function createdUpdateAssetCache(ServiceLine $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('service_line_id', 'ServiceLine');
    }

    private function created(ServiceLine $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(ServiceLine $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(ServiceLine $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(ServiceLine $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
