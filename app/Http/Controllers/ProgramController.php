<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function program()
    {
        $item = Program::orderByDesc('id')->get();
        return view('pages.promo_desa.program.program', compact('item'));
    }

    public function index()
    {
        $programs = Program::orderByDesc('id')->get();
        return view('admin.program.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'img' => 'nullable|image'
        ]);

        $data = $request->only(['nama_program', 'keterangan']);

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('program', 'public');
        }

        Program::create($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $item = Program::findOrFail($id);
        return view('admin.program.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Program::findOrFail($id);

        $request->validate([
            'nama_program' => 'required|string',
            'keterangan' => 'required|string',
            'img' => 'nullable|image'
        ]);

        $data = $request->only(['nama_program', 'keterangan']);

        if ($request->hasFile('img')) {
            if ($item->img) {
                Storage::delete('public/' . $item->img);
            }

            $data['img'] = $request->file('img')->store('program', 'public');
        }

        $item->update($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diperbarui!');
    }


    public function show(Program $program)
    {
        return view('admin.program.show', compact('program'));
    }

    public function destroy(Program $program)
    {
        if ($program->img && Storage::exists('public/' . $program->img)) {
            Storage::delete('public/' . $program->img);
        }

        $program->delete();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus.');
    }
}
