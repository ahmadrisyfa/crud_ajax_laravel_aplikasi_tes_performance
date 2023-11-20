<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\JadwalKegiatan;
use App\Nilai;


class DashboardController extends Controller
{
    public function index()
    {
        $pelatih = User::where('is_admin',1)->count();
        $laki_laki = User::where('jenis_kelamin', 'Laki-Laki')->where('is_admin', 0)->count();
        $perempuan = User::where('jenis_kelamin','Perempuan')->where('is_admin',0)->count();
        $peserta_aktif = User::where('is_admin',0)->count();
        return view('dashboard.index',compact('peserta_aktif','pelatih','laki_laki','perempuan'));
    }

    public function dashboard_user()
    {
        return view('dashboard.user');
    }

    public function profile()
    {
        $user = User::where('id',auth()->user()->id)->first();
        return view('dashboard.profile',compact('user'));
    }
    public function profile_edit(Request $request, $id)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users,username,' . $id,
        'ttl' => 'required',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'usia' => 'required',
        'tb' => 'required',
        'bb' => 'required',
        // 'password' => 'required',
        ]);

        // Hash the password only if it's present in the update request
        // if ($request->has('password')) {
        //     $validatedData['password'] = Hash::make($validatedData['password']);
        // }

        User::find($id)->update($validatedData);
        return redirect()->back()->with('success', 'Data updated successfully!');

        // return response()->json(['message' => 'Data updated successfully']);
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with(['current_password' => 'The current password is incorrect.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
    public function data_pelatih()
    {
        $pelatih = User::where('is_admin', 1)->get();
        return view('dashboard.data_pelatih',compact('pelatih'));
    }    
    public function data_pelatih_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'ttl' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'password' => 'required',
            'is_admin' => ''
        ]);
 
         $validatedData['is_admin'] = "1";
         $validatedData['password'] = Hash::make($validatedData['password']);
 
        User::create($validatedData);

        return response()->json(['message' => 'Data created successfully']);
    }
    public function data_pelatih_edit($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }
    public function data_pelatih_detail($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }
    public function data_pelatih_update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users,username,' . $id,
        'ttl' => 'required',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'usia' => 'required',
        'tb' => 'required',
        'bb' => 'required',
        // 'password' => 'required',
        ]);

        // Hash the password only if it's present in the update request
        // if ($request->has('password')) {
        //     $validatedData['password'] = Hash::make($validatedData['password']);
        // }

        User::find($id)->update($validatedData);

        return response()->json(['message' => 'Data updated successfully']);
    }
    public function data_pelatih_destroy($id)
    {
            $data = User::find($id);
            $data->delete();
            return response()->json(['message' => 'Data deleted successfully']);
    }
    public function cari_data(Request $request)
    {
        $search = $request->input('search');
        $cari_data = User::where('is_admin', 0)
                    ->where(function($query) use ($search) {
                        $query->where('name', 'like', '%'.$search.'%')
                              ->orWhere('username', 'like', '%'.$search.'%');
                    })
                    ->get();
        return view('dashboard.cari_data', compact('cari_data'));
    }

    public function data_peserta()
    {
        $data_peserta = User::where('is_admin', 0)->get();
        return view('dashboard.data_peserta',compact('data_peserta'));

    }
    public function data_peserta_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'ttl' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'password' => 'required',
        ]) ;
 
         // $validatedData['password'] = bcrypt($validatedData['password']);
         $validatedData['password'] = Hash::make($validatedData['password']);
 
        User::create($validatedData);

        return response()->json(['message' => 'Data created successfully']);
    }
    public function data_peserta_detail($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }
    public function data_peserta_edit($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }
    public function data_peserta_update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users,username,' . $id,
        'ttl' => 'required',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'usia' => 'required',
        'tb' => 'required',
        'bb' => 'required',
        // 'password' => 'required',
        ]);

        // Hash the password only if it's present in the update request
        // if ($request->has('password')) {
        //     $validatedData['password'] = Hash::make($validatedData['password']);
        // }

        User::find($id)->update($validatedData);

        return response()->json(['message' => 'Data updated successfully']);
    }
    public function data_peserta_destroy($id)
    {
            $data = User::find($id);
            $data->delete();
            return response()->json(['message' => 'Data deleted successfully']);
    }
    public function jadwal_kegiatan()
    {
        $jadwal_kegiatan = JadwalKegiatan::get();
        return view('dashboard.jadwal_kegiatan',compact('jadwal_kegiatan'));
    }
    public function jadwal_kegiatan_create(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',            
        ]);
 
 
        JadwalKegiatan::create($validatedData);

        return response()->json(['message' => 'Data created successfully']);
    }
    public function jadwal_kegiatan_detail($id)
    {
        $data = JadwalKegiatan::find($id);
        return response()->json($data);
    }
    public function jadwal_kegiatan_edit($id)
    {
        $data = JadwalKegiatan::find($id);
        return response()->json($data);
    }
    
    public function jadwal_kegiatan_update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',

        
        ]);

        // Hash the password only if it's present in the update request
        // if ($request->has('password')) {
        //     $validatedData['password'] = Hash::make($validatedData['password']);
        // }

        JadwalKegiatan::find($id)->update($validatedData);

        return response()->json(['message' => 'Data updated successfully']);
    }
    public function jadwal_kegiatan_destroy($id)
    {
            $data = JadwalKegiatan::find($id);
            $data->delete();
            return response()->json(['message' => 'Data deleted successfully']);
    }
    public function jadwal_kegiatan_user()
    {
        $jadwal_kegiatan_user = JadwalKegiatan::get();
        return view('dashboard.jadwal_kegiatan_user',compact('jadwal_kegiatan_user'));
    }
    public function jadwal_kegiatan_user_detail($id)
    {
        $data = JadwalKegiatan::find($id);
        return response()->json($data);
    }
    public function input_data_nilai()
    {
        $user = User::where('is_admin',0)->get();
        return view('dashboard.input_data_nilai',compact('user'));
    }
    public function data_nilai_peserta()
    {
        $nilai = Nilai::where('user_id',auth()->user()->id)->get();
        return view('dashboard.nilai',compact('nilai'));
    }
    public function input_data_nilai_post(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'hasil_nilai_lari' => 'required',            
            'hasil_nilai_pull_up' => 'required',            
            'hasil_nilai_sit_up' => 'required',            
            'hasil_nilai_push_up' => 'required',            
            'hasil_nilai_shuttle_run' => 'required',            
            'hasil_nilai_renang_dada' => 'required',            
            'hasil_nilai_renang_bebas' => 'required',            
            'tanggal' => 'required',            
            'nilai_garjas_A' => 'required',            
            'nilai_garjas_B' => 'required',            
            'total_nilai_garjas' => 'required',  
                      
        ]);
 
 
        Nilai::create($validatedData);
        return redirect('input_data_nilai')->with('berhasil','Nilai Berhasil Di Tambahkan Ke Peserta');
    }

    public function input_data_nilai_index()
    {
        $nilai = Nilai::get();
        return view('dashboard.nilai_index',compact('nilai'));
    }
    public function input_data_nilai_edit($id)
    {
        $user = User::where('is_admin',0)->get();
        $nilai = Nilai::find($id);
        return view('dashboard.nilai_edit',compact('nilai','user'));
    }
    public function input_data_nilai_detail($id)
    {
        $user = User::where('is_admin',0)->get();
        $nilai = Nilai::find($id);
        return view('dashboard.nilai_detail',compact('nilai','user'));
    }
    
    public function input_data_nilai_update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'hasil_nilai_lari' => 'required',            
            'hasil_nilai_pull_up' => 'required',            
            'hasil_nilai_sit_up' => 'required',            
            'hasil_nilai_push_up' => 'required',            
            'hasil_nilai_shuttle_run' => 'required',            
            'hasil_nilai_renang_dada' => 'required',            
            'hasil_nilai_renang_bebas' => 'required',            
            'tanggal' => 'required',            
            'nilai_garjas_A' => 'required',            
            'nilai_garjas_B' => 'required',            
            'total_nilai_garjas' => 'required',  
        ]);
        
        // Assuming 'id' is the primary key
        Nilai::where('id', $id)->update($validatedData);
        
        return redirect('input_data_nilai')->with('berhasil', 'Data Berhasil Diupdate');
        
    }
    public function input_data_nilai_delete($id)
    {
            $data = Nilai::find($id);
            $data->delete();
            return redirect('input_data_nilai')->with('berhasil', 'Data Berhasil DiHapus');

            // return response()->json(['message' => 'Data deleted successfully']);
    }
}
