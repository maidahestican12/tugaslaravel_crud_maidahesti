<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;

class DasboardMuridController extends Controller
{
    public function index()
    {
        return view('dashboard.murid.all', [
            "title" => "student",
            "students" => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view('student.detail', ['student' => $student]);
    }

    public function create()
    {
        return view('student.create', [
            "title" => "create-new-data",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::create($validatedData);

        if ($result) {
            return redirect()->route('dashboard.students.index')->with('success', 'Data siswa berhasil ditambahkan!');
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();
            return redirect()->route('dashboard.students.index')->with('success', 'Data siswa berhasil dihapus!');
        } else {
            return redirect()->route('dashboard.students.index')->with('error', 'Data siswa tidak ditemukan!');
        }
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $kelas = Kelas::all();

        return view('student.edit', [
            'student' => $student,
            'kelas' => $kelas,
            'title' => 'Edit Data',
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::where('id', $student->id)->update($validatedData);

        if ($result) {
            return redirect()->route('dashboard.students.index')->with('success', 'Data siswa berhasil diubah!');
        }
    }
}
