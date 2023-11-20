@extends('template.index')

@section('content')
<div class="pagetitle">
    <h1>Data Jadwal Kegiatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Jadwal Kegiatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Data Jadwal Kegiatan</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>       
                <th scope="col">Aksi</th>     
                </tr>
            </thead>
            <tbody>
            @foreach ($jadwal_kegiatan_user as $value)                    
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->judul}}</td>
                <td>{{$value->deskripsi}}</td>
                <td>
                  <button type="button" class="btn btn-info btn-sm detail-button"
                  data-id="{{ $value->id }}" data-bs-toggle="modal"
                  data-bs-target="#detailModal">
                  Detail
              </button> 
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

  <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Jadwal Kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- <form id="editForm">
            @csrf --}}
              <div class="col-12">
                  <label for="yourUsername" class="form-label">Judul</label>
                  <div class="input-group has-validation">
                    
                    <input type="hidden" name="detail_id" class="form-control" id="detail_id" required>

                    <input type="text" name="detail_judul" class="form-control" id="detail_judul" required>
                    {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                  </div>
                </div>                      
              <div class="col-12">
                <label for="yourUsername" class="form-label">Deskripsi</label>
                <div class="input-group has-validation">
                  {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                  <textarea type="text" name="detail_deskripsi" class="form-control" id="detail_deskripsi" required></textarea>
                  {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                </div>            
              </div>
             
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form> --}}
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>

    $(document).on('click', '.detail-button', function(event) {
              event.preventDefault();
              var id = $(this).data('id');

              $.ajax({
                  url: '{{ url('jadwal_kegiatan_user/detail') }}/' + id,
                  type: 'GET',
                  success: function(data) {
                      $('#detail_id').val(data.id);
                      $('#detail_judul').val(data.judul);
                      $('#detail_deskripsi').val(data.deskripsi);
                    


                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
            });
  </script>
@endsection