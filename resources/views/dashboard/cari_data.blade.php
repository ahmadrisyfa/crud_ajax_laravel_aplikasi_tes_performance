@extends('template.index')

@section('content')
<div class="pagetitle">
    <h1>Data Peserta</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Peserta</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="row mb-2">
            <div class="col-md-6">
                <form action="{{ url('cari_data') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search"value="{{ request('search') }}" placeholder="Search by name or username">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Peserta</h5>
                

            <!-- Table with stripped rows -->
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Hp</th>
                <th scope="col">TTL</th>
                <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($cari_data) && count($cari_data) > 0)      
            @foreach ($cari_data as $value)          
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->jenis_kelamin}}</td>
                <td>{{$value->no_hp}}</td>
                <td>{{$value->ttl}}</td>
                <td>{{$value->alamat}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm detail-button"
              data-id="{{ $value->id }}" data-bs-toggle="modal"
              data-bs-target="#detailModal">
              Detail
          </button>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align: center">No Result Found.</td>
                </tr>
            @endif

                
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
                <h5 class="modal-title">Detail Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                                               
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Nama</label>
                            <div class="input-group has-validation">
                          <input readonly type="hidden" class="form-control" id="detail_id" name="detail_id">
                              <input type="text" name="name" class="form-control" id="detail_name" required>
                              {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                            </div>
                          </div>                      
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="detail_inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="detail_username" required>
                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                          </div>
                          @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>  
                          @enderror
                        </div>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Tempat Tanggal Lahir</label>
                            <div class="input-group has-validation">
                              <input type="text" name="ttl" class="form-control" id="detail_ttl" required>
                              {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="yourUsername" class="form-label">Nomor Hp</label>
                            <div class="input-group has-validation">
                              <input type="text" name="no_hp" class="form-control" id="detail_no_hp" required>
                              {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="yourUsername" class="form-label">Jenis_kelamin</label>
                            <div class="input-group has-validation">
                              <input type="text" name="detail_jenis_kelamin" class="form-control" id="detail_jenis_kelamin" required>

                              {{-- <select name="jenis_kelamin" id="detail_jenis_kelamin" class="form-select">
                                <option disabled style="text-align: center" selected>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select> --}}
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="yourUsername" class="form-label">Alamat</label>
                            <div class="input-group has-validation">
                              <textarea type="text" name="alamat" class="form-control" id="detail_alamat" required></textarea>
                              {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                            </div>
                          </div>
                        {{-- <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="text" name="password" class="form-control" id="detail_password" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div> --}}
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Usia</label>
                          <div class="input-group has-validation">
                            <input type="text" name="usia" class="form-control" id="detail_usia" required>
                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                          </div>
                        </div>
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Tinggi Badan</label>
                          <div class="input-group has-validation">
                            <input type="text" name="tb" class="form-control" id="detail_tb" required>
                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                          </div>
                        </div>
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Berat Badan</label>
                          <div class="input-group has-validation">
                            <input type="text" name="bb" class="form-control" id="detail_bb" required>
                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                          </div>
                        </div>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
                          </div>
                    {{-- </form> --}}
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {

      $(document).on('click', '.detail-button', function(event) {
            event.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: '{{ url('data_peserta/detail') }}/' + id,
                type: 'GET',
                success: function(data) {
                    $('#detail_id').val(data.id),
                     $("#detail_name").val(data.name),
                     $("#detail_username").val(data.username),
                     $("#detail_ttl").val(data.ttl),
                     $("#detail_no_hp").val(data.no_hp),
                     $("#detail_jenis_kelamin").val(data.jenis_kelamin),
                     $("#detail_alamat").val(data.alamat),
                     $("#detail_usia").val(data.usia),
                     $("#detail_tb").val(data.tb),
                     $("#detail_bb").val(data.bb),
                     $("#detail_password").val(data.password)


                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });


        });
    });
  </script>
@endsection