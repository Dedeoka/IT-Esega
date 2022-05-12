<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Pesan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        $notif = Notification::where('role', '=', 'public')->where('id', '>', "7")->get();
        return view('user.notification.index', compact('notif'));
    }

    public function dashboardAdmin()
    {
        $public  = Notification::where('role', '=', 'public')->get();
        $mole = Notification::where('role', '=', 'mole')->get();
        $valo = Notification::where('role', '=', 'valo')->get();
        return view('admin.notification.index', compact('public', 'mole', 'valo'));
    }

}
