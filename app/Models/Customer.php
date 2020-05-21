<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function level() {
        return $this->belongsTo(DataSource::class, 'customer_level');
    }

    public function source() {
        return $this->belongsTo(DataSource::class, 'source_id');
    }

    public function industry() {
        return $this->belongsTo(DataSource::class, 'industry_id');
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    public function getPicturelistAttribute() {
        return $this->pictures->map(function($item) {
            return asset('Storage/'.$item);
        });
    }
}
