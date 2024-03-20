@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 mt-4">
        <div class="d-flex">
          <h4>Data Guru</h4>
          <a href="/guru/tambah" class="py-1 px-3 text-center align-items-center d-flex rounded text-decoration-none button ms-auto"><i class="fa-solid fa-user-plus me-2"></i>Tambah Guru</a>
        </div>
        <div class="container">
          <div class="row">
            <div class="col p-0">
              <div class="input-group mb-3 mt-3">
                <div class="dropdown">
                  <button class="btn dropdown-toggle ps-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort by
                  </button>
                  <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">A-Z</button></li>
                    <li><button class="dropdown-item" type="button">Z-A</button></li>
                    <li><button class="dropdown-item" type="button">Kejuruan</button></li>
                  </ul>
                </div>
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