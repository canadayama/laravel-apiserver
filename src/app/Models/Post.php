<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array'
    ];

    /**
     * Accessor
     *
     * @return string
     */
    public function getTitleUpperCaseAttribute(): string
    {
        return strtoupper($this->title);
    }

    /**
     * Mutator
     *
     * @param string $value
     * @return void
     */
    public function setTitleAttribute(string $value): void
    {
        $this->attributes['title'] = strtolower($value);
    }


    /**
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(related: Comment::class, foreignKey: 'post_id');
    }

    /**
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
}
