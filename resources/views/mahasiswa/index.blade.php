@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Table Data Mahasiswa</b></div>

                <div class="card-body">
                <a href="{{ route('tambah_mahasiswa') }}" class="btn btn-primary btn-md float-right">Tambah Data</a><br><br>
                    <div class="table-responsive">
                    <table class="table table-bordered">
                            <tr class="bg-light">
                                <th style="text-align:center;">No</th>
                                <th>Nama Lengkap</th>
                                <th>NPM</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Jenis Kelamin</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($mahasiswa as $mhs)  
                            <tr>
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir  }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_mahasiswa', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_mahasiswa', $mhs->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
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
