<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drive extends Model
{
    use HasFactory;
    protected $table="drivers";
    protected $primaryKey="driver_id";
    public $timestamps=false;
}
