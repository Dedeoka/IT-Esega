<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mole_team;
use App\Models\Mole_player;
use Illuminate\Support\Facades\DB;

class MobileLegendController extends Controller
{
    public function index(){
        $team = Mole_team::where('status', '=', 'pending')->get();
        $konfirmasi = Mole_team::where('status', '=', 'approved')->get();
        $tolak = Mole_team::where('status', '=', 'not_approved')->get();
        return view('admin.mobile-legends.index', compact('team', 'konfirmasi', 'tolak'));
    }

    public function detail($id){
        $team = Mole_team::find($id);
        return view('admin.mobile-legends.detail', compact('team'));
    }

    public function edit($id)
    {
        $team = Mole_team::find($id);
        $player = Mole_player::where('team_id', $id)->get();
        // return $player;
        return view ('admin.mobile-legends.edit', [
            'team' => $team,
            'player' => $player,
        ]);
    }

    public function editprocess(Request $request, $id)
    {
        $request->validate([
            'nama1' => 'required',
            'nick1' => 'required',
            'id1' => 'required',
            'nohp1' => 'required',
            'nama2' => 'required',
            'nick2' => 'required',
            'id2' => 'required',
            'nohp2' => 'required',
            'nama3' => 'required',
            'nick3' => 'required',
            'id3' => 'required',
            'nohp3' => 'required',
            'nama4' => 'required',
            'nick4' => 'required',
            'id4' => 'required',
            'nohp4' => 'required',
            'nama5' => 'required',
            'nick5' => 'required',
            'id5' => 'required',
            'nohp5' => 'required',
            'nama6' => 'required',
            'nick6' => 'required',
            'id6' => 'required',
            'nohp6' => 'required',
            'nama7' => 'required',
            'nick7' => 'required',
            'id7' => 'required',
            'nohp7' => 'required',
        ]);

        $player1 = Mole_player::where('id', $request->id_peserta1);
        $player1->update([
            'name' => $request->nama1,
            'nick' => $request->nick1,
            'id_server' => $request->id1,
            'no_hp' => $request->nohp1,
        ]);

        $player2 = Mole_player::where('id', $request->id_peserta2);
        $player2->update([
            'name' => $request->nama2,
            'nick' => $request->nick2,
            'id_server' => $request->id2,
            'no_hp' => $request->nohp2,
        ]);


        $player3 = Mole_player::where('id', $request->id_peserta3);
        $player3->update([
            'name' => $request->nama3,
            'nick' => $request->nick3,
            'id_server' => $request->id3,
            'no_hp' => $request->nohp3,
        ]);

        $player4 = Mole_player::where('id', $request->id_peserta4);
        $player4->update([
            'name' => $request->nama4,
            'nick' => $request->nick4,
            'id_server' => $request->id4,
            'no_hp' => $request->nohp4,
        ]);

        $player5 = Mole_player::where('id', $request->id_peserta5);
        $player5->update([
            'name' => $request->nama5,
            'nick' => $request->nick5,
            'id_server' => $request->id5,
            'no_hp' => $request->nohp5,
        ]);

        $player6 = Mole_player::where('id', $request->id_peserta6);
        $player6->update([
            'name' => $request->nama6,
            'nick' => $request->nick6,
            'id_server' => $request->id6,
            'no_hp' => $request->nohp6,
        ]);

        $player7 = Mole_player::where('id', $request->id_peserta7);
        $player7->update([
            'name' => $request->nama7,
            'nick' => $request->nick7,
            'id_server' => $request->id7,
            'no_hp' => $request->nohp7,
        ]);

        return redirect()->route('mole-admin')->with('success', 'Berhasil Mengedit Data');

    }

    public function delete($id){
        DB::table('Mole_teams')->where('id', $id)->delete();
        return redirect()->route('mole-admin')->with('success', 'Data Berhasil Dihapus');
    }

    public function approve($id)
    {
        DB::table('Mole_teams')->where('id', $id)
            ->update([
            'status' => 'approved'
            ]);
            return redirect()->route('mole-admin')->with('success', 'Bukti Pembayaran Berhasil Dikonfirmasi');
    }

    public function Tolak($id)
    {
        DB::table('Mole_teams')->where('id', $id)
            ->update([
            'status' => 'not_approved'
            ]);
            return redirect()->route('mole-admin')->with('success', 'Bukti Pembayaran Berhasil Ditolak');
    }
}
