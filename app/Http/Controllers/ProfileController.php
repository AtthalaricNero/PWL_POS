<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function updatePhoto(Request $request)
    {
        // Validasi foto input
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:9048',  // Pastikan nama input adalah 'foto'
        ]);

        $user = Auth::user();  // Ambil user yang sedang login

        if ($request->hasFile('foto')) {  // Pastikan ada file foto yang diupload
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();  // Generate nama unik untuk file
            $file->storeAs('public/profile', $filename);  // Simpan file ke storage

            // Hapus foto lama jika ada
            if ($user->foto && Storage::exists('public/profile/' . $user->foto)) {
                Storage::delete('public/profile/' . $user->foto);  // Hapus foto lama
            }

            // Update data foto di database
            $user->foto = $filename;
            $user->save();  // Simpan perubahan
        }
        return redirect('/')->with('success', 'Foto profil berhasil diperbarui.');
    }
}
