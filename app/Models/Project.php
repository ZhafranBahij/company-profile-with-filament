<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function created_by()
    {
        $this->belongsTo(User::class);
    }

    public function updated_by()
    {
        $this->belongsTo(User::class);
    }
}
