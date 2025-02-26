<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NumberMain extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['code', 'title', 'content', 'content_detail'];
}
