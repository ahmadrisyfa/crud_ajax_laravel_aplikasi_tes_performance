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
                <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal">
                    Tambah Data Jadwal Kegiatan
                  </button>
                  @if (session()->has('berhasil'))
                  <div class="alert alert-success alert-dismissible  mt-2" role="alert">
                      {{ session('berhasil') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert"
                          aria-label="Close"></button>
                  </div>
              @endif
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
            @foreach ($jadwal_kegiatan as $value)                    
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->judul}}</td>
                <td>{{$value->deskripsi}}</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm edit-button"
                  data-id="{{ $value->id }}" data-bs-toggle="modal"
                  data-bs-target="#editModal">
                  Edit
              </button>   
              <button type="button" class="btn btn-info btn-sm detail-button"
              data-id="{{ $value->id }}" data-bs-toggle="modal"
              data-bs-target="#detailModal">
              Detail
          </button>            
              <button data-id="{{ $value->id }}"
                  class="delete btn btn-danger btn-sm">Hapus</button>
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
  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Jadwal Kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            @csrf
              <div class="col-12">
                  <label for="yourUsername" class="form-label">Judul</label>
                  <div class="input-group has-validation">
                    
                    <input type="hidden" name="edit_id" class="form-control" id="edit_id" required>

                    <input type="text" name="judul" class="form-control" id="edit_judul" required>
                    {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                  </div>
                </div>                      
              <div class="col-12">
                <label for="yourUsername" class="form-label">Deskripsi</label>
                <div class="input-group has-validation">
                  {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                  <textarea type="text" name="deskripsi" class="form-control" id="edit_deskripsi" required></textarea>
                  {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                </div>            
              </div>
             
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="largeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Jadwal Kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="createForm">
            @csrf
              <div class="col-12">
                  <label for="yourUsername" class="form-label">Judul</label>
                  <div class="input-group has-validation">
                    <input type="text" name="judul" class="form-control" id="judul" required>
                    {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                  </div>
                </div>                      
              <div class="col-12">
                <label for="yourUsername" class="form-label">Deskripsi</label>
                <div class="input-group has-validation">
                  {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                  <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" required></textarea>
                  {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                </div>            
              </div>
             
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
      $(document).ready(function() {


          $("#createForm").submit(function(event) {
              event.preventDefault();

              var data = {
                  "_token": "{{ csrf_token() }}",
                  "judul": $("#judul").val(),
                  "deskripsi": $("#deskripsi").val(),
              };

              $.ajax({
                  url: '{{ route('jadwal_kegiatan.create') }}',
                  type: 'POST',
                  data: data,
                  success: function(response) {
                      alert(response.message);
                      location.reload();
                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
          });
          $(document).on('click', '.detail-button', function(event) {
              event.preventDefault();
              var id = $(this).data('id');

              $.ajax({
                  url: '{{ url('jadwal_kegiatan/detail') }}/' + id,
                  type: 'GET',
                  success: function(data) {
                      $('#detail_id').val(data.id);
                      $('#detail_judul').val(data.judul);
                      $('#detail_deskripsi').val(data.deskripsi);
                    ;


                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
            });
          $(document).on('click', '.edit-button', function(event) {
              event.preventDefault();
              var id = $(this).data('id');

              $.ajax({
                  url: '{{ url('jadwal_kegiatan/edit') }}/' + id,
                  type: 'GET',
                  success: function(data) {
                      $('#edit_id').val(data.id);
                      $('#edit_judul').val(data.judul);
                      $('#edit_deskripsi').val(data.deskripsi);
                    ;


                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });


          });
          $("#editForm").submit(function(event) {
              event.preventDefault();

              var id = $('#edit_id').val();
              var data = {
                  "_token": "{{ csrf_token() }}",
                  "judul": $("#edit_judul").val(),
                  "deskripsi": $("#edit_deskripsi").val(),

              };

              $.ajax({
                  url: '{{ url('jadwal_kegiatan/update') }}/' + id,
                  type: 'PUT',
                  data: data,
                  success: function(response) {
                      alert(response.message);
                      location.reload();

                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
          });

          $(document).on('click', '.delete', function(event) {
              event.preventDefault();
              var id = $(this).data('id');

              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                  $.ajax({
                      url: '{{ url('jadwal_kegiatan/delete') }}/' + id,

                      type: 'get',
                      data: {
                          "_token": "{{ csrf_token() }}"
                      },
                      success: function(response) {
                          alert(response.message);
                          location.reload();
                      },
                      error: function(xhr) {
                          console.log(xhr.responseText);
                      }
                  });
              }
          });

      });
  </script>
@endsection