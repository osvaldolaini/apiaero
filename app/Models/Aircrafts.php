<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Aircrafts extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $fillable = [
        'slug', 'active', 'group', 'type', 'manufacturer', 'prefix', 'code_icao', 'tug',
        'widescreen', 'simulator', 'seat', 'crew', 'serial', 'since', 'owner', 'operator',
        'weight'
    ];
    public function getRouteKeyName(): string
    {
        return 'prefix';
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable);
    }
}
