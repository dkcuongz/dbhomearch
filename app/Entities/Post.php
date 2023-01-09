<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Post extends Model implements Transformable
{
    use TransformableTrait, HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'post_id');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'post_id');
    }
}
