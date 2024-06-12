<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;

    protected $table = 'emails';

    protected $fillable = [
        'id', 'text', 'title', 'send_by', 'created_at','send_by','active',
        'response','response_at','response_by'
    ];

    public function getCreatedAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
            ->format('d/m/Y H:i:s');
    }

    public function getUpdatedAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)
            ->format('d/m/Y H:i:s');
    }

};
