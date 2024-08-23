@extends('template.base')
@section('content')

<div class="card">
    <div class="card-body">
        <h3>Data Imunisasi</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr class="bg-primary ">
                    <th class="text-white">No</th>
                    <th class="text-white">Nama Imunisasi</th>
                    <th class="text-white">Lama Imunisasi</th>
                    <th class="text-white">Umur Bayi Imunisasi</th>
                    <th class="text-white">Posyandu Penyedia</th>
                    <th class="text-white">Aksi</th>
                </tr>
            </thead>

            @foreach($list_imunisasi as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ucwords($item->imunisasi_nama)}}</td>
                <td>Per {{$item->imunisasi_lama}} Bulan</td>
                <td>Bulan {{$item->imunisasi_bulan_awal}} - {{$item->imunisasi_bulan_akhir}}</td>
                <td>{{$item->posyandu->posyandu_nama ?? 'Posyandu telah dihapus'}} </td>
                <td> <a href="{{url('subadmin/imunisasi',$item->imunisasi_id)}}/delete" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection