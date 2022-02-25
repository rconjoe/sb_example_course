<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  use HasFactory;

  protected $primaryKey = 'studentId';

  public $incrementing = false;

  protected $fillable = ['studentId', 'firstName', 'lastName', 'email', 'present'];
}
