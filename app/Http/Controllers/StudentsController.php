<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;

class StudentsController extends Controller
{
    public function index()

    {
        return view('/student/all', [
            "title" => "student",
            "students" => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view ('student.detail', [
            "title" => "detail-student",
           "student" => $student

        ]);
    }

    public function show2(Student $student)
    {
        return view ('/dashboard/murid/detail', [
            "title" => "detail-student",
           "student" => $student

        ]);
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
        $validateData = $request->validate ([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'kelas_id'     => 'required',
            'tgl_lahir' => 'required',
            'alamat'    => 'required',

            
        ]);

        $result = Student::create($validateData);
        if ($result){
            return redirect('/murid/students/all')->with('success','Data siswa berhasil ditambahkan!');

        }
       
    }
    public function destroy($id)
{
    
    $student = Student::find($id);

    
    if ($student) {
        $student->delete();
        return redirect('/murid/students/all')->with('success', 'Data siswa berhasil dihapus!');
    } else {
        
        return redirect('/murid/students/all')->with('error', 'Data siswa tidak ditemukan!');
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

    public function update (Request $request, Student $student)
    {
        $validateData = $request->validate ([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'kelas_id'     => 'required',
            'tgl_lahir' => 'required',
            'alamat'    => 'required',

            
        ]);

        $result = Student::where('id', $student->id)->update($validateData);
        if ($result){
            return redirect('/murid/students/all')->with('success','Data siswa berhasil diubah!');
        }

    }
    
   
}






    






