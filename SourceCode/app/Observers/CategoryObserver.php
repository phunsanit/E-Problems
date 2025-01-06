<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Category;

class CategoryObserver
{
    private function createdUpdateAssetCache(Category $item)
    {
        $controller = new AssetCacheController();

        $controller->cacheSelectOptions('category_id', 'Category');
    }

    private function created(Category $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function deleted(Category $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function forceDeleted(Category $item)
    {
        $this->createdUpdateAssetCache($item);
    }

    public function updated(Category $item)
    {
        $this->createdUpdateAssetCache($item);
    }
}
