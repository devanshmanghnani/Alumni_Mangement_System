<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $tables="profiles";
    protected $fillable=['fname','lname','dob','address','contact','profession','company_name','designation','experience','Year_joined','Year_graduated','gender','profile_image','linkedin_id'];
}
