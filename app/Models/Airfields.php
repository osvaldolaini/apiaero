<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airfields extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug','active','headquarter','typeUse','codigoOaci','ciad','name','city','cityServed',
        'state','stateServed', 'altitude','latitude','longitude','latGeoPoint','lonGeoPoint','length',
        'length2','width','width2',  'surface','surface2','designation','designation2','resistence',
        'resistence2','operationDay','operationNight','ordinanceRegistration','ordinanceLink',
        'registrationValidity','status',
    ];

    public function getRouteKeyName(): string
    {
        return 'codigoOaci';
    }
}
