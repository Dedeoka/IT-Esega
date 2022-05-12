<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Notification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        'email'	=> 'Itesega@gmail.com',
        'password'	=> bcrypt('12345678'),
        ]);

        Notification::create([
        'title'	=> 'Menunggu Konfirmasi Admin!',
        'message' => 'Harap bersabar!!! bukti pembayaranmu sedang dicek oleh admin. Informasi lebih lanjut akan disampaikan melalui web, pantengin terus yaa web kami!!',
        'role' => 'mole'
        ]);

        Notification::create([
        'title'	=> 'Bukti Pendaftaranmu Ditolak!',
        'message' => 'Bukti pendaftaranmu ditolak!!! harap masukan ulang bukti pendaftaran.',
        'role' => 'mole'
        ]);

        Notification::create([
        'title'	=> 'Pendaftaran Dikonfirmasi!',
        'message' => 'Selamat bergabung di IT-ESEGA 2022!!! Silahkan join ke grup WA Mobile Legend : https://chat.whatsapp.com/JgTVZNkdYz8CmEJZVRxAlK',
        'role' => 'mole'
        ]);

        Notification::create([
        'title'	=> 'Menunggu Konfirmasi Admin!!',
        'message' => 'Harap bersabar!!! bukti pembayaranmu sedang dicek oleh admin. Informasi lebih lanjut akan disampaikan melalui web, pantengin terus yaa web kami!!',
        'role' => 'valo'
        ]);

        Notification::create([
        'title'	=> 'Bukti Pendaftaranmu Ditolak!!',
        'message' => 'Bukti pendaftaranmu ditolak!!! harap masukan ulang bukti pendaftaran.',
        'role' => 'valo'
        ]);

        Notification::create([
        'title'	=> 'Pendaftaran Dikonfirmasi!!',
        'message' => 'Selamat bergabung di IT-ESEGA 2022!!! Silahkan join ke grup WA Valorant : https://chat.whatsapp.com/DWjFN0KK3aZLxAJzxNsxYj',
        'role' => 'valo'
        ]);

        Notification::create([
        'title'	=> 'Slot Pendaftaran Telah Penuh',
        'message' => 'Slot pendaftaran perlombaan IT-ESEGA 2022 telah penuh, Terima kasih telah mengunjungi web kami!!',
        'role' => 'public'
        ]);

    }
}
