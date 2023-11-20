@extends('Template.index')
@section('content')
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-4">
        <div class="card info-card sales-card">
          

          <div class="card-body">
            <h5 class="card-title">Profil Anda </h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="ps-3">
                 {{-- <h6>{{$pelatih}}</h6>  --}}
                 <a href="{{url('profile')}}" style="font-weight: bold">View Detail</a>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Sales Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
          

          <div class="card-body">
            <h5 class="card-title">Nilai Anda</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-sort-numeric-up-alt"></i>
              </div>
              <div class="ps-3">
                 {{-- <h6>{{$laki_laki}}</h6> --}} 
                 <a href="{{url('data_nilai_peserta')}}" style="font-weight: bold">View Detail</a>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Revenue Card -->
      <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            

            <div class="card-body">
              <h5 class="card-title">Jadwal Kegiatan</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-archive-fill"></i>
                </div>
                <div class="ps-3">
                   {{-- <h6>{{$perempuan}}</h6> --}} 
                   <a href="{{url('jadwal_kegiatan_user')}}" style="font-weight: bold">View Detail</a>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->
        
        <div class="col-xxl-12 col-md-12">
          <div class="card info-card sales-card">
            
  
            <div class="card-body">
              <h5 class="card-title">Reset Password</h5>
  
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-eye-slash-fill"></i>
                </div>
                <div class="ps-3">
                   {{-- <h6>{{$peserta_aktif}}</h6> --}} 
                   <a href="{{url('profile')}}" style="font-weight: bold">View Detail</a>
  
                </div>
              </div>
            </div>
  
          </div>
        </div>

    </div>
  </div>
</div>
</section>
@endsection