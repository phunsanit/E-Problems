<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AssetCacheChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct($key)
    {
        // Instantiate the AssetCacheController
        $controller = new AssetCacheController();

        // Call the SelectOptions method
        $response = $controller->SelectOptions(['key' => $key]);

        // Handle the response as needed
        if ($response->successful()) {
            \Log::info('Asset update was successful for key: ' . $key);
        } else {
            \Log::error('Asset update failed for key: ' . $key);
        }
    }
}