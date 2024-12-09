<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AlertController extends Controller
{
    public function incrementAlert(Request $request)
    {
        $fireCount = $request->input('fire_count', 0);
        $smokeCount = $request->input('smoke_count', 0);

        Cache::increment('fire_alerts', $fireCount);
        Cache::increment('smoke_alerts', $smokeCount);

        return response()->json([
            'message' => 'Alert counts updated successfully!',
            'fire_alerts' => Cache::get('fire_alerts', 0),
            'smoke_alerts' => Cache::get('smoke_alerts', 0),
        ]);
    }
}
