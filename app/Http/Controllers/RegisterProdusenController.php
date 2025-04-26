<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produsen;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class RegisterProdusenController extends Controller
{
    public function index()
    {
        return view('pages.login.register-produsen');
    }

    public function storeRoleProdusen(Request $request)
    {
        try {
            // Validate the incoming request
            $validateData = $request->validate([
                'nama_produsen' => 'required',
                'alamat_produsen' => 'required',
                'email_produsen' => 'required|email|unique:users,email',
                'password_produsen' => 'required|min:6',
                'nama_perusahaan' => 'required',
                'NPWP' => 'nullable', // karena NPWP opsional
                'jenis_perusahaan' => 'required',
                'deskripsi_perusahaan' => 'required',
                'sektor_industri' => 'required',
                'no_telpon' => 'required',
                'email_perusahaan' => 'required|email',
                'website_perusahaan' => 'nullable',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
            ]);

            // Log validation data
            Log::info('Validation Passed', $validateData);

            // Simpan User
            $user = User::create([
                'nama' => $validateData['nama_produsen'],
                'email' => $validateData['email_produsen'],
                'password' => Hash::make($validateData['password_produsen']),
            ]);

            Log::info('User Created', ['user_id' => $user->id_user]);

            // Simpan Produsen
            $produsen = Produsen::create([
                'id_user' => $user->id_user,
                'nama_produsen' => $validateData['nama_produsen'],
                'alamat_produsen' => $validateData['alamat_produsen'],
            ]);

            Log::info('Produsen Created', ['produsen_id' => $produsen->id_produsen]);

            // Simpan Perusahaan
            $perusahaan = Perusahaan::create([
                'id_produsen' => $produsen->id_produsen,
                'nama_perusahaan' => $validateData['nama_perusahaan'],
                'NPWP' => $validateData['NPWP'],
                'jenis_perusahaan' => $validateData['jenis_perusahaan'],
                'deskripsi_perusahaan' => $validateData['deskripsi_perusahaan'],
                'sektor_industri' => $validateData['sektor_industri'],
                'no_telpon' => $validateData['no_telpon'],
                'email_perusahaan' => $validateData['email_perusahaan'],
                'website_perusahaan' => $validateData['website_perusahaan'],
                'provinsi' => $validateData['provinsi'],
                'kabupaten' => $validateData['kabupaten'],
                'kecamatan' => $validateData['kecamatan'],
                'desa' => $validateData['desa'],
            ]);

            Log::info('Perusahaan Created', ['perusahaan_id' => $perusahaan->id_perusahaan]);

            // Success response
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            // Log the exception message
            Log::error('Error storing Produsen role', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            // Return a failure message
            return redirect()->back()->with('error', 'Data gagal disimpan!');
        }
    }
}
