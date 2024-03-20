@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="d-flex justify-content-between">
        <h4 class="h4">Welcome To Admin Dashboard SMKN 4 Tangerang</h4>
      </div>
      <div class="row mt-5 d-flex justify-content-center px-0 px-lg-3 px-xl-1">
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-graduation-cap a-icon"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Siswa</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">1.600</h1>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-chalkboard-user"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Guru</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">120</h1>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-briefcase"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Data Karir</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">1.600</h1>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-chart-column"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Data Nilai</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">3K</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
