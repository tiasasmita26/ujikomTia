@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <a href="/TambahDataFoto" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i> Tambah</a>
    </div>
    <div class="card-body">
      <table class="table">
          <tr>
            <th scope="col">FotoID</th>
            <th scope="col">Judul Foto</th>
            <th scope="col">Deskripsi Foto</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Album ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Aksi</th>
          </tr>
          @foreach ($photo as $data)
            <tr>
              <td>{{ $data->FotoID }}</td>
              <td>{{ $data->JudulFoto }}</td>
              <td>{{ $data->DeskripsiFoto }}</td>
              <td>{{ $data->TanggalUnggah}}</td>
              <td>{{ $data->LokasiFile}}</td>
              <td>{{ $data->AlbumID}}</td>
              <td>{{ $data->UserID}}</td> 
              <td>
               {{-- <a href="{{ route('editFoto', $data->FotoId) }}"><button>Edit</button></a> --}}
              <a href=""><button>Hapus</button></a>
              </td>
            </tr>
          @endforeach
      </table>
    </div>
  </div>

@endsection
