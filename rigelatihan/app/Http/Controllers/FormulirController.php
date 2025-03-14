<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and store the file
        $path = $request->file('profile_photo')->store('profile-photos', 'public');

        // Gather data to pass to the view
        $data = $request->only(['name', 'kelas', 'judul']);
        $data['photo_path'] = $path;

        return view('hasilformulir', ['data' => $data]);
    }
}
