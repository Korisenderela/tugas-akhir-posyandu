<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class RfidCard extends Model
{
    use HasFactory;
    protected $table = 'rfid_card';
    protected $primaryKey = 'rfid_card_id';


    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    // biar tidak auto increment
    public function getIncrementing(){
        return false;
    }

    // mendevinisikan sebagai string
    public function getKeyType(){
        return 'string';
    }

     function anak(){
        return $this->belongsTo(Anak::class, 'rfid_anak_id');
    }
}
