<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = "StudentId";
    protected $table = "student";

    protected $fillable = [ "StudentId","FullName","FatherName","Gender","Class","Address","created_at","updated_at" ];
}
