<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class SettingsComposer
{
    public function compose(View $view)
    {
        // ✅ Fetch settings from your API (same as home controller)
        try {
            $response = Http::timeout(5)->get(config('api.base_url') . '/home');
            $data = $response->successful() ? $response->json() : [];
            $settings = $data['settings'] ?? null;
        } catch (\Exception $e) {
            $settings = null;
        }
        
        $view->with('settings', $settings);
    }
}