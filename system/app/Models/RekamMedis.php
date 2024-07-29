<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class RekamMedis extends Model
{
    use HasFactory;
    protected $table = 'rekam_medis';
    protected $primaryKey = 'rekam_medis_id';


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
        return $this->belongsTo(Anak::class, 'rekam_medis_anak_id');
    }

    function ortu(){
        return $this->belongsTo(OrangTua::class, 'rekam_medis_ortu_id');
    }

     function imunisasi(){
        return $this->belongsTo(Imunisasi::class, 'rekam_medis_imunisasi_id');
    }

     function posyandu(){
        return $this->belongsTo(Posyandu::class, 'rekam_medis_pos_id');
    }

    function admin0(){
        return $this->belongsTo(Admin::class, 'rekam_medis_meja_0');
    }

    function admin1(){
        return $this->belongsTo(Admin::class, 'rekam_medis_meja_1');
    }

    function admin2(){
        return $this->belongsTo(Admin::class, 'rekam_medis_meja_2');
    }

    function admin3(){
        return $this->belongsTo(Admin::class, 'rekam_medis_meja_3');
    }
}
