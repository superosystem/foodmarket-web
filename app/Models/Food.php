<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Food extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'picture_path', 'name', 'description', 'ingredients', 'price', 'rate', 'types'
    ];

    public function toArray()
    {
        $toArray = parent::toArray();
        $toArray['picture_path'] = $this->picture_path;
        return $toArray;
    }

    public function getCreatedAtAttribute($created_at)
    {
        return Carbon::parse($created_at)
            ->getPreciseTimestamp(3);
    }
    public function getUpdatedAtAttribute($updated_at)
    {
        return Carbon::parse($updated_at)
            ->getPreciseTimestamp(3);
    }
    public function getPicturePathAttribute()
    {
        return config('app.url') . Storage::url($this->attributes['picture_path']);
    }
}
