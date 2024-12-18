<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Dashboard extends Component
{
    public function render()
    {
        Log::info('Dashboard component rendered');
        Log::debug('Some variable:', ['variable' => $someVariable]);
        return view('livewire.dashboard');
    }
}
