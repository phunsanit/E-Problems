<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Organization;

class OrganizationObserver
{
    public function created(Organization $organization)
    {
        AssetCacheController::cacheSelectOptions('organization_id', 'Organization');
    }

    public function updated(Organization $organization)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('organization_id', 'Organization');
    }

    public function deleted(Organization $organization)
    {
        AssetCacheController::cacheSelectOptions('organization_id', 'Organization');
    }

    public function forceDeleted(Organization $organization)
    {
        AssetCacheController::cacheSelectOptions('organization_id', 'Organization');
    }
}
