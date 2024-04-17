@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <a href="/TambahDataFoto" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i> Tambah</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">FotoID</th>
            <th scope="col">Judul Foto</th>
            <th scope="col">Deskripsi Foto</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Album ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>ahhaha</td>
            <td>jajajaja</td>
            <td>kakakakak</td>
            <td>jajajaja</td>
            <td>jajajajaj</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Lala</td>
            <td>haha</td>
            <td>@mdi</td>
            <td>ahhaha</td>
            <td>jajajaja</td>
            <td>kakakakak</td>
            <td>jajajaja</td>
            <td>jajajajaj</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
