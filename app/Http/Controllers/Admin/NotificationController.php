<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;


class NotificationController extends Controller
{
    public function index(){
        $public  = Notification::where('role', '=', 'public')->get();
        $mole = Notification::where('role', '=', 'mole')->get();
        $valo = Notification::where('role', '=', 'valo')->get();
        return view('admin.notification.index', compact('public', 'mole', 'valo'));
    }

    public function addprocess(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'role' => 'required'
        ]);

        $notif = new Notification();
        $notif->title = $request->title;
        $notif->message = $request->message;
        $notif->role = $request->role;
        $notif->save();

        return redirect()->route('dashboard')->with('success', 'Berhasil Menambahkan Informasi');
    }

    public function detail($id)
    {
        $notif = Notification::find($id);
        return view('admin.notification.detail', compact('notif'));
    }

    public function edit($id)
    {
        $notif = Notification::find($id);
        return view('admin.notification.edit', compact('notif'));
    }

    public function editprocess(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'role' => 'required'
        ]);

        DB::table('notifications')->where('id', $id)
            ->update([
            'title' => $request->title,
            'message' => $request->message,
            'role' => $request->role,
            ]);

        return redirect()->route('dashboard')->with('success', 'Berhasil Mengedit Informasi');
    }

    public function delete($id)
    {
        DB::table('notifications')->where('id', $id)->delete();
        return redirect()->route('dashboard')->with('success', 'Berhasil Menghapus Informasi');
    }
}
