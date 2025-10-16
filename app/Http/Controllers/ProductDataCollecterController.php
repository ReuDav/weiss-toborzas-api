<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDataCollecter;

class ProductDataCollecterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'nullable|string',

            // 📱 Mobile fields
            'brand' => 'nullable|string',
            'manufacturer' => 'nullable|string',
            'modelName' => 'nullable|string',
            'designName' => 'nullable|string',
            'productName' => 'nullable|string',
            'osName' => 'nullable|string',
            'osVersion' => 'nullable|string',
            'deviceType' => 'nullable|integer',
            'supportedCpuArchitectures' => 'nullable|array',
            'nativeAppVersion' => 'nullable|string',
            'nativeBuildVersion' => 'nullable|string',
            'installationTime' => 'nullable|date',
            'lastUpdateTime' => 'nullable|date',
            'batteryLevel' => 'nullable|numeric',
            'batteryState' => 'nullable|integer',
            'ipAddress' => 'nullable|string',
            'isNetworkAvailable' => 'nullable|boolean',
            'expoVersion' => 'nullable|string',
            'deviceYearClass' => 'nullable|integer',

            // 🌐 Web fields
            'userAgent' => 'nullable|string',
            'browser' => 'nullable|string',
            'browserVersion' => 'nullable|string',
            'os' => 'nullable|string',
            'screenWidth' => 'nullable|integer',
            'screenHeight' => 'nullable|integer',
            'language' => 'nullable|string',
            'timezone' => 'nullable|string',
            'hardwareConcurrency' => 'nullable|integer',
            'deviceMemory' => 'nullable|integer',
            'online' => 'nullable|boolean',
        ]);

        $data = [
            'platform' => $validated['platform'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'manufacturer' => $validated['manufacturer'] ?? null,
            'model_name' => $validated['modelName'] ?? null,
            'design_name' => $validated['designName'] ?? null,
            'product_name' => $validated['productName'] ?? null,
            'os_name' => $validated['osName'] ?? null,
            'os_version' => $validated['osVersion'] ?? null,
            'device_type' => $validated['deviceType'] ?? null,
            'supported_cpu_architectures' => isset($validated['supportedCpuArchitectures'])
                ? json_encode($validated['supportedCpuArchitectures'])
                : null,
            'native_app_version' => $validated['nativeAppVersion'] ?? null,
            'native_build_version' => $validated['nativeBuildVersion'] ?? null,
            'installation_time' => $validated['installationTime'] ?? null,
            'last_update_time' => $validated['lastUpdateTime'] ?? null,
            'battery_level' => $validated['batteryLevel'] ?? null,
            'battery_state' => $validated['batteryState'] ?? null,
            'ip_address' => $validated['ipAddress'] ?? null,
            'is_network_available' => $validated['isNetworkAvailable'] ?? false,
            'expo_version' => $validated['expoVersion'] ?? null,
            'device_year_class' => $validated['deviceYearClass'] ?? null,

            // 🌐 Web
            'user_agent' => $validated['userAgent'] ?? null,
            'browser' => $validated['browser'] ?? null,
            'browser_version' => $validated['browserVersion'] ?? null,
            'os' => $validated['os'] ?? null,
            'screen_width' => $validated['screenWidth'] ?? null,
            'screen_height' => $validated['screenHeight'] ?? null,
            'language' => $validated['language'] ?? null,
            'timezone' => $validated['timezone'] ?? null,
            'hardware_concurrency' => $validated['hardwareConcurrency'] ?? null,
            'device_memory' => $validated['deviceMemory'] ?? null,
            'online' => $validated['online'] ?? null,
        ];

        $record = ProductDataCollecter::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Device data stored successfully.',
            'data' => $record,
        ], 201);
    }
}
