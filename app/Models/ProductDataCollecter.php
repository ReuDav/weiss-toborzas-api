<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDataCollecter extends Model
{
    protected $table = 'kitolto_adatai';

protected $fillable = [
    'ip_address',
    'user_agent',
    'browser',
    'browser_version',
    'os',
    'platform',
    'language',
    'timezone',
    'online',
    'screen_width',
    'screen_height',
    'color_depth',
    'hardware_concurrency',
    'created_at_client',
];


protected $casts = [
    'is_network_available' => 'boolean',
    'battery_level' => 'float',
    'installation_time' => 'datetime',
    'last_update_time' => 'datetime',
];

}
