<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        return redirect()->route('register.success')->with('data', $validatedData);
    }

    public function successPage()
    {
        $data = session('data');
        return view('success', compact('data'));
    }
}

