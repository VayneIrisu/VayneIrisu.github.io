@extends('layout/main')

@section('container')
<div class="container" style="margin-top: 50px">
        <h1>Tulis Buku Tamu Disini</h1>
        <hr />
        
        <form class="form-horizontal" method="post" action="/tamu/index">
        @csrf
            <div class="form-group">
                <label class="col-sm-2 control-label">NAMA LENGKAP</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Fahmi" value="{{ old('nama')  }}">
                    <div class="invalid-feedback">
                        Tolong Masukkan Nama Lengkap Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ALAMAT</label>
                <div class="col-sm-4">
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Jl Teuku Umar" value="{{ old('alamat')  }}">
                    <div class="invalid-feedback">
                        Tolong Masukkan Alamat Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Fahmi@gmail.com" value="{{ old('email')  }}">
                    <div class="invalid-feedback">
                        Tolong Masukkan Email Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ISI PESAN</label>
                <div class="col-sm-8">
                    <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" placeholder="Nulla vitae elit libero, a pharetra augue mollis interdum."></textarea>
                    <div class="invalid-feedback">
                        Tolong Tulis Pesan Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
</div>
@endsection
