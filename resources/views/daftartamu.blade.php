@extends('layout/main')

@section('container')
<div class="container" style="margin-top: 50px">
        <h1>Daftar Buku Tamu</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
      <th scope="col" width="5"></th>
    </tr>
  </thead>
  <tbody>
  	@foreach( $daftartamu as $dft )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $dft->nama }}</td>
      <td>{{ $dft->alamat  }}</td>
      <td>{{ $dft->email }}</td>
      <td height="30">{{ $dft->pesan }}</td>
      <td>
      	<a href="#" class="badge badge-success">Edit</a>
      	<a href="#" class="badge badge-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection