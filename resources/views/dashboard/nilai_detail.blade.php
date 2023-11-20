@extends('template.index')

@section('content')
<div class="pagetitle">
    <h1>Input Nilai Peserta</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Input Nilai</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section profile">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

              {{-- <form action="{{url('input_data_nilai/'.$nilai->id)}}" method="POST">
                @csrf
                @method('PUT') --}}
      <div class="col-12 mt-2">
          <label for="yourUsername" class="form-label">Nama Peserta</label>
          <div class="input-group has-validation">
            <select name="user_id" id="user_id" class="form-select" required>
              <option disabled selected style="text-align:center">-- Pilih Peserta --</option>
                @foreach ($user as $value)
                    <option value="{{ $value->id }}" {{ $value->id == $nilai->user_id ? 'selected' : '' }}>
                        {{ $value->name }}
                    </option>
                @endforeach
            
            </select>
          </div>
        </div>   
        <div class="col-12">
          <label for="yourUsername" class="form-label mt-2">Jenis Kelamin Peserta</label>
          <div class="input-group has-validation">
            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" readonly >

          </div>
        </div>
        <div class="col-12">
          <label for="yourUsername" class="form-label mt-2">Tanggal</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->tanggal}}" type="date" name="tanggal" class="form-control" required id="tanggal"  >

          </div>
        </div>                       
      {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> <b>Nilai Garjas A</b> <br>Nilai Lari</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_lari}}" type="number" name="nilai_lari" class="form-control" id="nilai_lari"  >
          </div>
        </div> --}}
        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Lari</b> </label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_lari}}" type="text" name="hasil_nilai_lari" class="form-control" id="hasil_nilai_lari">
          </div>
        </div>  
        
        
        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Pull Up</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_pull_up}}" type="number" name="nilai_pull_up" class="form-control" id="nilai_pull_up"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Pull Up</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_pull_up}}" type="text" name="hasil_nilai_pull_up" class="form-control" id="hasil_nilai_pull_up">
          </div>
        </div>


        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Sit Up</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_sit_up}}" type="number" name="nilai_sit_up" class="form-control" id="nilai_sit_up"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Sit Up</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_sit_up}}" type="text" name="hasil_nilai_sit_up" class="form-control" id="hasil_nilai_sit_up">
          </div>
        </div>

        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Push Up</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_push_up}}" type="number" name="nilai_push_up" class="form-control" id="nilai_push_up"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Push Up</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_push_up}}" type="text" name="hasil_nilai_push_up" class="form-control" id="hasil_nilai_push_up">
          </div>
        </div>



        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Shuttle Run</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_shuttle_run}}" type="number" name="nilai_shuttle_run" class="form-control" id="nilai_shuttle_run"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Shuttle Run</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_shuttle_run}}" type="text" name="hasil_nilai_shuttle_run" class="form-control" id="hasil_nilai_shuttle_run">
          </div>
        </div>




        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Renang Gaya Dada</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_renang_dada}}" type="number" name="nilai_renang_dada" class="form-control" id="nilai_renang_dada"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Renang Gaya Dada</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_renang_dada}}" type="text" name="hasil_nilai_renang_dada" class="form-control" id="hasil_nilai_renang_dada">
          </div>
        </div>

        
        {{-- <div class="col-12">
          <label for="yourUsername" class="form-label mt-2"> Nilai Renang Gaya Bebas</label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_renang_bebas}}" type="number" name="nilai_renang_bebas" class="form-control" id="nilai_renang_bebas"  >
          </div>          
        </div> --}}

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Hasil Nilai Renang Gaya Bebas</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->hasil_nilai_renang_bebas}}" type="text" name="hasil_nilai_renang_bebas" class="form-control" id="hasil_nilai_renang_bebas">
          </div>
        </div>

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Nilai Garjas A</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_garjas_A}}" type="text" name="nilai_garjas_A" class="form-control" id="nilai_garjas_A">
          </div>
        </div>

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Nilai Garjas B</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->nilai_garjas_B}}" type="text" name="nilai_garjas_B" class="form-control" id="nilai_garjas_B">
          </div>
        </div>

        <div class="col-12">
          <label for="yourUsername" class="form-label"><b>Total Nilai Garjas</b></label>
          <div class="input-group has-validation">
            <input value="{{$nilai->total_nilai_garjas}}" type="text" name="total_nilai_garjas" class="form-control" id="total_nilai_garjas">
          </div>
        </div>


        <div class="modal-footer mt-2 p-2">
          <button type="reset" class="btn btn-secondary">Reset</button>
          {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
          </div>
          </div>
  {{-- </form> --}}
      {{-- Jenis kelamin  --}}
  <script>
    function updateJenisKelamin() {
      var userId = document.getElementById('user_id').value;
  
      @foreach ($user as $value)
        if ('{{$value->id}}' == userId) {
          document.getElementById('jenis_kelamin').value = '{{$value->jenis_kelamin}}';
        }
      @endforeach
    }
  
    document.getElementById('user_id').addEventListener('change', updateJenisKelamin);
  
  </script>
     {{-- Lari
      <script>
        function calculateHasilNilai(nilaiLari, jenisKelamin) {
          if (nilaiLari >= 0 && nilaiLari <= 1625 && jenisKelamin === 'Laki-Laki') {
              return 0;
            }else if (nilaiLari >= 0 && nilaiLari <= 1356 && jenisKelamin === 'Perempuan') {
              return 0;
            }else if (nilaiLari >= 1626 && nilaiLari <= 1644 && jenisKelamin === 'Laki-Laki') {
              return 1;
            } else if (nilaiLari >= 1357 && nilaiLari <= 1371 && jenisKelamin === 'Perempuan') {
              return 1;
            }else if (nilaiLari >= 1645 && nilaiLari <= 1663 && jenisKelamin === 'Laki-Laki') {
              return 2;
            } else if (nilaiLari >= 1372 && nilaiLari <= 1386 && jenisKelamin === 'Perempuan') {
              return 2;
            }else if (nilaiLari >= 1664 && nilaiLari <= 1682 && jenisKelamin === 'Laki-Laki') {
              return 3;
            } else if (nilaiLari >= 1387 && nilaiLari <= 1401 && jenisKelamin === 'Perempuan') {
              return 3;
            }else if (nilaiLari >= 1683 && nilaiLari <= 1701 && jenisKelamin === 'Laki-Laki') {
              return 4;
            } else if (nilaiLari >= 1402 && nilaiLari <= 1416 && jenisKelamin === 'Perempuan') {
              return 4;
            }else if (nilaiLari >= 1702 && nilaiLari <= 1720 && jenisKelamin === 'Laki-Laki') {
              return 5;
            } else if (nilaiLari >= 1417 && nilaiLari <= 1431 && jenisKelamin === 'Perempuan') {
              return 5;
            }else if (nilaiLari >= 1721 && nilaiLari <= 1739 && jenisKelamin === 'Laki-Laki') {
              return 6;
            } else if (nilaiLari >= 1432 && nilaiLari <= 1446 && jenisKelamin === 'Perempuan') {
              return 6;
            }else if (nilaiLari >= 1740 && nilaiLari <= 1758 && jenisKelamin === 'Laki-Laki') {
              return 7;
            } else if (nilaiLari >= 1447 && nilaiLari <= 1476 && jenisKelamin === 'Perempuan') {
              return 7;
            }else if (nilaiLari >= 1759 && nilaiLari <= 1777 && jenisKelamin === 'Laki-Laki') {
              return 8;
            } else if (nilaiLari >= 1477 && nilaiLari <= 1491 && jenisKelamin === 'Perempuan') {
              return 8;
            }else if (nilaiLari >= 1664 && nilaiLari <= 1682 && jenisKelamin === 'Laki-Laki') {
              return 9;
            } else if (nilaiLari >= 1778 && nilaiLari <= 1506 && jenisKelamin === 'Perempuan') {
              return 9;
            }else if (nilaiLari >= 1797 && nilaiLari <= 1815 && jenisKelamin === 'Laki-Laki') {
              return 10;
            } else if (nilaiLari >= 1507 && nilaiLari <= 1521 && jenisKelamin === 'Perempuan') {
              return 10;
            }else if (nilaiLari >= 1816 && nilaiLari <= 1834 && jenisKelamin === 'Laki-Laki') {
              return 11;
            } else if (nilaiLari >= 1522 && nilaiLari <= 1536 && jenisKelamin === 'Perempuan') {
              return 11;
            }else if (nilaiLari >= 1835 && nilaiLari <= 1853 && jenisKelamin === 'Laki-Laki') {
              return 12;
            } else if (nilaiLari >= 1537 && nilaiLari <= 1551 && jenisKelamin === 'Perempuan') {
              return 12;
            }else if (nilaiLari >= 1854 && nilaiLari <= 1872 && jenisKelamin === 'Laki-Laki') {
              return 13;
            } else if (nilaiLari >= 1551 && nilaiLari <= 1566 && jenisKelamin === 'Perempuan') {
              return 13;
            }else if (nilaiLari >= 1873 && nilaiLari <= 1891 && jenisKelamin === 'Laki-Laki') {
              return 14;
            } else if (nilaiLari >= 1567 && nilaiLari <= 1581 && jenisKelamin === 'Perempuan') {
              return 14;
            }else if (nilaiLari >= 1892 && nilaiLari <= 1910 && jenisKelamin === 'Laki-Laki') {
              return 15;
            } else if (nilaiLari >= 1582 && nilaiLari <= 1596 && jenisKelamin === 'Perempuan') {
              return 15;
            }else if (nilaiLari >= 1911 && nilaiLari <= 1929 && jenisKelamin === 'Laki-Laki') {
              return 16;
            } else if (nilaiLari >= 1597 && nilaiLari <= 1611 && jenisKelamin === 'Perempuan') {
              return 16;
            }else if (nilaiLari >= 1930 && nilaiLari <= 1948 && jenisKelamin === 'Laki-Laki') {
              return 17;
            } else if (nilaiLari >= 1612 && nilaiLari <= 1626 && jenisKelamin === 'Perempuan') {
              return 17;
            }else if (nilaiLari >= 1949 && nilaiLari <= 1815 && jenisKelamin === 'Laki-Laki') {
              return 18;
            } else if (nilaiLari >= 1627 && nilaiLari <= 1521 && jenisKelamin === 'Perempuan') {
              return 18;
            }else if (nilaiLari >= 1968 && nilaiLari <= 1986 && jenisKelamin === 'Laki-Laki') {
              return 19;
            } else if (nilaiLari >= 1642 && nilaiLari <= 1666 && jenisKelamin === 'Perempuan') {
              return 19;
            }else if (nilaiLari >= 1987 && nilaiLari <= 2005 && jenisKelamin === 'Laki-Laki') {
              return 20;
            } else if (nilaiLari >= 1667 && nilaiLari <= 1671 && jenisKelamin === 'Perempuan') {
              return 20;
            }else if (nilaiLari >= 2006 && nilaiLari <= 2024 && jenisKelamin === 'Laki-Laki') {
              return 21;
            } else if (nilaiLari >= 1672 && nilaiLari <= 1700 && jenisKelamin === 'Perempuan') {
              return 21;
            }else if (nilaiLari >= 2025 && nilaiLari <= 2043 && jenisKelamin === 'Laki-Laki') {
              return 22;
            } else if (nilaiLari >= 1701 && nilaiLari <= 1713 && jenisKelamin === 'Perempuan') {
              return 22;
            }else if (nilaiLari >= 2044 && nilaiLari <= 2062 && jenisKelamin === 'Laki-Laki') {
              return 23;
            } else if (nilaiLari >= 1714 && nilaiLari <= 1726 && jenisKelamin === 'Perempuan') {
              return 23;
            }else if (nilaiLari >= 2063 && nilaiLari <= 2081 && jenisKelamin === 'Laki-Laki') {
              return 24;
            } else if (nilaiLari >= 1727 && nilaiLari <= 1740 && jenisKelamin === 'Perempuan') {
              return 24;
            }else if (nilaiLari >= 2082 && nilaiLari <= 2100 && jenisKelamin === 'Laki-Laki') {
              return 25;
            } else if (nilaiLari >= 1741 && nilaiLari <= 1774 && jenisKelamin === 'Perempuan') {
              return 25;
            }else if (nilaiLari >= 2101 && nilaiLari <= 2119 && jenisKelamin === 'Laki-Laki') {
              return 26;
            } else if (nilaiLari >= 1775 && nilaiLari <= 1768 && jenisKelamin === 'Perempuan') {
              return 26;
            }else if (nilaiLari >= 2120 && nilaiLari <= 2138 && jenisKelamin === 'Laki-Laki') {
              return 27;
            } else if (nilaiLari >= 1769 && nilaiLari <= 1782 && jenisKelamin === 'Perempuan') {
              return 27;
            }else if (nilaiLari >= 2139 && nilaiLari <= 2157 && jenisKelamin === 'Laki-Laki') {
              return 28;
            } else if (nilaiLari >= 1783 && nilaiLari <= 1796 && jenisKelamin === 'Perempuan') {
              return 28;
            }else if (nilaiLari >= 2158 && nilaiLari <= 2176 && jenisKelamin === 'Laki-Laki') {
              return 29;
            } else if (nilaiLari >= 1797 && nilaiLari <= 1809 && jenisKelamin === 'Perempuan') {
              return 29;
            }else if (nilaiLari >= 2177 && nilaiLari <= 2195 && jenisKelamin === 'Laki-Laki') {
              return 30;
            } else if (nilaiLari >= 1810 && nilaiLari <= 1822 && jenisKelamin === 'Perempuan') {
              return 30;
            }else if (nilaiLari >= 2196 && nilaiLari <= 2214 && jenisKelamin === 'Laki-Laki') {
              return 31;
            } else if (nilaiLari >= 1823 && nilaiLari <= 1835 && jenisKelamin === 'Perempuan') {
              return 31;
            }else if (nilaiLari >= 2215 && nilaiLari <= 2233 && jenisKelamin === 'Laki-Laki') {
              return 32;
            } else if (nilaiLari >= 1836 && nilaiLari <= 1848 && jenisKelamin === 'Perempuan') {
              return 32;
            }else if (nilaiLari >= 2234 && nilaiLari <= 2252 && jenisKelamin === 'Laki-Laki') {
              return 33;
            } else if (nilaiLari >= 1849 && nilaiLari <= 1861 && jenisKelamin === 'Perempuan') {
              return 33;
            }else if (nilaiLari >= 2253 && nilaiLari <= 2271 && jenisKelamin === 'Laki-Laki') {
              return 34;
            } else if (nilaiLari >= 1862 && nilaiLari <= 1874 && jenisKelamin === 'Perempuan') {
              return 34;
            }else if (nilaiLari >= 2272 && nilaiLari <= 2290 && jenisKelamin === 'Laki-Laki') {
              return 35;
            } else if (nilaiLari >= 1875 && nilaiLari <= 1887 && jenisKelamin === 'Perempuan') {
              return 35;
            }else if (nilaiLari >= 2291 && nilaiLari <= 2309 && jenisKelamin === 'Laki-Laki') {
              return 36;
            } else if (nilaiLari >= 1888 && nilaiLari <= 1900 && jenisKelamin === 'Perempuan') {
              return 36;
            }else if (nilaiLari >= 2310 && nilaiLari <= 2328 && jenisKelamin === 'Laki-Laki') {
              return 37;
            } else if (nilaiLari >= 1901 && nilaiLari <= 1913 && jenisKelamin === 'Perempuan') {
              return 37;
            }else if (nilaiLari >= 2329 && nilaiLari <= 2347 && jenisKelamin === 'Laki-Laki') {
              return 38;
            } else if (nilaiLari >= 1914 && nilaiLari <= 1926 && jenisKelamin === 'Perempuan') {
              return 38;
            }else if (nilaiLari >= 2348 && nilaiLari <= 2366 && jenisKelamin === 'Laki-Laki') {
              return 39;
            } else if (nilaiLari >= 1927 && nilaiLari <= 1939 && jenisKelamin === 'Perempuan') {
              return 39;
            }else if (nilaiLari >= 2367 && nilaiLari <= 2385 && jenisKelamin === 'Laki-Laki') {
              return 40;
            } else if (nilaiLari >= 1940 && nilaiLari <= 1952 && jenisKelamin === 'Perempuan') {
              return 40;
            }else if (nilaiLari >= 2386 && nilaiLari <= 2404 && jenisKelamin === 'Laki-Laki') {
              return 41;
            } else if (nilaiLari >= 1953 && nilaiLari <= 1965 && jenisKelamin === 'Perempuan') {
              return 41;
            }else if (nilaiLari >= 2405 && nilaiLari <= 2423 && jenisKelamin === 'Laki-Laki') {
              return 42;
            } else if (nilaiLari >= 1966 && nilaiLari <= 1978 && jenisKelamin === 'Perempuan') {
              return 42;
            }else if (nilaiLari >= 2424 && nilaiLari <= 2442 && jenisKelamin === 'Laki-Laki') {
              return 43;
            } else if (nilaiLari >= 1979 && nilaiLari <= 1991 && jenisKelamin === 'Perempuan') {
              return 43;
            }else if (nilaiLari >= 2443 && nilaiLari <= 2461 && jenisKelamin === 'Laki-Laki') {
              return 44;
            } else if (nilaiLari >= 1992 && nilaiLari <= 2004 && jenisKelamin === 'Perempuan') {
              return 44;
            }else if (nilaiLari >= 2462 && nilaiLari <= 2005 && jenisKelamin === 'Laki-Laki') {
              return 45;
            } else if (nilaiLari >= 2005 && nilaiLari <= 2480 && jenisKelamin === 'Perempuan') {
              return 45;
            }else if (nilaiLari >= 2500 && nilaiLari <= 2518 && jenisKelamin === 'Laki-Laki') {
              return 46;
            } else if (nilaiLari >= 2019 && nilaiLari <= 2032 && jenisKelamin === 'Perempuan') {
              return 46;
            }else if (nilaiLari >= 2519 && nilaiLari <= 2537 && jenisKelamin === 'Laki-Laki') {
              return 47;
            } else if (nilaiLari >= 2033 && nilaiLari <= 2045 && jenisKelamin === 'Perempuan') {
              return 47;
            }else if (nilaiLari >= 2481 && nilaiLari <= 2499 && jenisKelamin === 'Laki-Laki') {
              return 48;
            } else if (nilaiLari >= 2046 && nilaiLari <= 2059 && jenisKelamin === 'Perempuan') {
              return 48;
            }else if (nilaiLari >= 2538 && nilaiLari <= 2556 && jenisKelamin === 'Laki-Laki') {
              return 49;
            } else if (nilaiLari >= 2060 && nilaiLari <= 2073 && jenisKelamin === 'Perempuan') {
              return 49;
            }else if (nilaiLari >= 2557 && nilaiLari <= 2575 && jenisKelamin === 'Laki-Laki') {
              return 50;
            } else if (nilaiLari >= 2074 && nilaiLari <= 2087 && jenisKelamin === 'Perempuan') {
              return 50;
            }else if (nilaiLari >= 2576 && nilaiLari <= 2594 && jenisKelamin === 'Laki-Laki') {
              return 51;
            } else if (nilaiLari >= 2088 && nilaiLari <= 2101 && jenisKelamin === 'Perempuan') {
              return 51;
            }else if (nilaiLari >= 2595 && nilaiLari <= 2613 && jenisKelamin === 'Laki-Laki') {
              return 52;
            } else if (nilaiLari >= 2102 && nilaiLari <= 2112 && jenisKelamin === 'Perempuan') {
              return 52;
            }else if (nilaiLari >= 2614 && nilaiLari <= 2632 && jenisKelamin === 'Laki-Laki') {
              return 53;
            } else if (nilaiLari >= 2113 && nilaiLari <= 2123 && jenisKelamin === 'Perempuan') {
              return 53;
            }else if (nilaiLari >= 2633 && nilaiLari <= 2651 && jenisKelamin === 'Laki-Laki') {
              return 54;
            } else if (nilaiLari >= 2124 && nilaiLari <= 2134 && jenisKelamin === 'Perempuan') {
              return 54;
            }else if (nilaiLari >= 2652 && nilaiLari <= 2670 && jenisKelamin === 'Laki-Laki') {
              return 55;
            } else if (nilaiLari >= 2135 && nilaiLari <= 2145 && jenisKelamin === 'Perempuan') {
              return 55;
            }else if (nilaiLari >= 2671 && nilaiLari <= 2689 && jenisKelamin === 'Laki-Laki') {
              return 56;
            } else if (nilaiLari >= 2146 && nilaiLari <= 2156 && jenisKelamin === 'Perempuan') {
              return 56;
            }else if (nilaiLari >= 2690 && nilaiLari <= 2708 && jenisKelamin === 'Laki-Laki') {
              return 57;
            } else if (nilaiLari >= 2157 && nilaiLari <= 2167 && jenisKelamin === 'Perempuan') {
              return 57;
            }else if (nilaiLari >= 2709 && nilaiLari <= 2727 && jenisKelamin === 'Laki-Laki') {
              return 58;
            } else if (nilaiLari >= 2168 && nilaiLari <= 2178 && jenisKelamin === 'Perempuan') {
              return 58;
            }else if (nilaiLari >= 2728 && nilaiLari <= 2746 && jenisKelamin === 'Laki-Laki') {
              return 59;
            } else if (nilaiLari >= 2179 && nilaiLari <= 2189 && jenisKelamin === 'Perempuan') {
              return 59;
            }else if (nilaiLari >= 2747 && nilaiLari <= 2765 && jenisKelamin === 'Laki-Laki') {
              return 60;
            } else if (nilaiLari >= 2190 && nilaiLari <= 2200 && jenisKelamin === 'Perempuan') {
              return 60;
            }else if (nilaiLari >= 2766 && nilaiLari <= 2784 && jenisKelamin === 'Laki-Laki') {
              return 61;
            } else if (nilaiLari >= 2201 && nilaiLari <= 2211 && jenisKelamin === 'Perempuan') {
              return 61;
            }else if (nilaiLari >= 2785 && nilaiLari <= 2803 && jenisKelamin === 'Laki-Laki') {
              return 62;
            } else if (nilaiLari >= 2212 && nilaiLari <= 2222 && jenisKelamin === 'Perempuan') {
              return 62;
            }else if (nilaiLari >= 2804 && nilaiLari <= 2822 && jenisKelamin === 'Laki-Laki') {
              return 63;
            } else if (nilaiLari >= 2223 && nilaiLari <= 2233 && jenisKelamin === 'Perempuan') {
              return 63;
            }else if (nilaiLari >= 2823 && nilaiLari <= 2841 && jenisKelamin === 'Laki-Laki') {
              return 64;
            } else if (nilaiLari >= 2234 && nilaiLari <= 2244 && jenisKelamin === 'Perempuan') {
              return 64;
            }else if (nilaiLari >= 2842 && nilaiLari <= 2860 && jenisKelamin === 'Laki-Laki') {
              return 65;
            } else if (nilaiLari >= 2245 && nilaiLari <= 2255 && jenisKelamin === 'Perempuan') {
              return 65;
            }else if (nilaiLari >= 2861 && nilaiLari <= 2879 && jenisKelamin === 'Laki-Laki') {
              return 66;
            } else if (nilaiLari >= 2256 && nilaiLari <= 2266 && jenisKelamin === 'Perempuan') {
              return 66;
            }else if (nilaiLari >= 2880 && nilaiLari <= 2898 && jenisKelamin === 'Laki-Laki') {
              return 67;
            } else if (nilaiLari >= 2267 && nilaiLari <= 2277 && jenisKelamin === 'Perempuan') {
              return 67;
            }else if (nilaiLari >= 2899 && nilaiLari <= 2917 && jenisKelamin === 'Laki-Laki') {
              return 68;
            } else if (nilaiLari >= 2278 && nilaiLari <= 2288 && jenisKelamin === 'Perempuan') {
              return 68;
            }else if (nilaiLari >= 2918 && nilaiLari <= 2936 && jenisKelamin === 'Laki-Laki') {
              return 69;
            } else if (nilaiLari >= 2289 && nilaiLari <= 2299 && jenisKelamin === 'Perempuan') {
              return 69;
            }else if (nilaiLari >= 2937 && nilaiLari <= 2955 && jenisKelamin === 'Laki-Laki') {
              return 70;
            } else if (nilaiLari >= 2300 && nilaiLari <= 2310 && jenisKelamin === 'Perempuan') {
              return 70;
            }else if (nilaiLari >= 2956 && nilaiLari <= 2974 && jenisKelamin === 'Laki-Laki') {
              return 71;
            } else if (nilaiLari >= 2311 && nilaiLari <= 2321 && jenisKelamin === 'Perempuan') {
              return 71;
            }else if (nilaiLari >= 2975 && nilaiLari <= 2993 && jenisKelamin === 'Laki-Laki') {
              return 72;
            } else if (nilaiLari >= 2322 && nilaiLari <= 2332 && jenisKelamin === 'Perempuan') {
              return 72;
            }else if (nilaiLari >= 2994 && nilaiLari <= 3012 && jenisKelamin === 'Laki-Laki') {
              return 73;
            } else if (nilaiLari >= 2332 && nilaiLari <= 2343 && jenisKelamin === 'Perempuan') {
              return 73;
            }else if (nilaiLari >= 3013 && nilaiLari <= 3031 && jenisKelamin === 'Laki-Laki') {
              return 74;
            } else if (nilaiLari >= 2344 && nilaiLari <= 2354 && jenisKelamin === 'Perempuan') {
              return 74;
            }else if (nilaiLari >= 3032 && nilaiLari <= 3050 && jenisKelamin === 'Laki-Laki') {
              return 75;
            } else if (nilaiLari >= 2355 && nilaiLari <= 2365 && jenisKelamin === 'Perempuan') {
              return 75;
            }else if (nilaiLari >= 3051 && nilaiLari <= 3069 && jenisKelamin === 'Laki-Laki') {
              return 76;
            } else if (nilaiLari >= 2366 && nilaiLari <= 2376 && jenisKelamin === 'Perempuan') {
              return 76;
            }else if (nilaiLari >= 3070 && nilaiLari <= 3088 && jenisKelamin === 'Laki-Laki') {
              return 77;
            } else if (nilaiLari >= 2376 && nilaiLari <= 2387 && jenisKelamin === 'Perempuan') {
              return 77;
            }else if (nilaiLari >= 3089 && nilaiLari <= 3107 && jenisKelamin === 'Laki-Laki') {
              return 78;
            } else if (nilaiLari >= 2388 && nilaiLari <= 2398 && jenisKelamin === 'Perempuan') {
              return 78;
            }else if (nilaiLari >= 3108 && nilaiLari <= 3126 && jenisKelamin === 'Laki-Laki') {
              return 79;
            } else if (nilaiLari >= 2399 && nilaiLari <= 2409 && jenisKelamin === 'Perempuan') {
              return 79;
            }else if (nilaiLari >= 3127 && nilaiLari <= 3145 && jenisKelamin === 'Laki-Laki') {
              return 80;
            } else if (nilaiLari >= 2410 && nilaiLari <= 2420 && jenisKelamin === 'Perempuan') {
              return 80;
            }else if (nilaiLari >= 3146 && nilaiLari <= 3164 && jenisKelamin === 'Laki-Laki') {
              return 81;
            } else if (nilaiLari >= 2421 && nilaiLari <= 2431 && jenisKelamin === 'Perempuan') {
              return 81;
            }else if (nilaiLari >= 3165 && nilaiLari <= 3183 && jenisKelamin === 'Laki-Laki') {
              return 82;
            } else if (nilaiLari >= 2432 && nilaiLari <= 2442 && jenisKelamin === 'Perempuan') {
              return 82;
            }else if (nilaiLari >= 3184 && nilaiLari <= 3202 && jenisKelamin === 'Laki-Laki') {
              return 83;
            } else if (nilaiLari >= 2443 && nilaiLari <= 2453 && jenisKelamin === 'Perempuan') {
              return 83;
            }else if (nilaiLari >= 3203 && nilaiLari <= 3221 && jenisKelamin === 'Laki-Laki') {
              return 84;
            } else if (nilaiLari >= 2454 && nilaiLari <= 2464 && jenisKelamin === 'Perempuan') {
              return 84;
            }else if (nilaiLari >= 3222 && nilaiLari <= 3240 && jenisKelamin === 'Laki-Laki') {
              return 85;
            } else if (nilaiLari >= 2465 && nilaiLari <= 2475 && jenisKelamin === 'Perempuan') {
              return 85;
            }else if (nilaiLari >= 3241 && nilaiLari <= 3259 && jenisKelamin === 'Laki-Laki') {
              return 86;
            } else if (nilaiLari >= 2476 && nilaiLari <= 2486 && jenisKelamin === 'Perempuan') {
              return 86;
            }else if (nilaiLari >= 3260 && nilaiLari <= 3278 && jenisKelamin === 'Laki-Laki') {
              return 87;
            } else if (nilaiLari >= 2487 && nilaiLari <= 2497 && jenisKelamin === 'Perempuan') {
              return 87;
            }else if (nilaiLari >= 3279 && nilaiLari <= 3297 && jenisKelamin === 'Laki-Laki') {
              return 88;
            } else if (nilaiLari >= 2498 && nilaiLari <= 2508 && jenisKelamin === 'Perempuan') {
              return 88;
            }else if (nilaiLari >= 3298 && nilaiLari <= 3316 && jenisKelamin === 'Laki-Laki') {
              return 89;
            } else if (nilaiLari >= 2509 && nilaiLari <= 2519 && jenisKelamin === 'Perempuan') {
              return 89;
            }else if (nilaiLari >= 3317 && nilaiLari <= 3335 && jenisKelamin === 'Laki-Laki') {
              return 90;
            } else if (nilaiLari >= 2520 && nilaiLari <= 2530 && jenisKelamin === 'Perempuan') {
              return 90;
            }else if (nilaiLari >= 3336 && nilaiLari <= 3354 && jenisKelamin === 'Laki-Laki') {
              return 91;
            } else if (nilaiLari >= 2531 && nilaiLari <= 2541 && jenisKelamin === 'Perempuan') {
              return 91;
            }else if (nilaiLari >= 3355 && nilaiLari <= 3373 && jenisKelamin === 'Laki-Laki') {
              return 92;
            } else if (nilaiLari >= 2542 && nilaiLari <= 2552 && jenisKelamin === 'Perempuan') {
              return 92;
            }else if (nilaiLari >= 3374 && nilaiLari <= 3392 && jenisKelamin === 'Laki-Laki') {
              return 93;
            } else if (nilaiLari >= 2553 && nilaiLari <= 2563 && jenisKelamin === 'Perempuan') {
              return 93;
            }else if (nilaiLari >= 3393 && nilaiLari <= 3411 && jenisKelamin === 'Laki-Laki') {
              return 94;
            } else if (nilaiLari >= 2564 && nilaiLari <= 2574 && jenisKelamin === 'Perempuan') {
              return 94;
            }else if (nilaiLari >= 3412 && nilaiLari <= 3430 && jenisKelamin === 'Laki-Laki') {
              return 95;
            } else if (nilaiLari >= 2575 && nilaiLari <= 2585 && jenisKelamin === 'Perempuan') {
              return 95;
            }else if (nilaiLari >= 3451 && nilaiLari <= 3449 && jenisKelamin === 'Laki-Laki') {
              return 96;
            } else if (nilaiLari >= 2586 && nilaiLari <= 2596 && jenisKelamin === 'Perempuan') {
              return 96;
            }else if (nilaiLari >= 3450 && nilaiLari <= 3468 && jenisKelamin === 'Laki-Laki') {
              return 97;
            } else if (nilaiLari >= 2597 && nilaiLari <= 2607 && jenisKelamin === 'Perempuan') {
              return 97;
            }else if (nilaiLari >= 3469 && nilaiLari <= 3487 && jenisKelamin === 'Laki-Laki') {
              return 98;
            } else if (nilaiLari >= 2608 && nilaiLari <= 2618 && jenisKelamin === 'Perempuan') {
              return 98;
            }else if (nilaiLari >= 3488 && nilaiLari <= 3506 && jenisKelamin === 'Laki-Laki') {
              return 99;
            } else if (nilaiLari >= 2619 && nilaiLari <= 2629 && jenisKelamin === 'Perempuan') {
              return 99;
            }else if (nilaiLari >= 3507 && nilaiLari >= 3507 && jenisKelamin === 'Laki-Laki') {
              return 100;
            } else if (nilaiLari >= 2630 && nilaiLari >= 2630 && jenisKelamin === 'Perempuan') {
              return 100;
            }
        }

        document.getElementById('nilai_lari').addEventListener('input', updateHasilNilai);

        document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai);

        function updateHasilNilai() {
          var nilaiLari = parseInt(document.getElementById('nilai_lari').value);
          var jenisKelamin = document.getElementById('jenis_kelamin').value;

          var hasilNilai = calculateHasilNilai(nilaiLari, jenisKelamin);

          document.getElementById('hasil_nilai_lari').value = hasilNilai;
        }
      </script>
      --}}

    {{-- pull Up 
      <script>
        function calculateHasilNilai1(nilaipullup, jenisKelamin1) {
          if (nilaipullup == 0 && jenisKelamin1 === 'Laki-Laki') {
              return 0;
            }else if (nilaipullup >= 0 && nilaipullup <= 11 && jenisKelamin1 === 'Perempuan') {
              return 0;
            }else if (nilaipullup == 1 && jenisKelamin1 === 'Laki-Laki') {
              return 15;
            } else if (nilaipullup == 12  && jenisKelamin1 === 'Perempuan') {
              return 2;
            }
        }

        document.getElementById('nilai_pull_up').addEventListener('input', updateHasilNilai1);

        document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai1);

        function updateHasilNilai1() {
          var nilaipullup = parseInt(document.getElementById('nilai_pull_up').value);
          var jenisKelamin1 = document.getElementById('jenis_kelamin').value;

          var hasilNilai = calculateHasilNilai1(nilaipullup, jenisKelamin1);

          document.getElementById('hasil_nilai_pull_up').value = hasilNilai;
        }
      </script>
    --}}

  {{-- Sit Up 
  <script>
    function calculateHasilNilai2(situp, jenisKelamin2) {
      if (situp >= 0 && situp <= 13 && jenisKelamin2 === 'Laki-Laki') {
          return 0;
        }else if (situp >= 0 && situp <= 11 && jenisKelamin2 === 'Perempuan') {
          return 0;
        }else if (situp == 14 && jenisKelamin2 === 'Laki-Laki') {
          return 1;
        } else if (situp == 12 && jenisKelamin2 === 'Perempuan') {
          return 2;
        }
    }

    document.getElementById('nilai_sit_up').addEventListener('input', updateHasilNilai2);

    document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai2);

    function updateHasilNilai2() {
      var situp = parseInt(document.getElementById('nilai_sit_up').value);
      var jenisKelamin2 = document.getElementById('jenis_kelamin').value;

      var hasilNilai = calculateHasilNilai2(situp, jenisKelamin2);

      document.getElementById('hasil_nilai_sit_up').value = hasilNilai;
    }
  </script>
  --}}
  {{-- push Up
  <script>
    function calculateHasilNilai3(nilaipushup, jenisKelamin3) {
      if (nilaipushup >= 0 && nilaipushup <= 15 && jenisKelamin3 === 'Laki-Laki') {
          return 0;
        }else if (nilaipushup >= 0 && nilaipushup <= 7 && jenisKelamin3 === 'Perempuan') {
          return 0;
        }else if (nilaipushup == 16 && jenisKelamin3 === 'Laki-Laki') {
          return 1;
        } else if (nilaipushup == 8 && jenisKelamin3 === 'Perempuan') {
          return 3;
        }
    }

    document.getElementById('nilai_push_up').addEventListener('input', updateHasilNilai3);

    document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai3);

    function updateHasilNilai3() {
      var nilaipushup = parseInt(document.getElementById('nilai_push_up').value);
      var jenisKelamin3 = document.getElementById('jenis_kelamin').value;

      var hasilNilai = calculateHasilNilai3(nilaipushup, jenisKelamin3);

      document.getElementById('hasil_nilai_push_up').value = hasilNilai;
    }
  </script>
   --}}

  {{-- Shuttle Run
  <script>
    function calculateHasilNilai4(nilaishuttleRun, jenisKelamin4) {
      if (nilaishuttleRun >= 259 && nilaishuttleRun >= 259 && jenisKelamin4 === 'Laki-Laki') {
          return 0;
        }else if (nilaishuttleRun >= 0 && nilaishuttleRun <= 272 && jenisKelamin4 === 'Perempuan') {
          return 0;
        }else if (nilaishuttleRun == 258 && jenisKelamin4 === 'Laki-Laki') {
          return 1;
        } else if (nilaishuttleRun == 271 && jenisKelamin4 === 'Perempuan') {
          return 1;
        }
    }

    document.getElementById('nilai_shuttle_run').addEventListener('input', updateHasilNilai4);

    document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai4);

    function updateHasilNilai4() {
      var nilaishuttleRun = parseInt(document.getElementById('nilai_shuttle_run').value);
      var jenisKelamin4 = document.getElementById('jenis_kelamin').value;

      var hasilNilai = calculateHasilNilai4(nilaishuttleRun, jenisKelamin4);

      document.getElementById('hasil_nilai_shuttle_run').value = hasilNilai;
    }
  </script>
   --}}

  {{-- Renang Dada 
  <script>
    function calculateHasilNilai5(nilaiRenangDada, jenisKelamin5) {
      if (nilaiRenangDada >= 0 && nilaiRenangDada <= 9 && jenisKelamin5 === 'Laki-Laki') {
          return 0;
        }else if (nilaiRenangDada >= 0 && nilaiRenangDada <= 9 && jenisKelamin5 === 'Perempuan') {
          return 0;
        }else if (nilaiRenangDada == 10  && jenisKelamin5 === 'Laki-Laki') {
          return 1;
        } else if (nilaiRenangDada == 10  && jenisKelamin5 === 'Perempuan') {
          return 1;
        }
    }

    document.getElementById('nilai_renang_dada').addEventListener('input', updateHasilNilai5);

    document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai5);

    function updateHasilNilai5() {
      var nilaiRenangDada = parseInt(document.getElementById('nilai_renang_dada').value);
      var jenisKelamin5 = document.getElementById('jenis_kelamin').value;

      var hasilNilai = calculateHasilNilai5(nilaiRenangDada, jenisKelamin5);

      document.getElementById('hasil_nilai_renang_dada').value = hasilNilai;
    }
  </script>
  --}}

  {{-- Renang Bebas 
  <script>
    function calculateHasilNilai6(nilaiRenangBebas, jenisKelamin6) {
      if (nilaiRenangBebas >= 0 && nilaiRenangBebas <= 9 && jenisKelamin6 === 'Laki-Laki') {
          return 0;
        }else if (nilaiRenangBebas >= 0 && nilaiRenangBebas <= 9 && jenisKelamin6 === 'Perempuan') {
          return 0;
        }else if (nilaiRenangBebas == 10 && jenisKelamin6 === 'Laki-Laki') {
          return 1;
        } else if (nilaiRenangBebas == 10 && jenisKelamin6 === 'Perempuan') {
          return 1;
        }
    }

    document.getElementById('nilai_renang_bebas').addEventListener('input', updateHasilNilai6);

    document.getElementById('jenis_kelamin').addEventListener('input', updateHasilNilai6);

    function updateHasilNilai6() {
      var nilaiRenangBebas = parseInt(document.getElementById('nilai_renang_bebas').value);
      var jenisKelamin6 = document.getElementById('jenis_kelamin').value;

      var hasilNilai = calculateHasilNilai6(nilaiRenangBebas, jenisKelamin6);

      document.getElementById('hasil_nilai_renang_bebas').value = hasilNilai;
    }
  </script>
  --}}
</div>
</div>    
</div>
</div>
</section>




@endsection