<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
{
    return view('profile', [
        'nama' => 'Anggun',
        'kelas' => 'D3 Teknik Informatika',
        'npm' => '2307051004'
    ]);
}
}