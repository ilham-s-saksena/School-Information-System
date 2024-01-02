<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Absen;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class ApiController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Harabang.Januari@12')->accessToken;
            $token = $user->createToken('Harabang.Januari@12')->plainTextToken;

            return response()->json(['token' => $token], 200);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Jika user berhasil dibuat, kirim respons sukses
        if ($user) {
            return response()->json(['message' => 'User registered successfully'], 201);
        }

        // Jika terjadi kesalahan, kirim respons error
        return response()->json(['message' => 'Failed to register user'], 500);
    }





    public function dashboard(Request $request)
    {
        if ($request->user()) {
            $userId = $request->user()->id;
    
            $user = User::find($userId);

            $absenUser = Absen::where('user_id', $userId)
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->get();

            $bulan = Carbon::now()->format('m-Y');
            $awalBulan = "1-$bulan";
            $akhirBulan = "31-$bulan";

            $tanggalAwal = Carbon::createFromFormat('d-m-Y', $awalBulan)->startOfDay();
            $tanggalAkhir = Carbon::createFromFormat('d-m-Y', $akhirBulan)->endOfDay();

            $BulanIni = Absen::where('user_id', $userId)
                ->whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir])
                ->get();

            $hari = Carbon::now()->format('Y-m-d');
            $HariIni = Absen::where('user_id', $userId)
                ->where('tanggal', $hari)
                ->get();

            $penghasilan = $BulanIni->count() * $user->index;
            
            return response()->json([
                'user' => $user,
                'BulanIni' => $BulanIni->count(),
                'HariIni' => $HariIni->count(),
                'penghasilan' => $penghasilan,
                'absenUser' => $absenUser,
            ], 201);
    
            
        } else {

            
            return response()->json(['error' => "Token Login Salah/Tidak Ada"], 401);
        }

        
    }



    public function viewAbsen(Request $request)
    {
        if ($request->user()) {
            $userId = $request->user()->id;
    
            $user = User::find($userId);

            $awalBulan = "1-".$request->input('bulan')."-".$request->input('tahun');
            $akhirBulan = "31-".$request->input('bulan')."-".$request->input('tahun');

            $tanggalAwal = Carbon::createFromFormat('d-m-Y', $awalBulan)->startOfDay();
            $tanggalAkhir = Carbon::createFromFormat('d-m-Y', $akhirBulan)->endOfDay();

            $BulanIni = Absen::where('user_id', $userId)
                ->whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir])
                ->get();


            $penghasilan = $BulanIni->count() * $user->index;
            
            return response()->json([
                'user' => $user,
                'penghasilan' => $penghasilan,
                'absenUser' => $BulanIni,
                'bulan' => $awalBulan
            ], 201);
    
            
        } else {

            
            return response()->json(['error' => "Token Login Salah/Tidak Ada"], 401);
        }

        
    }


    public function userData(Request $request)
    {
        if ($request->user()) {
            $userId = $request->user()->id;
    
            $user = User::find($userId);
            
            return response()->json([
                'user' => $user
            ], 200);
    
            
        } else {

            
            return response()->json(['error' => "Token Login Salah/Tidak Ada"], 401);
        }
    }

    public function absen(Request $request){

        if ($request->user()) {
            $userId = $request->user()->id;

            $tanggal = $request->input('tgl');
            $waktu = $request->input('jam');
            $kelas = $request->input('kelas');

            $validation = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->get();
            $validation2 = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->where('waktu', $waktu)->get();
            $validation3 = Absen::where('tanggal', $tanggal)->where('waktu', $waktu)->where('kelas', $kelas)->get();

            if ($validation->count() >= 3){
                return response()->json(['message' => "Tidak Dapat Absen Lebih dari 3 Kali dalam Hari Yang Sama, Anda mencoba menginputkan absen pada tanggal $tanggal, absen anda sudah terhitung 3 JPL pada tanggal tersebut"], 401);
                
            }

            if ($validation2->count() > 0){
                return response()->json(['message' => "Tidak Dapat Absen Pada Jam yang Sama! Anda Sudah Absen di Jam $waktu untuk absen pada tanggal $tanggal"], 401);
            }

            if($validation3->count() > 0){
                $attempOn = $validation3->first()->user_id;
                $nama = User::find($attempOn)->name;
                return response()->json(['message' => "Error, Anda mencoba absen mengajar kelas $kelas, namun kelas tersebut sudah diajar oleh $nama Pada waktu yang sama ($tanggal, $waktu)"], 401);
            }

            $absensi = new Absen();
            
            $absensi->user_id = $userId;
            $absensi->tanggal = $request->input('tgl');
            $absensi->mapel = $request->input('mapel');
            $absensi->materi = $request->input('materi');
            $absensi->kelas = $request->input('kelas');
            $absensi->waktu = $request->input('jam');
            $absensi->save();

            return response()->json(['message' => "Data Absen Berhasil Ditambahkan"], 201);

        } else {
            return response()->json(['error' => "Token Login Salah/Tidak Ada"], 401);
        }

        
        
    }



    public function profile(Request $request){
        if ($request->user()) {
            $message = "Update Successfully, White No Image";

            $userId = $request->user()->id;
            $username = $request->user()->name;

            $U = User::find($userId);

            if ($request->file('image')) {
                $fileName = $userId . '-' . $request->file('image')->getClientOriginalName();
                $date = Carbon::now()->format('Ymd_His');
                $newFileName = "{$userId}-{$username}-{$date}.jpg";

                // Pindahkan file ke direktori public/img/ dengan nama yang baru
                $request->file('image')->move(public_path('img'), $newFileName);

                if ($U->foto !== "default.jpg") {
                    unlink(public_path('img/').$U->foto);
                }
                $U->foto = $newFileName;
                $message = "Update Successfully, White Image";
            }

            
            $U->name = $request->input('name');
            $U->email = $request->input('email');
            if ($request->input('password')) {
                if (Hash::check($request->input('password'), $U->password)) {
                    $U->password = Hash::make($request->input('passwordConfirm'));
                    $message .= " And With Password Changed";
                } else {
                    return response()->json(["message" => "Password Lama anda Salah"], 201);
                }
            }
            
            $saved = $U->save();


            if ($saved) {
                return response()->json(["message" => "$message"], 201);
            } else {
                return response()->json(["message" => "Data Gagal Disimpan"], 402);
                
            }

            
        } else {
            return response()->json(["message" => "Anda Belum Login"],403);
        }
    }


    public function deleteAbsen(Request $request){
        if ($request->user()) {
            $absenId = $request->json()->get('id');
            $absenDelete = Absen::find($absenId);
            if($absenDelete){
                $absenDelete->delete();
                return response()->json(["message" => "Data Berhasil DIhapus!", "id" => "$absenId"], 200);
            } else {
                return response()->json(["message" => "Data Tidak Ditemukan! id : $absenId, Request $request"], 405);
            }
        } else {
            return response()->json(["message" => "Unauthorized"], 401);
        }
    }
}
