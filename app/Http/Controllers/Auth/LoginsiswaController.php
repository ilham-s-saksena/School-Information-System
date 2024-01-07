<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class LoginsiswaController extends Controller
{
    public function authenticate_siswa(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('siswa')->attempt($credentials)) {
            return redirect()->intended('/siswa/dashboard');
        }

        // Jika otentikasi gagal
        return redirect()->back()->withInput()->withErrors(['loginError' => 'Email atau password salah']);
    }

    public function index(){
        $siswa = auth()->guard('siswa')->user();
        $spp = $siswa->pembayaran;
        return view('siswa.dashboard', compact('spp'));
    }


    public function logout()
    {
        Auth::guard('siswa')->logout();
        return redirect('/login-siswa');
    }

    public function profile(Request $request){

        $userId = auth()->guard('siswa')->user()->id;
        $U = Siswa::find($userId);

        if ($request->filled('password-lama')) {
            $request->validate([
                'password-lama' => 'required',
                'password-baru' => 'required|min:8',
                'konfirmasi-password-baru' => 'required|same:password-baru',
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $passwordLama = $request->input('password-lama');
            $passwordBaru = $request->input('password-baru');

            if (!Hash::check($passwordLama, $U->password)) {
                return back()->withErrors(['password-lama' => 'Password lama tidak cocok']);
            }

            $U->password = Hash::make($passwordBaru);
        }
        

        

        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            $userId = auth()->guard('siswa')->user()->id;
            $username = auth()->guard('siswa')->user()->username;
            $fileName = $userId . '-' . $request->file('foto')->getClientOriginalName();
            $date = Carbon::now()->format('Ymd_His');
            $newFileName = "{$userId}-{$username}-{$date}.jpg";
            $request->file('foto')->move('img', $newFileName);
            if ($U->foto !== "default.jpg") {
                unlink(public_path('img/').$U->foto);
            }
    
            $U->foto = $newFileName;

        }

        $U->save();


        return back()->with('success', 'Data Berhasil Diperbarui');
    }

    public function absen(Request $request){


        function calculateDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo) {
            $earthRadius = 6371000; // Radius bumi dalam meter
        
            $latFrom = deg2rad($latitudeFrom);
            $lonFrom = deg2rad($longitudeFrom);
            $latTo = deg2rad($latitudeTo);
            $lonTo = deg2rad($longitudeTo);
        
            $latDelta = $latTo - $latFrom;
            $lonDelta = $lonTo - $lonFrom;
        
            $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        
            return $angle * $earthRadius;
        }
        
        $setLatitude = -7.4643728;
        $setLongitude = 109.3131281;
        
        
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        
        $distance = calculateDistance($setLatitude, $setLongitude, $latitude, $longitude);
        
        $radius = 50;
        if ($distance <= $radius) {
            echo"dalam jangkauan <br>";
            echo"C : $latitude <br>";
            echo"P : $setLatitude <br>";
            echo"C : $longitude <br>";
            echo"P : $setLongitude <br>";
            dd($distance);
        } else {
            echo"diluar jangkauan <br>";
            echo"C : $latitude <br>";
            echo"P : $setLatitude <br>";
            echo"C : $longitude <br>";
            echo"P : $setLongitude <br>";
            dd($distance);
        }
        
        
        $tanggal = $request->input('tanggal');
        $longitude = $request->input('longitude');
        $latitude = $request->input('latitude');
        $tanggalPadaHariIni = new \DateTime();

        $tanggalDiberikan = new \DateTime($tanggal);
        $hari = Carbon::createFromFormat('Y-m-d', $tanggal)->format('l');
        //nomorHari ; 0 = minggu, 5 = jumat, 6 = sabtu

        //validation Lvl-0
        if($hari !== "Friday" && $hari !== "Saturday" && $hari !== "Sunday"){
            echo"return back";
            // return redirect()->back()->with('message', "Lhoooo, ini tanggal $tanggalPadaHariIniStr, anda mencoba absen pada bukan hari aktif belajar di PKBM : $tanggalDiberikanStr");
        }

        //validation Lvl-1
        if ($tanggalDiberikan > $tanggalPadaHariIni || $tanggalDiberikan < $tanggalPadaHariIni) {
            $tanggalPadaHariIniStr = $tanggalPadaHariIni->format('d-m-Y');
            $tanggalDiberikanStr = $tanggalDiberikan->format('d-m-Y');
            echo"return backk, hari ini $tanggalPadaHariIniStr != $tanggalDiberikanStr";
            // return redirect()->back()->with('message', "Lhoooo, sekarang baru tanggal $tanggalPadaHariIniStr, anda mencoba absen untuk tanggal yang belum dilalui atau tanggal yang sudah terlewat : $tanggalDiberikanStr");
        }

        dump($longitude);
        dump($latitude);
        dd($hari);
    }
}
