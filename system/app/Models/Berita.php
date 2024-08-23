<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'berita_id';

    function handleUploadFoto(){
        if (request()->hasFile('foto')) {
            $this->handleDeleteFoto();
            $foto = request('foto');
            $file = request()->file('foto');
            $destination = 'public/app/berita';
            $randomStr = Str::random(5);
            $filename = date('Y-m-d') . "-" . $randomStr . "." . $file->extension();
            $url = $file->move($destination, $filename);
            $this->foto = $filename;
            $this->save;
        }
    }
    function handleDeleteFoto(){
        $foto= $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }


}
