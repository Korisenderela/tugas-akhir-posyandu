<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Posyandu extends Model
{
    use HasFactory;
    protected $table = 'posyandu';
    protected $primaryKey = 'posyandu_id';


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


    function handleUploadFoto(){
        if(request()->hasFile('posyandu_foto')){
            $this->handleDeleteFoto();
            $foto = request()->file('posyandu_foto');
            $destination = "posyandu";
            $randomStr = Str::random(5);
            $filename = "p-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->posyandu_foto = "app/".$url;
            $this->save;
        }
    }
    function handleDeleteFoto(){
        $foto= $this->posyandu_foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
}
