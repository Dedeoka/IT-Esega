<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesan;

class PesanController extends Controller
{

    public function index(){
        $pesan = Pesan::all();
        return view('admin.pesan.index', compact('pesan'));
    }

    public function message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required'
        ]);

        $pesan = new Pesan();
        $pesan->name = $request->name;
        $pesan->email = $request->email;
        $pesan->message = $request->message;
        $pesan->save();

         return redirect()->route('landing')->with('success', 'Pesan Berhasil Dikirim');
    }
}
