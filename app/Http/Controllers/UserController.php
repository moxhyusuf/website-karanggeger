<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Tampilkan daftar petugas
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.petugas.index', compact('users'));
    }

    /**
     * Form tambah petugas
     */
    public function create()
    {
        return view('admin.petugas.create');
    }

    /**
     * Simpan petugas baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|min:6',
            'jabatan'  => 'required|string|max:50',
            'no_hp'    => 'required|string|max:20',
            'bidang'   => 'required|string|max:50',
        ]);

        User::create([
            'nama'     => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'jabatan'  => $request->jabatan,
            'no_hp'    => $request->no_hp,
            'bidang'   => $request->bidang,
        ]);

        return redirect()->route('admin.petugas.index')
            ->with('success', 'Petugas berhasil ditambahkan');
    }

    /**
     * Form edit petugas
     */
    public function edit($id)
    {
        $petugas = User::findOrFail($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update data petugas
     */
    public function update(Request $request, $id)
    {
        $petugas = User::findOrFail($id);

        $request->validate([
            'nama'     => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username,' . $petugas->id,
            'jabatan'  => 'required|string|max:50',
            'no_hp'    => 'required|string|max:20',
            'bidang'   => 'required|string|max:50',
        ]);

        $data = [
            'nama'     => $request->nama,
            'username' => $request->username,
            'jabatan'  => $request->jabatan,
            'no_hp'    => $request->no_hp,
            'bidang'   => $request->bidang,
        ];

        // password opsional
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $petugas->update($data);

        return redirect()->route('admin.petugas.index')
            ->with('success', 'Petugas berhasil diperbarui');
    }

    /**
     * Hapus petugas
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('admin.petugas.index')
            ->with('success', 'Petugas berhasil dihapus');
    }
}
