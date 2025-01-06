<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Organization;

class OrganizationObserver
{
    private function createdUpdateAssetCache(Organization $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('organization_id', 'Organization');
    }

    private function created(Organization $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(Organization $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(Organization $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(Organization $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
