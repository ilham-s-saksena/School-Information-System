<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kehadiransiswa;
use App\Models\Siswa;
use Carbon\Carbon;
use App\Models\Absen;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;


class ApiController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Harabang.Januari@12')->plainTextToken;

            return response()->json(['token' => $token, 'message' => 'Login successful'], 200);
        } else {
            // Cek apakah email atau password yang salah
            $user = User::where('email', $request->email)->first();
            
            if (!$user) {
                return response()->json(["error" => "Email tidak ditemukan"], 404);
            }

            if (!Hash::check($request->password, $user->password)) {
                return response()->json(["error" => "Password salah"], 401);
            }

            return response()->json(["error" => "Email atau password salah"], 401);
        }
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
                'user' => [
                    "email" => $user->email,
                    "name" => $user->name,
                    "foto" => $user->foto,
                    ],
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
                'user' => [
                    "email" => $user->email,
                    "name" => $user->name,
                    "foto" => $user->foto,
                    ],
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
                'user' => [
                    "email" => $user->email,
                    "name" => $user->name,
                    "foto" => $user->foto,
                    ],
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

            $hari = Carbon::createFromFormat('Y-m-d', $tanggal)->format('l');

            //Validation Lvl-0
            if($hari !== "Friday" && $hari !== "Saturday" && $hari !== "Sunday"){
                return response()->json(['message' => "Anda Tidak Dapat input Absen Mengajar pada Hari '-$hari-', Hari tersebut bukanlah hari yang dijadwalkan untuk mengajar!"], 401);
            }

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

            //Validation Lvl-4
            $tanggalHariIni = new \DateTime($tanggal);
            $namaHari = date('w', strtotime($tanggal));
            if($namaHari == 0){ // Jika Minggu
                $minggu = $tanggalHariIni->sub(new \DateInterval("P0D"))->format('Y-m-d');
                $sabtu = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
                $jumat = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
            } elseif ($namaHari == 5) { // Jika Jumat
                $jumat = $tanggalHariIni->sub(new \DateInterval("P0D"))->format('Y-m-d');
                $sabtu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
                $minggu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
            } elseif ($namaHari == 6) { // Jika Sabtu
                $minggu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
                $sabtu = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
                $jumat = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
            }

            //Sub Validations
            $subValidation4_jumat = Absen::where('user_id', $userId)->where('tanggal', $jumat)->get()->count();
            $subValidation4_sabtu = Absen::where('user_id', $userId)->where('tanggal', $sabtu)->get()->count();
            $subValidation4_minggu = Absen::where('user_id', $userId)->where('tanggal', $minggu)->get()->count();

            if ($subValidation4_jumat+$subValidation4_sabtu+$subValidation4_minggu >= 6){
                return response()->json(['message' => "Tidak Dapat Absen Lebih dari 6 Kali dalam Satu Minggu!,Anda sudah absen $subValidation4_jumat Kali pada Hari Jumat, $jumat; $subValidation4_sabtu Kali pada Hari Sabtu, $sabtu; dan $subValidation4_minggu Kali pada Hari Minggu, $minggu;"], 401);
            }


            //Validation Lvl-5
            $tanggalPadaHariIni = new \DateTime();
            $tanggalDiberikan = new \DateTime($tanggal);
            if ($tanggalDiberikan > $tanggalPadaHariIni) {
                $tanggalPadaHariIniStr = $tanggalPadaHariIni->format('d-m-Y');
                $tanggalDiberikanStr = $tanggalDiberikan->format('d-m-Y');
                return response()->json(['message' => "Lhoooo, sekarang baru tanggal $tanggalPadaHariIniStr, anda mencoba absen untuk tanggal yang belum dilalui : $tanggalDiberikanStr"], 401);
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

    public function absen_siswa(Request $request)
    {
        if ($request->user()) {
            if ($request->input('qr')) {
                $qr = $request->input('qr');
                $pieces = explode('-', $qr);

                if (empty($pieces[1])) {
                    return response()->json(['status' => 'error', 'message' => 'Qr Code Not Valid - Not Student QR'], 402);
                }
                
                
                $siswaId = $pieces[0];
                $siswaName = $pieces[1]; 
                $currentTime = date('H:i:s');
                date_default_timezone_set('Asia/Jakarta');
                $currentDate = date('Y-m-d');
                $point = 1;
                $keterangan = "Hadir: ". $request->user()->name;
                
                $siswa = Siswa::find($siswaId);
                if ($siswa) {
                    if ($siswa->username == $siswaName) {
                        $cek = $siswa->kehadiran->where('tanggal', $currentDate)->get();
                        if ($cek->count() > 0) {
                            return response()->json(['status' => 'error', 'message' => 'Not Allowed, This Student Already Absent'], 403);
                        } else {
                            $absen = new Kehadiransiswa();
                            $absen->siswa_id = $siswa->id;
                            $absen->waktu = $currentTime;
                            $absen->tanggal = $currentDate;
                            $absen->point = $point;
                            $absen->keterangan = $keterangan;
                            $act = $absen->save();
                            if ($act) {
                                $tutor = $request->user()->name;
                                return response()->json(['status' => 'error', 'ok' => "absent $siswa->nama created By Tutor $tutor"], 201);
                            } else {
                                return response()->json(['status' => 'error', 'message' => 'cannot create absent'], 403);
                            }
                        }
                    } else {
                        return response()->json(['status' => 'error', 'message' => 'Qr Code Data Not Valid'], 402);
                    }
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Siswa not Found'], 404);
                }
                
            } else {
                return response()->json(['status' => 'error', 'message' => 'Qr Code Not Found'], 404);
            }
 
        }
    }

}
