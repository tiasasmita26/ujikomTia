@extends('admin.main')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="/TambahAlbum" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i> Tambah Album</a>
    </div>
    <div class="card-body">
      <table class="table">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Album</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">UserID</th>
          </tr>
          @foreach ($album as $data)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $data->NamaAlbum }}</td>
            <td>{{ $data->Deskripsi }}</td>
            <td>{{ $data->TanggalDibuat }}</td>
            <td>{{ $data->UserID }}</td>
          </tr>
          @endforeach
      </table>
    </div>
  </div>

@endsection