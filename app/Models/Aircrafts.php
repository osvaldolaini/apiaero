<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircrafts extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug', 'active', 'group', 'type', 'manufacturer', 'prefix', 'code_icao', 'tug',
        'widescreen', 'simulator', 'seat', 'crew', 'serial', 'since', 'owner', 'operator',
        'weight'
    ];
    public function getRouteKeyName(): string
    {
        return 'prefix';
    }
}
