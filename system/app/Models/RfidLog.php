<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class RfidLog extends Model
{
  use HasFactory;
  protected $table = 'rfid_log';
  protected $fillable = ["rfid"];

}
