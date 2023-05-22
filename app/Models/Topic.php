<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'Topics';
    protected $fillable = array('title', 'created_at', 'updated_at');
}
