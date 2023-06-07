<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['name','category','description','client','url','image','detailsImage'];

    public function getCreatedAtAttribute($value)
    {
        return date('d F Y', strtotime($value));
    }
}
