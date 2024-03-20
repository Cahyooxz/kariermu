@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 mt-4">
        <div class="d-flex">
          <h3>Data Guru</h3>
          <a href="/tambah" class="btn button ms-auto"><i class="fa-solid fa-user-plus me-2"></i>Tambah Guru</a>
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="input-group mb-3 mt-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sort By</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">A-Z</a></li>
                  <li><a class="dropdown-item" href="#">Kejuruaan</a></li>
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari guru berdasarkan NIP atau Nama">
              </div>
              <div class="card mt-3" style="height: 25rem">
                <div class="card-body border-none d-flex flex-column justify-content-center align-items-center" style="background-color: #FCFAFA;">
                  <h3 class="text-body-secondary">Data Guru Tidak Ditemukan</h3>
                  <p class="text-body-secondary">Data Guru akan tampil setelah mendaftar</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection