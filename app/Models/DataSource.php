<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSource extends Model
{
    public function scopeSrc($query, $type) {
        return $query->where('data_model', $type);
    }
}
