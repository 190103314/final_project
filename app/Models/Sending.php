<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sending extends Model
{
    protected $fillable = ['email', 'fileName', 'message'];
    protected $table = "email";
    use HasFactory;
}
