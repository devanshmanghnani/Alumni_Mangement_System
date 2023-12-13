<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnidetail extends Model
{
    use HasFactory;

protected $table = 'alumni_details';
protected $fillable = ['name','email','password'];
protected $primaryKey ="u_id";

}
