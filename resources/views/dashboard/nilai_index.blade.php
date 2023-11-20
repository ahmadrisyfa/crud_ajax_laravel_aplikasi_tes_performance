@extends('template.index')

@section('content')
<div class="pagetitle">
    <h1>Data Nilai Anda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Nilai Anda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Data Nilai Anda</h5>
            <a  href="{{url('input_data_nilai/create')}}" class="btn btn-success" >
                Tambah Data Nilai
            </a>
            <!-- Table with stripped rows -->
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai Lari</th>
                <th scope="col">Nilai Pull Up</th>            
                <th class="col">Nilai Sit Up</th>
                <th class="col">Nilai Push Up</th>
                <th class="col">Nilai Shuttle Run</th>
                <th class="col">Nilai Renang Gaya Dada</th>
                <th class="col">Nilai Renang Gaya Bebas</th>
                <th class="col">Nilai Garjas A</th>
                <th class="col">Nilai Garjas B</th>
                <th class="col">Total Nilai Garjas</th>
                <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($nilai as $value)                    
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->tanggal}}</td>
                <td>{{$value->user->name}}</td>
                <td>{{$value->hasil_nilai_lari}}</td>
                <td>{{$value->hasil_nilai_pull_up}}</td>
                <td>{{$value->hasil_nilai_sit_up}}</td>
                <td>{{$value->hasil_nilai_push_up}}</td>
                <td>{{$value->hasil_nilai_shuttle_run}}</td>
                <td>{{$value->hasil_nilai_renang_dada}}</td>
                <td>{{$value->hasil_nilai_renang_bebas}}</td>
                <td>{{$value->nilai_garjas_A}}</td>
                <td>{{$value->nilai_garjas_B}}</td>
                <td>{{$value->total_nilai_garjas}}</td>
                <td>
                    <a href="{{url('input_data_nilai/edit/'.$value->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{url('input_data_nilai/detail/'.$value->id)}}" class="btn btn-primary">detail</a>

                    <a href="{{url('input_data_nilai/delete/'.$value->id)}}" class="btn btn-danger">Hapus</a>

                </td>
            </tr>
            @endforeach

                
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

            </div>
        </div>    
    </div>
    </div>
  </section>
@endsection