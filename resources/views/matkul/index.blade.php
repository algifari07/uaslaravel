@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Table Data Matkul</b></div>

                <div class="card-body">
                <a href="{{ route('tambah_matkul') }}" class="btn btn-primary btn-md float-right">Tambah Data</a><br><br>
                
                    <div class="table-responsive">
                    <table class="table table-bordered">
                            <tr class="bg-light">
                                <th style="text-align:center;">No</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th style="width:150px; text-align:center;">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($matkul as $mtk)  
                            <tr>
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td>{{ $mtk->kode_matkul }}</td>
                                <td>{{ $mtk->nama_matkul }}</td>
                                <td>{{ $mtk->sks }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_matkul', $mtk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_matkul', $mtk->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
