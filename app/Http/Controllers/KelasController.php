<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index3()
    {
        return view('kelas.kelas', [
            "title" => "Kelas",
            "kelas" => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Kelas::create($validatedData);

        return redirect()->route('kelas.index3') // Update the route name
            ->with('success', 'Kelas created successfully');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }


public function addForm()
{
    return view('kelas.create');
}


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($validatedData);

        return redirect()->route('kelas.index3') // Update the route name
            ->with('success', 'Kelas updated successfully');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index3') // Update the route name
            ->with('success', 'Kelas deleted successfully');
}
}