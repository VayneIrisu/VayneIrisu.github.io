@extends('layout/main')

@section('container')
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Detail Buku Tamu
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $bukutamu->nama }}</li>
    <li class="list-group-item">{{ $bukutamu->alamat }}</li>
    <li class="list-group-item">{{ $bukutamu->email }}</li>
    <li class="list-group-item">{{ $bukutamu->pesan }}</li>
  </ul>
</div>