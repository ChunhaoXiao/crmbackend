<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Notice extends Model
{
    protected $fillable = [
        'title',
        'content',
        'to_user',
        'from_user',
        'is_viewed',
    ];

    protected $appends = [
        'custom_title',
    ];

    public function getCustomTitleAttribute() {
        
        return Str::limit($this->content, 25);

    }

}
