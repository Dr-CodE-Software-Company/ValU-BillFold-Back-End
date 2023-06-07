<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ContactUs extends Model
{
    use HasFactory;

    protected $fillable  =['email','street','address','description','facebook','instagram','twitter','linkedin','tiktok','phone','AppleStore','PlayStore'];
}
