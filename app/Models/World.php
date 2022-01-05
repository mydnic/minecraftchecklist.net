<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'default'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function objectives()
    {
        return $this->belongsToMany(Objective::class);
    }

    public function setAsDefault()
    {
        $this->user->worlds()->update(['default' => false]);

        $this->update(['default' => true]);
    }
}
