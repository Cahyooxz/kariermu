@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 mt-4">
      <h4>Tambah Guru</h4>
      <form action="">
        <div class="row mb-3 mt-5">
          <div class="col-12">
            <label for="nama" class="text-secondary mb-3">Nama Lengkap</label>
            <div class="input-group">
              <input type="text" class="form-control" id="nama">
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
            <label for="email" class="text-secondary mb-3">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email">
            </div>
          </div>
          <div class="col-6">
            <label for="mapel" class="text-secondary mb-3">Mata Pelajaran</label>
            <select class="form-select form-select-sm py-2 mb-3" aria-label="Small select example" id="mapel">
              <option selected>Open this select menu</option>
              <option value="1">Matematika</option>
              <option value="2">Agama</option>
              <option value="3">Bahasa Indonesia</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <label for="password" class="text-secondary mb-3">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password">
            </div>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button type="submit" class="btn px-3 btn-primary">Submit</button>
          <button type="reset" class="btn px-3 btn-danger">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection