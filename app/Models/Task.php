<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // public getRouteKeyName() {
    //     return 'slug';
    // }

    protected $fillable = ['title', 'description', 'long_description'];
    //protected $gaurded = [];

    public function toggleComplete() {
        $this->completed  = !$this->completed;
        $this->save();
    }
}


