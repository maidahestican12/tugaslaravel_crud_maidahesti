<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 

class RegisterController extends Controller
{
    public function index()
{
    return view('register.index', [
        'title' => 'Signup',
    ]);
}

    public function signupR(Request $request)
    {
        $request->validate([
            'name' => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:6"
        ]);

        $data = $request->only(['name', 'email', 'password']); 
        $data['password'] = Hash::make($data['password']); 
        $user = $this->create($data);

        if ($user) {
            return redirect("/login/index")->withSuccess('You have signed in successfully');
        } else {
            return back()->withInput()->withErrors(['error' => 'Failed to create user']);
        }
    }

    public function create(array $data)
    {
        return User::create($data); 
    }
}