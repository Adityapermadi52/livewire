<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   protected $fillable = ['name', 'email', 'phone_number', 'status'];
}
