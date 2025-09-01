<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class Hospital extends Model
{
    protected $fillable = ['name','address','email','phone'];

    public function patients() {
        return $this->hasMany(Patient::class);
    }
}
