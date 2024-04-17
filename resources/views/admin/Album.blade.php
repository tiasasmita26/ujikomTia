@extends('admin.main')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="/TambahAlbum" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i> Tambah</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Album</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">UserID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>ahhaha</td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>

@endsection