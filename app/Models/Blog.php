<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //allow everycolumn in blogs table
    protected $guarded=[];
    //allow specific column in blogs table
    // protected $fillable=['title','intro','body'];
}
