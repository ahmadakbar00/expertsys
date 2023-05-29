<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObject extends Model
{
    use HasFactory;

    protected $table = 'data_object';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'object_name',
        'object_result',
        'object_rules',
        'object_desc'
    ];

}
