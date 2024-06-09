<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Airfields extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $fillable = [
        'slug','active','headquarter','typeUse','codigoOaci','ciad','name','city','cityServed',
        'state','stateServed', 'altitude','latitude','longitude','latGeoPoint','lonGeoPoint','length',
        'length2','width','width2',  'surface','surface2','designation','designation2','resistence',
        'resistence2','operationDay','operationNight','ordinanceRegistration','ordinanceLink',
        'registrationValidity','status','updated_at'
    ];
    public function getAtualizedAttribute()
    {
        if ($this->updated_at != "") {
            return Carbon::parse( $this->updated_at)->format('d/m/Y H:i:s');
        }
    }

    public function getRouteKeyName(): string
    {
        return 'codigoOaci';
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable);
    }
}
