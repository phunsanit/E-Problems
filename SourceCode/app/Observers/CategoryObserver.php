<?php

namespace App\Observers;

use App\Http\Controllers\AssetCacheController;
use App\Models\Category;

class CategoryObserver
{
    public function created(Category $category)
    {
        AssetCacheController::cacheSelectOptions('category_id', 'Category');
    }

    public function updated(Category $category)
    {
        $controller = new AssetCacheController(); // Create an instance of the controller
        $controller->cacheSelectOptions('category_id', 'Category');
    }

    public function deleted(Category $category)
    {
        AssetCacheController::cacheSelectOptions('category_id', 'Category');
    }

    public function forceDeleted(Category $category)
    {
        AssetCacheController::cacheSelectOptions('category_id', 'Category');
    }
}
