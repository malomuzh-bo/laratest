<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'Blocks';
    protected $fillable = array('block_name', 'info', 'topicId', 'created_at', 'updated_at');
}
