<?php

namespace App\Http\Controllers\User;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class   NotificationController extends Controller
{
    public function index()
    {
        $notif = Notification::where('role', '=', 'public')->where('id', '>', "7")->get();
        return view('user.notification.index', compact('notif'));
    }

    public function detail($title)
    {
        $notif = Notification::where('title', $title)->first();
        return view('user.notification.detail', [
            'notif' => $notif,
        ]);
    }
}
